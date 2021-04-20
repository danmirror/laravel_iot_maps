<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Data;
use App\Models\Parameter;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
      return view('user.login');
    }
    public function loginStore(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ]);
      $email = $request->email;
      $password = $request->password;

      $data = User::where('email',$email)->first();
      if($data){  //apakah email tersebut ada atau tidak

        if(Hash::check($password,$data->password)){
          Session::put('name',$data->name);
          Session::put('email',$data->email);
          Session::put('login',TRUE);
          Session::put('first',TRUE);
          
          return redirect('/');
        }
        else{
          return redirect('/user/login')->with('alert',' Password salah !');
        }
      }
      else{
        return redirect('/user/login')->with('alert',' Email belum terdaftar !');
      }
    }


    public function index()
    {   
      if(!Session::get('login')){
        return redirect('/user/login')->with('alert','Kamu harus login dulu');
      }
      $username = Session('name');
      $user = User::where('name',$username)->first();
      $data = Data::where([['id_user',"=",$user->id]])->get();
      
      $length_cycle = 0;
      $car_array =[];
      $active = 0;
      foreach($data as $data_sort){
        $times = strtotime(date($data_sort->updated_at));
        $day = date("d-m-Y",  $times+7*60*60);
        
        $this_day = date("d-m-Y", strtotime(date("d-m-Y")));

        if($day == $this_day){
          $active +=1;
          // length cycle
          if($data_sort->cycle > $length_cycle)
            $length_cycle = $data_sort->cycle;
        }

        // get all car
        if(!in_array($data_sort->id_car,$car_array)){
          $car_array[]=$data_sort->id_car;

        }
      }

  
      // dd(count($car_array));

      return view('user.index',[
        'user'=>$user,
        'amount' =>count($car_array),
        'active' =>$active,
        'length_cycle' => $length_cycle,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd("uhu");
        $this->validate($request, [
          'name' => 'required',
          'email' => 'required|min:4|email',
          'password' => 'required',
          'confirm' => 'required',
        ]);

        $email = $request->email;
        $data = User::where('email',$email)->first();

        if($data){
            return redirect('user-add')->with('alert','Email sudah terdaftar!');
        }
        if($request->password == $request->confirm)
        {
            $data =  new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();
            return redirect('/user/login')->with('alert-success','Pendaftaran berhasil');
        }
        else{
            return redirect('user-add')->with('alert','Password tidak sama');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(){
        Session::flush();
        return redirect('user/login')->with('alert','Kamu sudah logout');
    }
}

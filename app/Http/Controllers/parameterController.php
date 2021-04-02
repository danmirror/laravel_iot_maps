<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\User;
use App\Models\Parameter;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class parameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(!Session::get('login')){
        return redirect('/user/login')->with('alert','Kamu harus login dulu');
      }
      $username = Session('name');
      $user = User::where('name',$username)->first();
      $data = Parameter::where('id_user',$user->id)->first();
     
      return view('parameter.create',
      [ 
        'user'=>$user,
        'data'=>$data,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(!Session::get('login')){
        return redirect('/user/login')->with('alert','Kamu harus login dulu');
      }
      // dd($request->xmina);
      $this->validate($request, [
        'xmina' => 'required',
        'xminb' => 'required',
        'xminc' => 'required',

        'ymina' => 'required',
        'yminb' => 'required',
        'yminc' => 'required',

        'xmaxa' => 'required',
        'xmaxb' => 'required',
        'xmaxc' => 'required',

        'ymaxa' => 'required',
        'ymaxb' => 'required',
        'ymaxc' => 'required',

        'speeda' => 'required',
        'speedb' => 'required',
        'speedc' => 'required',
        ]);
        
      $username = Session('name');
      $user = User::where('name',$username)->first();
      $data_user = Parameter::where('id_user',$user->id)->first();
      if($data_user == NULL)
      {
        // dd("yeah");
        $data =  new Parameter();
        $data->id_user = $user->id;
        $data->xmina = $request->xmina;
        $data->xminb = $request->xminb;
        $data->xminc = $request->xminc;

        $data->ymina = $request->ymina;
        $data->yminb = $request->yminb;
        $data->yminc = $request->yminc;

        $data->xmaxa = $request->xmaxa;
        $data->xmaxb = $request->xmaxb;
        $data->xmaxc = $request->xmaxc;
        
        $data->ymaxa = $request->ymaxa;
        $data->ymaxb = $request->ymaxb;
        $data->ymaxc = $request->ymaxc;

        $data->speeda = $request->speeda;
        $data->speedb = $request->speedb;
        $data->speedc = $request->speedc;
        $data->save();
        return redirect('parameter')->with('alert-success','Data created!');
      }
      else{
        $data_user->xmina = $request->xmina;
        $data_user->xminb = $request->xminb;
        $data_user->xminc = $request->xminc;

        $data_user->ymina = $request->ymina;
        $data_user->yminb = $request->yminb;
        $data_user->yminc = $request->yminc;

        $data_user->xmaxa = $request->xmaxa;
        $data_user->xmaxb = $request->xmaxb;
        $data_user->xmaxc = $request->xmaxc;

        $data_user->ymaxa = $request->ymaxa;
        $data_user->ymaxb = $request->ymaxb;
        $data_user->ymaxc = $request->ymaxc;

        $data_user->speeda = $request->speeda;
        $data_user->speedb = $request->speedb;
        $data_user->speedc = $request->speedc;
        $data_user->save();
        return redirect('/parameter')->with('alert-success','Data update!');
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
}

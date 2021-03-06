<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\User;
use App\Models\Parameter;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class data_algo{
  public static $low_low =0;
  public static $low_mid = 0;
  public static $low_high = 0;
//sedang
  public static $mid_low = 0;
  public static $mid_mid = 0;
  public static $mid_high = 0;
//tinggi
  public static $high_low = 0;
  public static $high_mid = 0;
  public static $high_high = 0;


  // speed range
  public static $state_cycle=0;
  public static $length = [];
  public static $container = [];

  //algoritma get count value
  public static function data_algo($data,$parameter){

    // $datasss = [];
    foreach($data as $data_all){
      if(session::get('date')){
        $times = strtotime(date($data_all->updated_at));
        $times_day = date("d-m-Y",  $times+7*60*60);
        // dd(session::get('date'));
        if(session::get('date') == $times_day){
          // $datasss[]=1;
          
          //goncangan tinggi
          if($data_all->xgyro > $parameter->xminc && $data_all->xgyro < $parameter->xmaxc ||
            $data_all->ygyro > $parameter->yminc && $data_all->ygyro < $parameter->ymaxc ){
          
            if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
              self::$high_low +=1;
            elseif($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
              self::$high_mid +=1;
            elseif($data_all->speed >= $parameter->speedc)
              self::$high_high +=1;
          }

          //goncangan sedang
          elseif($data_all->xgyro > $parameter->xminb && $data_all->xgyro < $parameter->xmaxb ||
            $data_all->ygyro > $parameter->yminb && $data_all->ygyro < $parameter->ymaxb ){

            if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
              self::$mid_low +=1;
            elseif($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
              self::$mid_mid +=1;
            elseif($data_all->speed >= $parameter->speedc)
              self::$mid_high +=1;
          }

           //goncangan rendah
          elseif($data_all->xgyro > $parameter->xmina && $data_all->xgyro < $parameter->xmaxa ||
            $data_all->ygyro > $parameter->ymina && $data_all->ygyro < $parameter->ymaxa ){
          
            if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
              self::$low_low +=1; 
            elseif($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
              self::$low_mid +=1;
            elseif($data_all->speed >= $parameter->speedc)
              self::$low_high +=1;
          
          }
          
          
          
        }
      }
     
        
    }
    // dd(  $datasss);
  }

  public static function speed_range($data){
    // $data_cycle = 6;

    foreach($data as $data_all){
      if(session::get('date')){
        $times = strtotime(date($data_all->updated_at));
        $times_day = date("d-m-Y",  $times+7*60*60);
        // dd(session::get('date'));
        if (!(int)$data_all->cycle){
          // dd($data_all->cycle);
        }else{

          if(session::get('date') == $times_day){
            if($data_all->cycle >=  self::$state_cycle){
              self::$state_cycle = $data_all->cycle;
            }
          }
        }
      }
    }
    // make container and length
    for($iter =1; $iter <=self::$state_cycle; $iter ++){
      ${"temp_array" . $iter}= [];
      self::$length []=$iter;
    }
      
    foreach($data as $data_all){
      if(session::get('date')){
        $times = strtotime(date($data_all->updated_at));
        $times_day = date("d-m-Y",  $times+7*60*60);
        // dd(session::get('date'));
        if(session::get('date') == $times_day){
          for($i=1; $i<=self::$state_cycle; $i++){
            if($i == $data_all->cycle){
              ${"temp_array" . $i}[] = $data_all->speed;
            }
          }
        }
      }
    }

    $temp_array_val = 0;
    for($iter_range =1; $iter_range <=self::$state_cycle; $iter_range ++){
      foreach(${"temp_array" . $iter_range} as $temp_array){
        $temp_array_val += (int)$temp_array;
        
      }
      if($temp_array_val)
        self::$container []=$temp_array_val/count(${"temp_array" . $iter_range});
      else
        self::$container []=0;
      $temp_array_val=0;
    }
  }

}
class dataController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function data(Request $request)
    {
      // ini_set('memory_limit', '-1');
      
      if(!Session::get('login')){
        return redirect('/user/login')->with('alert','Kamu harus login dulu');
      }
      
      if(!session::get('setting')){
        $setting = 1;
      }
      else{
        if($request->setting){
          $setting = $request->setting;
        }
        else{
          $setting = session::get('setting');
        }
      }
      session::put('setting',$setting);
      
      //date
      if($request->date)
        session::put('date',$request->date);
      else //get this day
        session::put('date',date("d-m-Y", strtotime(date("d-m-Y H:i"))+7*60*60 ));

      // dd($request->date);
   
      // updated_at
      // dd($setting);
      $username = Session('name');
      $user = User::where('name',$username)->first();
      $data = Data::where([['id_user',"=",$user->id],
                          ['id_car',"=",$setting]])->get();
      $parameter = Parameter::where('id_user',$user->id)->first();
      $data_setting = Data::where('id_user',$user->id)->get();
     

      // ==========================cheker============
      $data_cycle = [];
      $data_long = [];
      $data_lat = [];
      $data_x = [];
      $data_y = [];
      foreach( $data  as $data_sort){

        $data_cycle []=$data_sort->cycle;
        $data_long []=$data_sort->longitude;
        $data_lat []=$data_sort->latitude;
        $data_x []=$data_sort->xgyro;
        $data_y []=$data_sort->ygyro;
      }
      // dd($data_cycle,$data_long,$data_lat,$data_x,$data_y);
      // ==========================================================


      data_algo::speed_range($data);

      data_algo::data_algo($data,$parameter);
      $approach=[
        data_algo::$low_low,data_algo::$low_mid,data_algo::$low_high,
        data_algo::$mid_low,data_algo::$mid_mid,data_algo::$mid_high,
        data_algo::$high_low,data_algo::$high_mid,data_algo::$high_high];

      // dd(data_algo::$length,data_algo::$container);
      return view('data.index',
      [
        'user'=>$user,
        'data'=>$data,
        'data_setting'=>$data_setting,
        'parameter' => $parameter,
        'approach' =>$approach,
        'container' =>data_algo::$container,
        'length' =>data_algo::$length,
      ]);
    }


    public function index(Request $request)
    {
      // ini_set('memory_limit', '-1');
      // dd($request->param);
      if(!Session::get('login')){
        return redirect('/user/login')->with('alert','Kamu harus login dulu');
      }

      //cycle session
      if(!session::get('cycle')){
        session::put('cycle',"1");
      }
      else if($request->cycle){
        session::put('cycle',$request->cycle);
      }

      //param session
      if(!session::get('param')){
        session::put('param',"low_low");
      }
      else if($request->param){
        session::put('param',$request->param);
      }
      

      //setting session
      if(!session::get('setting')){
        $setting = 1;
      }
      else{
        if($request->setting){
          $setting = $request->setting;
        }
        else{
          $setting = session::get('setting');
        }
      }
      session::put('setting',$setting);

      //date
      if($request->date)
        session::put('date',$request->date);
      else
        session::put('date',date("d-m-Y", strtotime(date("d-m-Y H:i"))+7*60*60 ));

      // dd($setting);
      $username = Session('name');
      $user = User::where('name',$username)->first();
      $data = Data::where([['id_user',"=",$user->id],
                          ['id_car',"=",$setting]])->get();
      $parameter = Parameter::where('id_user',$user->id)->first();
      $data_setting = Data::where('id_user',$user->id)->get();


      $length_cycle = 0;
      foreach($data as $data_sort){
        $times = strtotime(date($data_sort->updated_at));
        $day = date("d-m-Y",  $times+7*60*60);
        
        // get length
        if ((int)$data_sort->cycle){
          if($day == Session::get('date')){
            if($data_sort->cycle > $length_cycle){
              $length_cycle = $data_sort->cycle;
            }
          }
        }
        else{
          // dd($data_sort->cycle);
        }
      }
      // dd($length_cycle);
        

      return view('maps.index',
      [
        'user'=>$user,
        'data'=>$data,
        'data_setting'=>$data_setting,
        'parameter' => $parameter,
        'length_cycle'=>$length_cycle,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $userid = User::where('id',$request->id_user)->first();
      // $data = $request;
      if(!$userid){
        // return response()->json([
        //   'id' => $request->id_user,
        //   'description' => $request,
        //   'user id' =>$request->id_user,
        // ]);
      }
      // dd();
      else{
          $data =  new Data();
          // // // dd($userid->id);
          $data->id_user = $request->id_user;
          $data->id_car = $request->id_car;
          $data->btn_empty = $request->btn_empty;
          $data->btn_filled = $request->btn_filled;
          $data->btn_loading = $request->btn_loading;
          $data->btn_trash = $request->btn_trash;
          $data->longitude = $request->longitude;
          $data->latitude  = $request->latitude;
          $data->xgyro = $request->xgyro;
          $data->ygyro = $request->ygyro;
          $data->speed = $request->speed;
          $data->temp = $request->temp;
          $data->cycle = $request->cycle;
          $data->save();
          // return response()->json([
          //   'id' => $request->id_user,
          //   'description' => 'success',
          // ],200);
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

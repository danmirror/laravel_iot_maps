@extends ('layout.base')
@section('title','maps')
@section('content')

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light shadow fixed-sidebar" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="image/logo" alt="" style="width: 170px;">   
      </div>
      <div class="list-group list-group-flush">
        <a href="/" class="d-flex align-items-center list-group-item list-group-item-action hover-blue-violet rounded">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7,17L10.2,10.2L17,7L13.8,13.8L7,17M12,11.1A0.9,0.9 0 0,0 11.1,12A0.9,0.9 0 0,0 12,12.9A0.9,0.9 0 0,0 12.9,12A0.9,0.9 0 0,0 12,11.1M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
          </svg>
          Dashboard
        </a>
        <a href="{{route('maps')}}" class=" d-flex align-items-center list-group-item list-group-item-action hover-blue-violet rounded">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
          </svg>
          Maps
        </a>
        <a href="{{route('data')}}" class="d-flex align-items-center list-group-item list-group-item-action hover-blue-violet rounded">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6,16.5L3,19.44V11H6M11,14.66L9.43,13.32L8,14.64V7H11M16,13L13,16V3H16M18.81,12.81L17,11H22V16L20.21,14.21L13,21.36L9.53,18.34L5.75,22H3L9.47,15.66L13,18.64" />
          </svg>
          Data
        </a>
        <a href="{{route('parameter')}}" class="d-flex align-items-center list-group-item list-group-item-action hover-blue-violet rounded">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M11.7 20H11.3L10.9 17.4C9.7 17.2 8.7 16.5 7.9 15.6L5.5 16.6L4.7 15.3L6.8 13.7C6.4 12.5 6.4 11.3 6.8 10.1L4.7 8.7L5.5 7.4L7.9 8.4C8.7 7.5 9.7 6.9 10.9 6.6L11.2 4H12.7L13.1 6.6C14.3 6.8 15.4 7.5 16.1 8.4L18.5 7.4L19.3 8.7L17.2 10.2C17.4 10.8 17.5 11.4 17.5 12H18C18.5 12 19 12.1 19.5 12.2V12L19.4 11L21.5 9.4C21.7 9.2 21.7 9 21.6 8.8L19.6 5.3C19.5 5 19.3 5 19 5L16.5 6C16 5.6 15.4 5.3 14.8 5L14.4 2.3C14.5 2.2 14.2 2 14 2H10C9.8 2 9.5 2.2 9.5 2.4L9.1 5.1C8.5 5.3 8 5.7 7.4 6L5 5C4.7 5 4.5 5 4.3 5.3L2.3 8.8C2.2 9 2.3 9.2 2.5 9.4L4.6 11L4.5 12L4.6 13L2.5 14.7C2.3 14.9 2.3 15.1 2.4 15.3L4.4 18.8C4.5 19 4.7 19 5 19L7.5 18C8 18.4 8.6 18.7 9.2 19L9.6 21.7C9.6 21.9 9.8 22.1 10.1 22.1H12.6C12.1 21.4 11.9 20.7 11.7 20M16 12.3V12C16 9.8 14.2 8 12 8S8 9.8 8 12C8 14.2 9.8 16 12 16C12.7 14.3 14.2 12.9 16 12.3M10 12C10 10.9 10.9 10 12 10S14 10.9 14 12 13.1 14 12 14 10 13.1 10 12M18 14.5V13L15.8 15.2L18 17.4V16C19.4 16 20.5 17.1 20.5 18.5C20.5 18.9 20.4 19.3 20.2 19.6L21.3 20.7C22.5 18.9 22 16.4 20.2 15.2C19.6 14.7 18.8 14.5 18 14.5M18 21C16.6 21 15.5 19.9 15.5 18.5C15.5 18.1 15.6 17.7 15.8 17.4L14.7 16.3C13.5 18.1 14 20.6 15.8 21.8C16.5 22.2 17.2 22.5 18 22.5V24L20.2 21.8L18 19.5V21Z" />
          </svg>
         Setting
        </a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      @include('template.nav')

      <div class="container content">
        <h3 class="mt-2 title">Maps</h3>
        <div class="container-content shadow">

          <div class="row justify-content-around ">
            <div class="col-lg-4 col-md">
              <form action="" method="get">

                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="settings">Set ID</label>
                  </div>
                  <select name="setting" class="custom-select setting" id="settings">
                    <option selected disabled hidden >{{session('setting')}}</option>
                    <?php $car_array = [];?>

                    @foreach($data_setting as $data_car)
                      @if(!in_array($data_car->id_car,$car_array))
                      <?php $car_array[]= $data_car->id_car;?> 
                      <option id="{{$data_car->id_car}}" value="{{$data_car->id_car}}">{{$data_car->id_car}}</option>
                      @endif
                    @endforeach

                  </select>
                  <div class="input-group-append">
                  <button class="btn bg-blue-violet d-flex ">
                    <svg style="width:24px;height:2 4px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" />
                    </svg>
                  </button>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-lg-4 col-md">
              <form action="" method="get">

                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="cycle">Set cycle</label>
                  </div>
                  <select name="cycle" class="custom-select setting" id="cycle">
                    <option selected disabled hidden >{{session('cycle')}}</option>
                    <?php $car_array = [];?>

                    @for($i =1; $i<= $length_cycle;$i++)
                      
                      <option id="{{$i}}" value="{{$i}}">{{$i}}</option>
                  
                    @endfor

                  </select>
                  <div class="input-group-append">
                  <button class="btn bg-blue-violet d-flex ">
                    <svg style="width:24px;height:2 4px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" />
                    </svg>
                  </button>
                  </div>
                </div>
              </form>
            </div>
            
            <div class="col-lg-4 col-md">
              <form action="" method="get">
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="select">Set Time</label>
                  </div>

                  <input class='form-control' type="text" id="date" name="date" value="{{session('date')}}">

                  <div class="input-group-append">
                  <button class="btn bg-blue-violet d-flex ">
                  <svg style="width:24px;height:2 4px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" />
                  </svg>
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <div class="row">
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed L shock H
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed L shock M
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed L shock L
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed M shock H
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed M shock M
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed M shock L
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed H shock H
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed H shock M
            </div>
            <div class="col-6 col-lg-4">
              <div class="legend"></div>
              speed H shock L
            </div>
          </div>
          <div class="position-relative mt-4" style="min-height:500px">
            <div id="map"></div>
          </div>
        </div>
        <div class="container-content shadow mt-5">
          <div class="row justify-content-between ">
            <div class="col-6 mb-4">
              <h4 class="font mb-1">Status Sensor</h4 >
            </div>
            <div class="col-lg-5 col-md">
              <form action="" method="get">

                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="param">Set Param</label>
                  </div>
                  <select name="param" class="custom-select " id="param">
                      <option selected disabled hidden >{{session('param')}}</option>
                      <option disabled >shock speed</option>
                      <option value="low_low">low_low</option>
                      <option value="low_mid">low_mid</1option>
                      <option value="low_high">low_high</option>
                      <option value="mid_low">mid_low</option>
                      <option value="mid_mid">mid_mid</option>
                      <option value="mid_high">mid_high</option>
                  
                  </select>
                  <div class="input-group-append">
                  <button class="btn bg-blue-violet d-flex ">
                    <svg style="width:24px;height:2 4px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" />
                    </svg>
                  </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <canvas id="condition" width="400" height="100"></canvas>
        </div>
      </div>
      @include('template.footer')
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  
  <script>
    document.getElementById("{{session('setting')}}").selected = "true"
  
    let data_trig_1=[];
    let data_1=[];
    let data_trig_2=[];
    let data_2=[];

    // add sensor
    let value_sensor_s = [];
    let value_sensor_ax = [];
    let value_sensor_ay = [];

    // add data sensor zero for same all data in grafik
    // low
    let value_sensor_low_low_s = [];
    let value_sensor_low_low_ax = [];
    let value_sensor_low_low_ay = [];

    let value_sensor_low_mid_s = [];
    let value_sensor_low_mid_ax = [];
    let value_sensor_low_mid_ay = [];

    let value_sensor_low_high_s = [];
    let value_sensor_low_high_ax = [];
    let value_sensor_low_high_ay = [];

    // mid
    let value_sensor_mid_low_s = [];
    let value_sensor_mid_low_ax= [];
    let value_sensor_mid_low_ay = [];

    let value_sensor_mid_mid_s = [];
    let value_sensor_mid_mid_ax= [];
    let value_sensor_mid_mid_ay = [];

    let value_sensor_mid_high_s = [];
    let value_sensor_mid_high_ax= [];
    let value_sensor_mid_high_ay = [];
    
    // high
    let value_sensor_high_low_s = [];
    let value_sensor_high_low_ax = [];
    let value_sensor_high_low_ay = [];

    let value_sensor_high_mid_s = [];
    let value_sensor_high_mid_ax = [];
    let value_sensor_high_mid_ay = [];

    let value_sensor_high_high_s = [];
    let value_sensor_high_high_ax = [];
    let value_sensor_high_high_ay = [];

    
    // goncangan rendah speed rendah
    let low_low = [];
    let data_low_low = [];
    let array_low_low = [];

    let low_mid = [];
    let data_low_mid = [];
    let array_low_mid = [];

    let low_high = [];
    let data_low_high = [];
    let array_low_high = [];

    // sedang
    let mid_low = [];
    let data_mid_low = [];
    let array_mid_low = [];

    let mid_mid = [];
    let data_mid_mid = [];
    let array_mid_mid = [];

    let mid_high = [];
    let data_mid_high = [];
    let array_mid_high = [];

    //tinggi
    let high_low = [];
    let data_high_low = [];
    let array_high_low = [];

    let high_mid = [];
    let data_high_mid = [];
    let array_high_mid = [];

    let high_high = [];
    let data_high_high = [];
    let array_high_high = [];

    <?php $time_array=[];?>
    @foreach($data as $data_all)

      @if(session('date'))
        <?php 
        $times = strtotime(date($data_all->updated_at));
        $times_day = date("d-m-Y",  $times+7*60*60);
        $times_actual = date("H:i",  $times+7*60*60);
        ?>
        @if(session('date') == $times_day && $data_all->cycle == session('cycle') )
          <?php $time_array []= $times_actual; ?>

          data_trig_1.push(<?= $data_all->longitude; ?>);
          data_trig_1.push(<?= $data_all->latitude; ?>);
          data_1.push(data_trig_1);
          //reset
          data_trig_1 = [];
          console.log("count")
          //goncangan rendah
          @if($data_all->xgyro > $parameter->xmina && $data_all->xgyro < $parameter->xmaxa ||
            $data_all->ygyro > $parameter->ymina && $data_all->ygyro < $parameter->ymaxa )
            
              @if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
                // stack value
                console.log("low-low");
                low_low.push(<?= $data_all->longitude; ?>);
                low_low.push(<?= $data_all->latitude; ?>);
                data_low_low.push(low_low);
                low_low =[];

                // add data sensor
                value_sensor_low_low_s.push(<?= $data_all->speed; ?>);
                value_sensor_low_low_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_low_low_ay.push(<?= $data_all->ygyro; ?>);
                            
              @else
                // add data sensor zero for same all data in grafik
                value_sensor_low_low_s.push(0);
                value_sensor_low_low_ax.push(0);
                value_sensor_low_low_ay.push(0);

                // interance value in main array
                array_low_low.push( data_low_low);
                data_low_low = [];
              @endif

              @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
                console.log("low-mid");
                low_mid.push(<?= $data_all->longitude; ?>);
                low_mid.push(<?= $data_all->latitude; ?>);
                data_low_mid.push(low_mid);
                low_mid =[];

                // add data sensor
                value_sensor_low_mid_s.push(<?= $data_all->speed; ?>);
                value_sensor_low_mid_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_low_mid_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_low_mid_s.push(0);
                value_sensor_low_mid_ax.push(0);
                value_sensor_low_mid_ay.push(0);

                // interance value in main array
                array_low_mid.push( data_low_mid);
                data_low_mid =[];
              @endif

              @if($data_all->speed >= $parameter->speedc)
                console.log("low-high");
                low_high.push(<?= $data_all->longitude; ?>);
                low_high.push(<?= $data_all->latitude; ?>);
                data_low_high.push(low_high);
                low_high =[];
                
                // add data sensor
                value_sensor_low_high_s.push(<?= $data_all->speed; ?>);
                value_sensor_low_high_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_low_high_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_low_high_s.push(0);
                value_sensor_low_high_ax.push(0);
                value_sensor_low_high_ay.push(0);

                // interance value in main array
                array_low_high.push( data_low_high);
                data_low_high =[];
              @endif

          @else
            value_sensor_low_low_s.push(0);
            value_sensor_low_low_ax.push(0);
            value_sensor_low_low_ay.push(0);

            value_sensor_low_mid_s.push(0);
            value_sensor_low_mid_ax.push(0);
            value_sensor_low_mid_ay.push(0);

            value_sensor_low_high_s.push(0);
            value_sensor_low_high_ax.push(0);
            value_sensor_low_high_ay.push(0);

            //check if still have value
            if(data_low_low.length){
              array_low_low.push( data_low_low);
              data_low_low = [];
            }
            if(data_low_mid.length){
              array_low_mid.push( data_low_mid);
              data_low_mid =[];
            }
            if(data_low_high.length){
              array_low_high.push( data_low_high);
              data_low_high =[];
            }
          @endif
        
          //goncangan sedang
          @if($data_all->xgyro > $parameter->xminb && $data_all->xgyro < $parameter->xmaxb ||
            $data_all->ygyro > $parameter->yminb && $data_all->ygyro < $parameter->ymaxb )
              
              @if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
                console.log("mid-low");
                mid_low.push(<?= $data_all->longitude; ?>);
                mid_low.push(<?= $data_all->latitude; ?>);
                data_mid_low.push(mid_low);
                mid_low =[];

                // add data sensor
                value_sensor_mid_low_s.push(<?= $data_all->speed; ?>);
                value_sensor_mid_low_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_mid_low_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_mid_low_s.push(0);
                value_sensor_mid_low_ax.push(0);
                value_sensor_mid_low_ay.push(0);

                // interance value in main array
                array_mid_low.push( data_mid_low);
                data_mid_low = [];
              @endif

              @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
                console.log("mid-mid");
                mid_mid.push(<?= $data_all->longitude; ?>);
                mid_mid.push(<?= $data_all->latitude; ?>);
                data_mid_mid.push(mid_mid);
                mid_mid =[];

                // add data sensor
                value_sensor_mid_mid_s.push(<?= $data_all->speed; ?>);
                value_sensor_mid_mid_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_mid_mid_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_mid_mid_s.push(0);
                value_sensor_mid_mid_ax.push(0);
                value_sensor_mid_mid_ay.push(0);

                // interance value in main array
                array_mid_mid.push( data_mid_mid);
                data_mid_mid=[];
              @endif

              @if($data_all->speed >= $parameter->speedc)
                console.log("mid-high");
                mid_high.push(<?= $data_all->longitude; ?>);
                mid_high.push(<?= $data_all->latitude; ?>);
                data_mid_high.push(mid_high);
                mid_high =[];

                // add data sensor
                value_sensor_mid_high_s.push(<?= $data_all->speed; ?>);
                value_sensor_mid_high_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_mid_high_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_mid_high_s.push(0);
                value_sensor_mid_high_ax.push(0);
                value_sensor_mid_high_ay.push(0);

                // interance value in main array
                array_mid_high.push( data_mid_high);
                data_mid_high = [];
              @endif
          @else
            value_sensor_mid_low_s.push(0);
            value_sensor_mid_low_ax.push(0);
            value_sensor_mid_low_ay.push(0);

            value_sensor_mid_mid_s.push(0);
            value_sensor_mid_mid_ax.push(0);
            value_sensor_mid_mid_ay.push(0);

            value_sensor_mid_high_s.push(0);
            value_sensor_mid_high_ax.push(0);
            value_sensor_mid_high_ay.push(0);

            //check if still have value
            if(data_mid_low.length){
              array_mid_low.push( data_mid_low);
              data_mid_low = [];
            }
            if(data_mid_mid.length){
              array_mid_mid.push( data_mid_mid);
              data_mid_mid =[];
            }
            if(data_mid_high.length){
              array_mid_high.push( data_mid_high);
              data_mid_high =[];
            }
          @endif

          //goncangan tinggi
          @if($data_all->xgyro > $parameter->xminc && $data_all->xgyro < $parameter->xmaxc ||
            $data_all->ygyro > $parameter->yminc && $data_all->ygyro < $parameter->ymaxc )
            
              @if($data_all->speed >= $parameter->speeda && $data_all->speed < $parameter->speedb)
                console.log("high-low");
                high_low.push(<?= $data_all->longitude; ?>);
                high_low.push(<?= $data_all->latitude; ?>);
                data_high_low.push(high_low);
                high_low =[];
                
                // add data sensor
                value_sensor_high_low_s.push(<?= $data_all->speed; ?>);
                value_sensor_high_low_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_high_low_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_high_low_s.push(0);
                value_sensor_high_low_ax.push(0);
                value_sensor_high_low_ay.push(0);

                // interance value in main array
                array_high_low.push( data_high_low);
                data_high_low = [];
              @endif

              @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
                console.log("high-mid");
                high_mid.push(<?= $data_all->longitude; ?>);
                high_mid.push(<?= $data_all->latitude; ?>);
                data_high_mid.push(high_mid);
                high_mid =[];
                
                // add data sensor
                value_sensor_high_mid_s.push(<?= $data_all->speed; ?>);
                value_sensor_high_mid_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_high_mid_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_high_mid_s.push(0);
                value_sensor_high_mid_ax.push(0);
                value_sensor_high_mid_ay.push(0);

                // interance value in main array
                array_high_mid.push( data_high_mid);
                data_high_mid = [];
              @endif

              @if($data_all->speed >= $parameter->speedc)
                console.log("high-high");
                high_high.push(<?= $data_all->longitude; ?>);
                high_high.push(<?= $data_all->latitude; ?>);
                data_high_high.push(high_high);
                high_high =[];
                
                // add data sensor
                value_sensor_high_high_s.push(<?= $data_all->speed; ?>);
                value_sensor_high_high_ax.push(<?= $data_all->xgyro; ?>);
                value_sensor_high_high_ay.push(<?= $data_all->ygyro; ?>);

              @else
                // add data sensor
                value_sensor_high_high_s.push(0);
                value_sensor_high_high_ax.push(0);
                value_sensor_high_high_ay.push(0);

                // interance value in main array
                array_high_high.push( data_high_high);
                data_high_high = [];
              @endif

          @else
            value_sensor_high_low_s.push(0);
            value_sensor_high_low_ax.push(0);
            value_sensor_high_low_ay.push(0);

            value_sensor_high_mid_s.push(0);
            value_sensor_high_mid_ax.push(0);
            value_sensor_high_mid_ay.push(0);

            value_sensor_high_high_s.push(0);
            value_sensor_high_high_ax.push(0);
            value_sensor_high_high_ay.push(0);

            //check if still have value
            if(data_high_low.length){
              array_high_low.push( data_high_low);
              data_high_low = [];
            }
            if(data_high_mid.length){
              array_high_mid.push( data_high_mid);
              data_high_mid =[];
            }
            if(data_high_high.length){
              array_high_high.push( data_high_high);
              data_high_high =[];
            }
          @endif

        @endif
      @endif
    @endforeach

    // console.log("cuk",value_sensor_low_low_s);
    // console.log(data_1);
    //date
    $('#date').datepicker({
    format: 'dd-mm-yyyy',
    autoclose:true
    });

    
    mapboxgl.accessToken = 'pk.eyJ1IjoiZGFudWFuZHJlYW4iLCJhIjoiY2tteHBhOTFyMHI0aTJwcXNpcTIwYjNleSJ9.oMR_l45ewZHKxkXUmEjDcg';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: data_1[0],
    zoom: 13
    });

    data_nav = [];
    //add data normal
    data_nav.push(
      {
        'type': 'Feature',
        'properties': {
          'color': '#80b3ff', //biru
          'description':
                '<strong>Data base line</strong><p>Data ini berisi data base yang tidak mempunyai data dari sensor</p>'
          
        },
        'geometry': {
          'type': 'LineString',
          'coordinates': data_1
        }
      });

    // var data_partial =[[[109.95656,-7.382794],[109.95656,-7.382400]],[[109.95656,-7.382200],[109.956569,-7.382000]]];
    
    //rendah
    for (let i in array_low_low){
      // console.log(data_partial[i]);
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#abffab', // green  
            'description':
                '<strong>Data Description</strong><p>Data getaran rendah dan kecepatan rendah </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_low_low[i],
            // data_1,
          }
        });
    }
    for (let i in array_low_mid){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#fff38f', // yellow
            'description':
            '<strong>Data Description</strong><p>Data getaran rendah dan kecepatan sedang </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_low_mid[i],
            // data_1,
          }
        });
    }
  
    for (let i in array_low_high){
      // console.log("log " ,array_low_high);
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#ff9696', // red
            'description':
            '<strong>Data Description</strong><p>Data getaran rendah dan kecepatan tinggi </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_low_high[i],
            // data_1,
          }
        });
    }

    //sedang
    for (let i in array_mid_low){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#00ff00', // green  
            'description':
            '<strong>Data Description</strong><p>Data getaran sedang dan kecepatan rendah </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_mid_low[i],
            // data_1,
          }
        });
    }
    for (let i in array_mid_mid){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#ffe512', // yellow
            'description':
            '<strong>Data Description</strong><p>Data getarang rendah dan kecepatan sedang </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_mid_mid[i],
            // data_1,
          }
        });
    }
  
    for (let i in array_mid_high){
      // console.log("log " ,array_mid_high);
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#ff1212', // red
            'description':
            '<strong>Data Description</strong><p>Data getaran sedang dan kecepatan tinggi </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_mid_high[i],
            // data_1,
          }
        });
    }

    //tinggi
    for (let i in array_high_low){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#20d020', // green  
            'description':
            '<strong>Data Description</strong><p>Data getaran tinggi dan kecepatan rendah </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_high_low[i],
            // data_1,
          }
        });
    }
    for (let i in array_high_mid){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#bfab02', // yellow
            'description':
            '<strong>Data Description</strong><p>Data getaran tinggi dan kecepatan sedang </p>'
          
          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_high_mid[i],
            // data_1,
          }
        });
    }
  
    for (let i in array_high_high){
      data_nav.push(
        {
          'type': 'Feature',
          'properties': {
            'color': '#bd0303', // red
            'description':
            '<strong>Data Description</strong><p>Data tinggi rendah dan kecepatan tinggi </p>'

          },
          'geometry': {
            'type': 'LineString',
            'coordinates': array_high_high[i],
            // data_1,
          }
        });
    }
    

    var features = data_nav;
    
    map.on('load', function () {
      map.addSource('lines', {
        'type': 'geojson',
        'data': {
        'type': 'FeatureCollection',
        'features': features
        }
      });
      map.addLayer({
        'id': 'lines',
        'type': 'line',
        'source': 'lines',
        'paint': {
        'line-width': 8,
        // Use a get expression (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-get)
        // to set the line-color to a feature property value.
        'line-color': ['get', 'color']
        }
      });

          // Create a popup, but don't add it to the map yet.
      var popup = new mapboxgl.Popup({
      closeButton: false,
      closeOnClick: false
      });
      
      map.on('mouseenter', 'lines', function (e) {
        // Change the cursor style as a UI indicator.
        map.getCanvas().style.cursor = 'pointer';
        var coordinates = e.features[0].geometry.coordinates.slice();
        console.log(coordinates[0])
        var description = e.features[[0]].properties.description;
        
        // Ensure that if the map is zoomed out such that multiple
        // copies of the feature are visible, the popup appears
        // over the copy being pointed to.
        // while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
        // coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
        // }
        
        // // Populate the popup and set its coordinates
        // // based on the feature found.
        popup.setLngLat(coordinates[0]).setHTML(description).addTo(map);
      });
      
      map.on('mouseleave', 'lines', function () {
        map.getCanvas().style.cursor = '';
        popup.remove();
      });
    });

    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
    if(width < 760){
      document.getElementById('condition').setAttribute("width", "100"); 
      document.getElementById('condition').setAttribute("height", "70"); 
    }

    //algoritma
    @if(session('param')=="low_low")
      value_sensor_s = value_sensor_low_low_s;
      value_sensor_ax =value_sensor_low_low_ax;
      value_sensor_ay = value_sensor_low_low_ay;

    @elseif(session('param')=="low_mid")
      value_sensor_s = value_sensor_low_mid_s;
      value_sensor_ax =value_sensor_low_mid_ax;
      value_sensor_ay = value_sensor_low_mid_ay;

    @elseif(session('param')=="low_high")
      value_sensor_s = value_sensor_low_high_s;
      value_sensor_ax =value_sensor_low_high_ax;
      value_sensor_ay = value_sensor_low_high_ay;

    @elseif(session('param')=="mid_low")
      value_sensor_s = value_sensor_mid_low_s;
      value_sensor_ax =value_sensor_mid_low_ax;
      value_sensor_ay = value_sensor_mid_low_ay;

    @elseif(session('param')=="mid_mid")
      value_sensor_s = value_sensor_mid_mid_s;
      value_sensor_ax =value_sensor_mid_mid_ax;
      value_sensor_ay = value_sensor_mid_mid_ay;

    @elseif(session('param')=="mid_high")
      value_sensor_s = value_sensor_mid_high_s;
      value_sensor_ax =value_sensor_mid_high_ax;
      value_sensor_ay = value_sensor_mid_high_ay;

    @elseif(session('param')=="high_low")
      value_sensor_s = value_sensor_high_low_s;
      value_sensor_ax =value_sensor_high_low_ax;
      value_sensor_ay = value_sensor_high_low_ay;

    @elseif(session('param')=="high_mid")
      value_sensor_s = value_sensor_high_mid_s;
      value_sensor_ax =value_sensor_high_mid_ax;
      value_sensor_ay = value_sensor_high_mid_ay;

    @elseif(session('param')=="high_high")
      value_sensor_s = value_sensor_high_high_s;
      value_sensor_ax =value_sensor_high_high_ax;
      value_sensor_ay = value_sensor_high_high_ay;
    @endif

    // console.log("cuk",value_sensor_s);
    var con = document.getElementById('condition');
    var condition = new Chart(con, {
        type: 'line',
        data: {
            labels:<?= json_encode($time_array)?>,
            datasets: [{
                label: 'Data ranges',
                data: value_sensor_s,
                backgroundColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    'rgba(255, 99, 132, 0.2)',
                    // 'rgba(54, 162, 235, 0.2)',
                    // 'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'gyro x ranges',
                data: value_sensor_ax,
                backgroundColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    // 'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    // 'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    // 'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    // 'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
            {
                label: 'gyro y ranges',
                data: value_sensor_ay,
                backgroundColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    // 'rgba(255, 99, 132, 0.2)',
                    // 'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    // 'rgba(138,43,226 ,0.2 )',
                    // 'rgba(255, 99, 132, 1)',
                    // 'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
  </script>
@endsection
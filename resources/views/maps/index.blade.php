@extends ('layout.base')
@section('title','maps')
@section('content')

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light shadow" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="image/logo" alt="" style="width: 170px;">   
      </div>
      <div class="list-group list-group-flush">
        <a href="/" class="d-flex align-items-center list-group-item list-group-item-action bg-light">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7,17L10.2,10.2L17,7L13.8,13.8L7,17M12,11.1A0.9,0.9 0 0,0 11.1,12A0.9,0.9 0 0,0 12,12.9A0.9,0.9 0 0,0 12.9,12A0.9,0.9 0 0,0 12,11.1M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z" />
          </svg>
          Dashboard
        </a>
        <a href="{{route('maps')}}" class=" d-flex align-items-center list-group-item list-group-item-action bg-light">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
          </svg>
          Maps
        </a>
        <a href="/" class="d-flex align-items-center list-group-item list-group-item-action bg-light">
          <svg class="mr-2" style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M6,16.5L3,19.44V11H6M11,14.66L9.43,13.32L8,14.64V7H11M16,13L13,16V3H16M18.81,12.81L17,11H22V16L20.21,14.21L13,21.36L9.53,18.34L5.75,22H3L9.47,15.66L13,18.64" />
          </svg>
          Data
        </a>
        <a href="{{route('parameter')}}" class="d-flex align-items-center list-group-item list-group-item-action bg-light">
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

      <div class="container">
        <h3 class="mt-2 title">Maps</h3>
          <div class="container-content shadow">

            <div class="row justify-content-end">
              <div class="col-4">
                <form action="" method="get">

                  <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                      <label class="input-group-text " for="inputGroupSelect01">Set ID</label>
                    </div>
                    <select name="setting" class="custom-select setting" id="inputGroupSelect01" value="4">
                      <option disabled >Choose...</option>
                      <?php $car_array = [];?>

                      @foreach($data_setting as $data_car)
                        @if(!in_array($data_car->id_car,$car_array))
                        <?php $car_array[]= $data_car->id_car;?> 
                        <option id="{{$data_car->id_car}}" value="{{$data_car->id_car}}">{{$data_car->id_car}}</option>
                        @endif
                      @endforeach

                    </select>
                    <div class="input-group-append">
                    <button class="btn btn-primary d-flex ">
                      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M15 17V14H18V12L22 15.5L18 19V17H15M17 18V21H14V23L10 19.5L14 16V18H17M12 8C9.79 8 8 9.8 8 12C8 13.91 9.35 15.54 11.21 15.92L16 11.86C15.93 9.71 14.16 8 12 8M12 14C10.9 14 10 13.11 10 12S10.9 10 12 10 14 10.9 14 12 13.11 14 12 14M21.66 8.73L19.66 5.27C19.54 5.05 19.28 4.96 19.05 5.05L16.56 6.05C16.05 5.64 15.5 5.31 14.87 5.05L14.5 2.42C14.46 2.18 14.25 2 14 2H10C9.75 2 9.54 2.18 9.5 2.42L9.13 5.07C8.5 5.33 7.96 5.66 7.44 6.07L5 5.05C4.77 4.96 4.5 5.05 4.39 5.27L2.39 8.73C2.26 8.94 2.31 9.22 2.5 9.37L4.57 11L4.5 12L4.57 13L2.46 14.63C2.26 14.78 2.21 15.06 2.34 15.27L4.34 18.73C4.45 19 4.74 19.11 5 19L5 19L7.5 18C7.74 18.19 8 18.37 8.26 18.53L9.91 17.13C9.14 16.8 8.46 16.31 7.91 15.68L5.5 16.68L4.73 15.38L6.8 13.8C6.4 12.63 6.4 11.37 6.8 10.2L4.69 8.65L5.44 7.35L7.85 8.35C8.63 7.45 9.68 6.82 10.85 6.57L11.25 4H12.75L13.12 6.62C14.29 6.86 15.34 7.5 16.12 8.39L18.53 7.39L19.28 8.69L17.2 10.2C17.29 10.46 17.36 10.73 17.4 11H19.4L21.5 9.37C21.72 9.23 21.78 8.95 21.66 8.73M12 8C9.79 8 8 9.8 8 12C8 13.91 9.35 15.54 11.21 15.92L16 11.86C15.93 9.71 14.16 8 12 8M12 14C10.9 14 10 13.11 10 12S10.9 10 12 10 14 10.9 14 12 13.11 14 12 14M12 8C9.79 8 8 9.8 8 12C8 13.91 9.35 15.54 11.21 15.92L16 11.86C15.93 9.71 14.16 8 12 8M12 14C10.9 14 10 13.11 10 12S10.9 10 12 10 14 10.9 14 12 13.11 14 12 14Z" />
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
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  
  <script>
   document.getElementById("{{session('setting')}}").selected = "true"
 
  let data_trig_1=[];
  let data_1=[];
  let data_trig_2=[];
  let data_2=[];

  // rendah
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

  @foreach($data as $data_all)
   
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
          low_low.push(<?= $data_all->longitude; ?>);
          low_low.push(<?= $data_all->latitude; ?>);
          data_low_low.push(low_low);
          low_low =[];
        @else
          array_low_low.push( data_low_low);
          data_low_low = [];
        @endif
        @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
          low_mid.push(<?= $data_all->longitude; ?>);
          low_mid.push(<?= $data_all->latitude; ?>);
          data_low_mid.push(low_mid);
          low_mid =[];
        @else
          array_low_mid.push( data_low_mid);
          data_low_mid =[];
        @endif
        @if($data_all->speed >= $parameter->speedc)
          low_high.push(<?= $data_all->longitude; ?>);
          low_high.push(<?= $data_all->latitude; ?>);
          data_low_high.push(low_high);
          low_high =[];
        @else
          array_low_high.push( data_low_high);
          data_low_high =[];
        @endif
    @else
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
          mid_low.push(<?= $data_all->longitude; ?>);
          mid_low.push(<?= $data_all->latitude; ?>);
          data_mid_low.push(mid_low);
          mid_low =[];
        @else
          array_mid_low.push( data_mid_low);
        @endif
        @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
          mid_mid.push(<?= $data_all->longitude; ?>);
          mid_mid.push(<?= $data_all->latitude; ?>);
          data_mid_mid.push(mid_mid);
          mid_mid =[];
        @else
          array_mid_mid.push( data_mid_mid);
        @endif
        @if($data_all->speed >= $parameter->speedc)
          mid_high.push(<?= $data_all->longitude; ?>);
          mid_high.push(<?= $data_all->latitude; ?>);
          data_mid_high.push(mid_high);
          mid_high =[];
        @else
          array_mid_high.push( data_mid_high);
        @endif
    @else
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
          high_low.push(<?= $data_all->longitude; ?>);
          high_low.push(<?= $data_all->latitude; ?>);
          data_high_low.push(high_low);
          high_low =[];
        @else
          array_high_low.push( data_high_low);
        @endif
        @if($data_all->speed >= $parameter->speedb && $data_all->speed < $parameter->speedc)
          high_mid.push(<?= $data_all->longitude; ?>);
          high_mid.push(<?= $data_all->latitude; ?>);
          data_high_mid.push(high_mid);
          high_mid =[];
        @else
          array_high_mid.push( data_high_mid);
        @endif
        @if($data_all->speed >= $parameter->speedc)
          high_high.push(<?= $data_all->longitude; ?>);
          high_high.push(<?= $data_all->latitude; ?>);
          data_high_high.push(high_high);
          high_high =[];
        @else
          array_high_high.push( data_high_high);
        @endif
    @else
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
  @endforeach

  console.log("cuk",array_mid_low);
  // console.log(data_1);
    
  
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
        'color': '#80b3ff' //biru
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
          'color': '#abffab' // green  
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
          'color': '#fff38f' // yellow
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
          'color': '#ff9696' // red
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
          'color': '#00ff00' // green  
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
          'color': '#ffe512' // yellow
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
          'color': '#ff1212' // red
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
          'color': '#20d020' // green  
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
          'color': '#bfab02' // yellow
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
          'color': '#bd0303' // red
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
  });
  </script>
@endsection
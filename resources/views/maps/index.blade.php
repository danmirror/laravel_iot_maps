@extends ('layout.base')
@section('content')

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light shadow" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="image/logo" alt="" style="width: 170px;">   
      </div>
      <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="{{route('maps')}}" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-map-marker-alt"></i>  Maps
        </a>
        <a href="/" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-chart-bar"></i> Data
        </a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    @include('template.nav')

      <div class="container">
        <h3 class="mt-2 title">Maps</h3>
          <div class="container-content ">
            <div class="shadow" id="map"></div>
          </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>


  
  <script>
 
  let data_trig_1=[];
  let data_1=[];
  let data_trig_2=[];
  let data_2=[];

  @foreach($data as $data_all)
    @if($data_all->id_car == 1)
      data_trig_1.push(<?= $data_all->latitude; ?>)
      data_trig_1.push(<?= $data_all->longitude; ?>)
      data_1.push(data_trig_1);
      //reset
      data_trig_1 = [];
    @elseif($data_all->id_car == 2)
      data_trig_2.push(<?= $data_all->latitude; ?>)
      data_trig_2.push(<?= $data_all->longitude; ?>)
      data_2.push(data_trig_2);
      //reset
      data_trig_2 = [];

    @endif
  @endforeach

  // console.log(data_trig_2);
  // console.log(data_1);
    
  
  mapboxgl.accessToken = 'pk.eyJ1IjoiZGFudWFuZHJlYW4iLCJhIjoiY2tteHBhOTFyMHI0aTJwcXNpcTIwYjNleSJ9.oMR_l45ewZHKxkXUmEjDcg';
  var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11',
  center: [-122.48383155304096, 37.82882682974591],
  zoom: 16
  });
  
  map.on('load', function () {
    map.addSource('lines', {
      'type': 'geojson',
      'data': {
      'type': 'FeatureCollection',
      'features': [
      {
        'type': 'Feature',
        'properties': {
          'color': '#F7455D' // red
        },
        'geometry': {
          'type': 'LineString',
          'coordinates': data_1,
        }
      },
      {
        'type': 'Feature',
        'properties': {
          'color': '#33C9EB' // blue
        },
        'geometry': {
          'type': 'LineString',
          'coordinates':data_2,
          }
        }
      ]
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
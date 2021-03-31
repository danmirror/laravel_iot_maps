@extends ('layout.base')
@section('content')

  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <img src="image/" alt="" style="width: 170px;">   
      </div>
      <div class="list-group list-group-flush">
        <a href="/" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
        <a href="/" class="list-group-item list-group-item-action bg-light">
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
          'coordinates': [
            [-122.48393028974533, 37.829471820141016],
            [-122.48395174741744, 37.82940826466351],
            [-122.48395174741744, 37.829412501697064],
            [-122.48423874378203, 37.829357420242125],
            [-122.4833858013153, 37.829607404976734],
            [-122.4830961227417, 37.82932776098012],
            [-122.4830746650696, 37.82932776098012],
            [-122.48218417167662, 37.82889558180985],
            [-122.48218417167662, 37.82890193740421],
            [-122.48221099376678, 37.82868372835086],
            [-122.4822163581848, 37.82868372835086],
            [-122.48205006122589, 37.82801003030873]
          ]
        }
      },
      {
        'type': 'Feature',
        'properties': {
          'color': '#33C9EB' // blue
        },
        'geometry': {
          'type': 'LineString',
          'coordinates': [
            [-122.48393028974533, 37.829471820141016],
            [-122.48395174741744, 37.82940826466351],
            [-122.48395174741744, 37.829412501697064],
            [-122.48423874378203, 37.829357420242125],
            [-122.48422533273697, 37.829361657278575],
            [-122.48459815979002, 37.8293425906126],
            [-122.48458743095398, 37.8293447091313],
            [-122.4847564101219, 37.82932776098012],
            [-122.48543500900269, 37.82860534241688],
            [-122.48571664094925, 37.82808206121068],
            [-122.48570591211319, 37.82809689109353],
            [-122.4858346581459, 37.82797189627337],
            [-122.48582661151886, 37.82797825194729],
            [-122.4859634041786, 37.82788503534145],
            [-122.48595803976059, 37.82788927246246],
            [-122.48605459928514, 37.82786596829394]
            ]
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
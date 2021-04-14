@extends ('layout.base')
@section('title','Data')
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
        <h3 class="mt-2 title">Data Distribution</h3>


        <div class="container-content shadow">
          <div class="row row justify-content-between">
            <div class="col-md-6">
              <canvas id="myChart" ></canvas>
            </div>  
            <div class="col-md-5">
              <form action="" method="get">
                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="select">Set ID</label>
                  </div>
                  <select name="setting" class="custom-select setting" id="select">
                    <option selected disabled hidden>{{session('setting')}}</option>
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
                  <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M17 3H5C3.89 3 3 3.9 3 5V19C3 20.1 3.89 21 5 21H19C20.1 21 21 20.1 21 19V7L17 3M19 19H5V5H16.17L19 7.83V19M12 12C10.34 12 9 13.34 9 15S10.34 18 12 18 15 16.66 15 15 13.66 12 12 12M6 6H15V10H6V6Z" />
                  </svg>
                  </button>
                  </div>
                </div>
              </form>
              <form action="" method="get">

                <div class="input-group mb-3 ">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="select">TIME</label>
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
            
              <div>
                <h5 class="mt-5 mb-1 text-warning  font "> Note</h5 >
                <p class="mb-1 font-2 bold"> The variable declarations of the data displayed on the graph can be seen as below:</p>
                <p class=" font">
                  <em>
                  low_high : low shock and high speed
                  </em>
                </p>
              </div>
            </div>

          </div>
        </div>
     
      
        <div class="container-content shadow mt-5">
          <div class="row row ">
            <div class="col-md">
              <canvas id="range" width="400" height="100"></canvas>
            </div>  
          </div>
        </div>

        @include('template.footer')
      
    </div>
    <!-- /#page-content-wrapper -->
  </div>


<script>
// console.log({{json_encode($approach)}});
var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
if(width < 760){
  document.getElementById('range').setAttribute("width", "100"); 
  document.getElementById('range').setAttribute("height", "70"); 
}

$('#date').datepicker({
  format: 'dd-mm-yyyy',
  autoclose:true
  });


var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Low_low', 'low_mid', 'low_high', 'mid_low', 'mid_mid', 'mid_high','high_low','high_mid','high_high'],
        datasets: [{
            label: 'Data',
            data: {{json_encode($approach) }},
            backgroundColor: [
                'rgba(138,43,226 ,0.2 )',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(138,43,226 ,0.2 )',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            // y: {
                // beginAtZero: true
            // }
        }
    }
});

var rg = document.getElementById('range');
var range = new Chart(rg, {
    type: 'line',
    data: {
        labels: ['Low_low', 'low_mid', 'low_high', 'mid_low', 'mid_mid', 'mid_high','high_low','high_mid','high_high'],
        datasets: [{
            label: 'Speed ranges',
            data: {{json_encode($approach) }},
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

</script>
@endsection
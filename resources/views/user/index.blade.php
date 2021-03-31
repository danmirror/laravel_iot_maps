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
          <i class="fas fa-chart-bar"></i> Data 1
        </a>
        <a href="/" class="list-group-item list-group-item-action bg-light">
          <i class="fas fa-map-marker-alt"></i>  Data 2
        </a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    @include('template.nav')

      <div class="container">
        <h1 class="mt-2 title">Data Real</h1>
          <div class="chart">
            <canvas id="chart"></canvas>
          </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
@endsection
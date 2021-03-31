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
        <h1 class="mt-2 title">Dashboard</h1>
          <div class="container-content shadow">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid non facere ipsum. Rerum mollitia ut placeat suscipit unde quo animi reiciendis voluptatibus dolores, porro tempore? Totam eligendi animi commodi!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et modi quidem voluptate ipsum velit, ea nulla sunt consectetur in pariatur reiciendis ex commodi consequatur. Nisi quam cum laudantium odit vel?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident minus esse eveniet doloremque quasi accusantium voluptas reiciendis beatae eaque fuga architecto dolorum perspiciatis exercitationem sint id doloribus illo recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident mollitia fugiat modi, architecto ex debitis id, dolores asperiores eos soluta voluptates laborum consectetur facilis ea quam corporis rem quibusdam.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid non facere ipsum. Rerum mollitia ut placeat suscipit unde quo animi reiciendis voluptatibus dolores, porro tempore? Totam eligendi animi commodi!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et modi quidem voluptate ipsum velit, ea nulla sunt consectetur in pariatur reiciendis ex commodi consequatur. Nisi quam cum laudantium odit vel?
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident minus esse eveniet doloremque quasi accusantium voluptas reiciendis beatae eaque fuga architecto dolorum perspiciatis exercitationem sint id doloribus illo recusandae.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi provident mollitia fugiat modi, architecto ex debitis id, dolores asperiores eos soluta voluptates laborum consectetur facilis ea quam corporis rem quibusdam.
          </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
@endsection
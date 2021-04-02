@extends ('layout.base')
@section('title','Dashboard')
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
        <h3 class="mt-2 title">Dashboard</h3>
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
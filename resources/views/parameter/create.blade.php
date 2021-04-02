@extends ('layout.base')
@section('title','Setting')
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
        <h3 class="mt-2 title">Parameter Setting</h3>
          <div class="container-content shadow">
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
            @endif
            @if(session('alert'))
              <div class="alert alert-danger" role="alert">
              {{ session('alert') }}
              </div>
            @endif
            @if(session('alert-success'))
              <div class="alert alert-success" role="alert">
              {{ session('alert-success') }}
              </div>
            @endif

            <div class="container">
              <form action="{{route('parameterStore')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="xmina">XMIN-A</label>
                      <input name="xmina" type="text" class="form-control" id="xmina" value="{{$data->xmaxa}}"
                          aria-describedby="xmaxa" placeholder="set nilai">
                      <small id="xmina" class="form-text text-muted">Nilai mininal gyro X A</small>
                    </div>
                    <div class="form-group">
                      <label for="xmaxa">XMAX-A</label>
                      <input name="xmaxa" type="text" class="form-control" id="xmaxa" value="{{$data->xmaxa}}"
                          aria-describedby="xmaxa" placeholder="set nilai">
                      <small id="xmaxa" class="form-text text-muted">Nilai maksimal gyro X A</small>
                    </div>
                    <div class="form-group">
                      <label for="speeda">Speed-A</label>
                      <input name="speeda"  type="text" class="form-control" id="speeda" value="{{$data->speeda}}"
                          aria-describedby="speedc" placeholder="set nilai">
                      <small id="speeda" class="form-text text-muted">Nilai speed rendah</small>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="xminb">XMIN-B</label>
                      <input name="xminb" type="text" class="form-control" id="xminb" value="{{$data->xminb}}"
                          aria-describedby="xmaxb" placeholder="set nilai">
                      <small id="xminb" class="form-text text-muted">Nilai mininal gyro X B</small>
                    </div>
                    <div class="form-group">
                      <label for="xmaxb">XMAX-B</label>
                      <input name="xmaxb" type="text" class="form-control" id="xmaxb" value="{{$data->xmaxb}}"
                          aria-describedby="xmaxb" placeholder="set nilai">
                      <small id="xmaxb" class="form-text text-muted">Nilai maksimal gyro X B</small>
                    </div>
                    <div class="form-group">
                      <label for="speedb">Speed-B</label>
                      <input name="speedb"  type="text" class="form-control" id="speedb" value="{{$data->speedb}}"
                          aria-describedby="speedb" placeholder="set nilai">
                      <small id="speedb" class="form-text text-muted">Nilai speed sedang</small>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="xminc">XMIN-C</label>
                      <input name="xminc" type="text" class="form-control" id="xminc" value="{{$data->xminc}}"
                          aria-describedby="xmaxc" placeholder="set nilai">
                      <small id="xminc" class="form-text text-muted">Nilai mininal gyro X C</small>
                    </div>
                    <div class="form-group">
                      <label for="xmaxc">XMAX-C</label>
                      <input name="xmaxc" type="text" class="form-control" id="xmaxc" value="{{$data->xmaxc}}"
                          aria-describedby="xmaxc" placeholder="set nilai">
                      <small id="xmaxc" class="form-text text-muted">Nilai maksimal gyro X C</small>
                    </div>
                    <div class="form-group">
                      <label for="speedc">Speed-C</label>
                      <input name="speedc"  type="text" class="form-control" id="speedc" value="{{$data->speedc}}"
                          aria-describedby="speedc" placeholder="set nilai">
                      <small id="speedc" class="form-text text-muted">Nilai speed tinggi</small>
                    </div>
                  </div>
                
                  
                 
                </div>
    
                <div class="d-flex flex-row-reverse bd-highlight">
                  <div class="p-2 bd-highlight">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
                
              </form>
            </div>

          </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
@endsection
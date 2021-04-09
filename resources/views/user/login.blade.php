@extends ('layout.base')
@section('title','Login')
@section('content')
  <div class="container">
      <div id="container">
        <div class="boxed rounded">
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

          <form action="{{route('loginStore')}}" method="post">
          @csrf

            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label  for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="row justify-content-end mr-2">
              <button type="submit" class="btn text-light bg-blue-violet">Login</button>
            </div>
          </form>
      
          </div>
      </div>

  </div>
@endsection
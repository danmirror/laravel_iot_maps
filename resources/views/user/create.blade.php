@extends ('layout.base')
@section('title','Register')
@section('content')
  <div class="container">
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
      <div class="alert alert-warning" role="alert">
      {{ session('alert') }}
      </div>
    @endif
    <div id="container">
      <div class="boxed">
        <form action="{{route('userStore')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Name">
            <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password konfirmasi</label>
            <input name="confirm" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <div class="row justify-content-end mr-2">  
            <button type="submit" class="btn text-light bg-blue-violet">Submit</button>
          </div>
        </form>
      </div>
    </div>

  </div>
@endsection
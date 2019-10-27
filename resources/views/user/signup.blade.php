@extends("layouts.master") @section('title') Sign Up - Laravel Shopping Cart
@endsection @section('content')
<div class="row">
  <div class="col-md-6">
    <h1>Sign Up</h1>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
    </div>
    @endif
    <form action="{{ route('user.signup') }}" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input
          type="name"
          name="name"
          class="form-control"
          id="name"
          aria-describedby="emailHelp"
          placeholder="Enter Name"
        />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          class="form-control"
          id="email"
          aria-describedby="emailHelp"
          placeholder="Enter email"
        />
        <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small
        >
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          class="form-control"
          id="password"
          placeholder="Password"
        />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
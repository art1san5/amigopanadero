@extends('layouts.full')

@section('content')


<div class="card align-middle w-50 mx-auto" style="margin-top: 10%">
  <div class="card-body">   
      
      <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}

        <h4 class="text-center">Admin Registration</h4>
        
        <div class="form-group">
        <label>Full Name</label>
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  placeholder="somebody@email.com" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password">
            @if($errors->has('password'))
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>

        <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
        </div>


        <div class="form-group mt-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>


    </form>


    </div>
</div>  


@endsection

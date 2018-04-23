@extends('layouts.cover')

@section('content')


    <div class="card align-middle mx-auto" style="margin-top: 30%; width: 500px;">
        <div class="card-header">
            <h4 class="text-center">Amigo Panadero</h4>
        </div>
        <div class="card-body">
        
            <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            
            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="somebody@email.com" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>

            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>


            </form>
            
        </div>
    </div>


@endsection

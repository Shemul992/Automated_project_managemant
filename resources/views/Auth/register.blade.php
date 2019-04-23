@extends('main')

@section('title', 'Register here | Automated Project Management system')

@section('content')
{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
<div class="container">

     <div class = "row">

       <div class= "col-8 offset-2">

            <h1 class= "text-center mt-5"> Register</h1>
            <hr>

              <form method="POST" action="{{ route('register') }}">

                  @csrf

                  <div class = "form-group"> 
                      <label for="first_name"> First Name </label>
                      <input class = "form-control" type="text" id="first_name" name = "first_name"required> 
                  </div>

                  <div class = "form-group"> 
                      <label for="last_name"> Last Name </label>
                      <input class = "form-control" type="text" id="last_name" name = "last_name"required> 
                  </div>

                  <div class = "form-group"> 
                      <label for="email"> Email</label>
                      <input class = "form-control" type="text" id="email" name = "email"required> 
                  </div>

                  <div class = "form-group">
                      <label for="password">Password</label>
                      <input class = "form-control" type="password" name="password"  required> 
                  </div>

                  <div class = "form-group">
                      <label for="password_confirmation">Confirm Password</label>
                      <input class = "form-control" type="password" name="password_confirmation" required > 
                  </div>

                   <div class= "form-check">
                      <label class = "form-check-label">
                      <input class = "form-check-input" type="checkbox" name="student">
                          Sign up as a student
                      </label>
                  </div>

                  <div class= "form-check">
                      <label class = "form-check-label">
                      <input class = "form-check-input" type="checkbox" name="teacher">
                          Sign up as a teacher
                      </label>
                  </div>

                    {{-- error--}}

                  

                  {{-- submit button--}}

                  <div>
                        <button class = "btn btn-success btn-block mt-3" type="submit" >Register</button>
                        <button class = "btn btn-warning btn-block mt-3 "type="btn" >Already have an account</button>
                    </div> <!-- col-->
                  </div> <!-- row -->


            </form>
            

      </div> <!-- col -->

    </div> <!-- row-->


  </div> <!--container -->

@endsection

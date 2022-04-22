@extends('layouts.app')

@section('content')
<div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column  justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                 
                 
                </a>
              </div><!-- End Logo -->


            <div class="card mb-3">

                <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Register a new membership</h5>
                   
                </div>

                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="col-12">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"  value="{{ old('name') }}" required>
                       @error('name')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>

                    <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  value="{{ old('email') }}" required>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>

                    <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                       @error('password')
                          <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>

                    <div class="col-12">
                          <label for="password-confirm" class="form-label ">{{ __('Confirm Password') }}</label>

                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                         @enderror
                    </div>

                   
                    <div class="col-12 mt-3">
                    <button class="btn btn-primary w-100" type="submit">Register</button>
                    </div>
                   
                </form>
                <div class="col-12 mt-3">
                    <a href="{{ route('login') }}" class="text-center mt-5">Already have a membership</a>
                    </div>
                </div>
            </div>

           
            </div>
          </div>
        </div>

      </section>

    </div>



   
      
@endsection

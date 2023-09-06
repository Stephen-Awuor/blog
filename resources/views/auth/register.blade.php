@extends('layouts.app')

@section('content')
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Register Here To Post Your Story</h3>
              <form method="POST" action="/new_user">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="firstName" class="form-control form-control-lg" name="firstname" value="{{old('firstname')}}"/>
                      @error('firstname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="firstName">First Name</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="lastName" class="form-control form-control-lg" name="lastname" value="{{old('lastname')}}"/>
                      @error('lastname')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg" placeholder="Tec, Health, Lifestyle, etc" id="birthdayDate" name="topic" value="{{old('topic')}}"/>
                      @error('topic')
                      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                         @enderror
                      <label for="birthdayDate" class="form-label">Topic (Field)</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <h6 class="mb-2 pb-1">Gender: </h6>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" checked name="gender" value="{{old('topic')}}"/>
                        @error('gender')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>
  
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="option3" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                      @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phone" value="{{old('phone')}}"/>
                      @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>
  
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="password" id="password" class="form-control form-control-lg" name="password" value="{{old('password')}}"/>
                      @error('password')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="password">Password</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4 pb-2">
  
                    <div class="form-outline">
                      <input type="password" id="password_confirmation" class="form-control form-control-lg" name="password_confirmation" value="{{old('password_confirmation')}}"/>
                      @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                           @enderror
                      <label class="form-label" for="password_confirmation">Confirm Password</label>
                    </div>
  
                  </div>
                </div>
  
                
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-md" type="submit" value="Register" />
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

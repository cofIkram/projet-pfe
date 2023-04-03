@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="m-0 font-weight-bold text-primary">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputEmail4">{{ __('Full Name') }}<font color="red">*</font></label>
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputPassword4">{{ __('Email Adress') }}<font color="red">*</font></label>
                     <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputAddress2">{{ __('Phone') }}</label>
                     <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputAddress">{{ __('Birthday') }}<font color="red">*</font></label>
                     <input id="Birthday" type="date" class="form-control @error('Birthday') is-invalid @enderror" name="Birthday" value="{{ old('Birthday') }}" required autocomplete="Birthday">

@error('Birthday')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-12">
                     <label for="inputAddress2">{{ __('Address') }}</label>
                     <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address">

                                @error('Address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputCity">{{ __('sentence.Gender') }}<font color="red">*</font></label>
                     
                     <select class="form-control" name="gender" id="Gender">
                        <option value="Male">{{ __('sentence.Male') }}</option>
                        <option value="Female">{{ __('sentence.Female') }}</option>
                     </select>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputZip">{{ __('sentence.Blood Group') }}</label>
                     <select class="form-control" name="blood" id="Blood">
                        <option value="Unknown">{{ __('sentence.Unknown') }}</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                     </select>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputAddress2">{{ __('Patient Weight') }}</label>
                     <input type="text" class="form-control" id="Weight" name="weight">
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputAddress">{{ __('Patient Height') }}<font color="red">*</font></label>
                     <input type="text" class="form-control" id="height" name="height">
                     
                  </div>
               </div>
               <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputState">{{ __('Image') }}</label>
                     <label for="file-upload" class="custom-file-upload">
                     <i class="fa fa-cloud-upload"></i> Select Image to Upload
                     </label>
                     <input type="file" class="form-control" id="file-upload" name="image">
                  </div>
               </div>
               

               <div class="form-group row">
                  <div class="col-sm-9">
                     <button type="submit" class="btn btn-primary">{{ __('Registre') }}</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<style type="text/css">
   input[type="file"] {
   display: none;
   }
   .custom-file-upload {
   border: 1px solid #ccc;
   display: inline-block;
   padding: 6px 12px;
   cursor: pointer;
   }
</style>

                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

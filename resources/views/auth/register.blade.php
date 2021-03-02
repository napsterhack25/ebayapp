@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-none">
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" placeholder="Contact" required autocomplete="contact">
                                @error('contact')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                              <div class="col-md-6">
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        Gender
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="1">Male
                                    </label>
                                </div>
                                <div class="form-check-inline disabled">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="gender" value="2">Female
                                    </label>
                                </div>
                            </div>


                           <!--  <div class='col-md-6'>
                                <input type="file" name='user_image' class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">User Image</label>
                            </div> -->
                        </div>
                        <div class="form-group row">
                            <div class='col-md-6'>
                                <select class="form-control" name="role" id="role">
                                    <option selected="true" disabled="disabled">Select Role</option>
                                    <option value="2">Seller</option>
                                    <option value="0">User</option>
                                </select>
                            </div>
                            <div class='col-md-6'>
                                <select class="form-control" name="country_id" id="role">
                                    <option selected="true" disabled="disabled">Select Country</option>
                                    <option value="0">India</option>
                                    <option value="1">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" placeholder="City"  autocomplete="city">
                            </div>
                            <div class="col-md-6">
                                <input id="post-code" type="text" class="form-control" name="post_code" placeholder="Post Code" required autocomplete="post-code">
                            </div>
                        </div>
                        <div class='form-group row mx-1'>
                            <label for="exampleFormControlTextarea1">Address</label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" name='address' rows="3"></textarea>
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
@endsection
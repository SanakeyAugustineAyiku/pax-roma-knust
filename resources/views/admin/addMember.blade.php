@extends('admin.dashboard')
@section('styles')
    <style>
        .material-icons.prefix,.material-icons.other{
            color:indigo;
        }
    </style>
@endsection
@section('dashcontent')
    <div class="row">
            @include('includes.messages')
        <form class="col s12" action="{{ route('admin.post.member')}}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col m6">
                    <i class="material-icons  prefix">account_circle</i>
                    <input id="fullname" type="text" class="validate @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}"  autocomplete="fullname" autofocus>
                    <label for="fullname">{{ __('Fullname') }}</label>
                    @error('fullname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               <div class="file-field input-field col m6">
                    <div class="btn indigo">
                        <span>Picture</span>
                        <input type="file" name="avatar" accept="image/*" capture="user" value="{{ old('avatar') }}">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate @error('avatar') is-invalid @enderror" type="text" >
                    </div>
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="input-field col m6">
                    <i class="material-icons  prefix">email</i>
                    <input id="email" type="text" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" >
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field col m6">
                    <i class="material-icons  prefix">phone</i>
                    <input id="phone" type="tel" class="validate @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone" >
                    <label for="phone">{{ __('Telephone') }}</label>
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">calendar_today</i>
                        <input id="dob" type="text" class="validate datepicker @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}"  autocomplete="dob" >
                        <label for="dob">{{ __('Date of Birth') }}</label>
                        @error('dob')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">perm_contact_calendar</i>
                        <input id="emergency_contact" type="tel" class="validate @error('emergency_contact') is-invalid @enderror" name="emergency_contact" value="{{ old('emergency_contact') }}"  autocomplete="emergency_contact" >
                        <label for="emergency_contact">{{ __('Emergency Contact') }}</label>
                        @error('emergency_contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            <div class="row">
                <div class="input-field col m6">
                    <label for="gender" id="gender-label" class="active center">Gender</label>
                    <div id="gender">
                        <i class="material-icons other">wc</i>
                        <span class="gender-radio-span center">
                            <label>
                                <input class="with-gap" name="gender" type="radio" value="female" {{ old('gender') == "female" ? 'checked' : '' }} />
                                <span>Female</span>
                            </label>
                        </span>
                        <span class="gender-radio-span center">
                            <label>
                                <input class="with-gap" name="gender" type="radio" value="male" {{ old('gender') == "male" ? 'checked' : '' }}/>
                                <span>Male</span>
                            </label>
                        </span>
                    </div>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field col m6">
                    <i class="material-icons  prefix">group</i>
                    <input id="subgroup" type="tel" name="subgroup" class="validate  @error('subgroup') is-invalid @enderror" value="{{ old('subgroup') }}"  autocomplete="subgroup"/>
                    <label for="subgroup">Subgroup</label>
                    @error('subgroup')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
            <div class="row">
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">house</i>
                        <input id="hostel" type="text" class="validate @error('hostel') is-invalid @enderror" name="hostel" value="{{ old('hostel') }}"  autocomplete="hostel" >
                        <label for="hostel">{{ __('Hall/Hostel') }}</label>
                        @error('hostel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">meeting_room</i>
                        <input id="room_number" type="text" class="validate @error('room_number') is-invalid @enderror" name="room_number" value="{{ old('room_number') }}"  autocomplete="room_number" >
                        <label for="room_number">{{ __('Room Number') }}</label>
                        @error('room_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">menu_book</i>
                        <input id="program" type="text" name="program" class="validate @error('program') is-invalid @enderror"  value="{{ old('program') }}"  autocomplete="program" />
                        <label for="program">Progaram</label>
                        @error('program')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col m6">
                        <i class="material-icons  prefix">looks_3</i>
                        <input id="year" type="number" name="year" min="1" max="7" class="validate @error('year') is-invalid @enderror"  value="{{ old('year') }}"  autocomplete="year" />
                        <label for="year">Year</label>
                        @error('year')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            <div class="input-field center ">
                <button class="btn waves-effect waves-light indigo" type="submit">
                    Submit
                    <i class="material-icons right">add</i>
                </button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    @parent
    $('.datepicker').datepicker();
@endsection

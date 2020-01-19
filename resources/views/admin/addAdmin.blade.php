@extends('admin.dashboard')
@section('dashcontent')
    <div class="">
        <div class="row" style="margin: 0 auto;">
            @include('includes.messages')
            <form class="col s12" action="{{route('admin.post.admin')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" id="name" type="text" class="validate  @error('name') is-invalid @enderror">
                        <label for="name">Name</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="period" id="period" placeholder="eg 2019/2020" type="text" class="validate  @error('period') is-invalid @enderror">
                        <label for="period">Period</label>
                        @error('period')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="file-field input-field col s12">
                        <div class="btn indigo">
                            <span>Picture</span>
                            <input type="file" name="avatar" accept="image/*" capture="user">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div> --}}
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate  @error('email') is-invalid @enderror">
                        <label for="email">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="role_id">
                            <optgroup label="Role">
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">EC</option>
                            </optgroup>
                        </select>
                        <label>Role</label>
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="password" id="password" type="password" class="validate  @error('password') is-invalid @enderror">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password_confirm" type="password" class="validate" name="password_confirmation"  autocomplete="current-password" />
                        <label for="password_confirm">{{ __('Confirm Password') }}</label>
                    </div>
                </div>
                <div class="input-field center">
                    <button class="btn waves-effect waves-light indigo" type="submit">
                        Submit
                        <i class="material-icons right">add</i>
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    $('select').formSelect();
@endsection

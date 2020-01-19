@extends('admin.dashboard')
@section('dashcontent')
    <div class="">
        <div class="row" style="margin: 0 auto;">
            @include('includes.messages')
            <form class="col s12" action="{{route('admin.post.candidate')}}" method="POST" enctype="multipart/form-data">

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
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="position">
                            <optgroup label="Pax General Election">
                                    <option value="President">President</option>
                                    <option value="Vice President">Vice President</option>
                                    <option value="Secretary">Secretary</option>
                                    <option value="Financial Secretary">Financial Secretary</option>
                                    <option value="Publicity Officer">Publicity Officer</option>
                                    <option value="Asst. Publicity Officer">Asst. Publicity Officer</option>
                                    <option value="Women Commissioner">Women Commissioner</option>
                                    <option value="Organizing Secretary">Organizing Secretary</option>
                                    <option value="Asst. Organizing Secretary">Asst. Organizing Secretary</option>
                            </optgroup>
                            {{-- <optgroup label="SubGroup">
                                    <option value="paxchoir">Pax Choir</option>
                            </optgroup> --}}
                        </select>
                        <label>Position</label>
                            @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="election_category">
                            <optgroup label="Parent Movement">
                                <option value="Pax General Elections">Pax General Election</option>
                            </optgroup>
                            {{-- <optgroup label="SubGroup">
                                <option value="paxchoir">Pax Choir</option>
                            </optgroup> --}}
                        </select>
                        <label>Election Category</label>
                        @error('election_category')
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

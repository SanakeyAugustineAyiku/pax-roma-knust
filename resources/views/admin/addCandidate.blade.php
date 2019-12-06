@extends('admin.dashboard')
@section('dashcontent')
    <div class="">
        <div class="row" style="margin: 0 auto;">
            <form class="col s12" action="{{route('admin.post.candidate')}}" method="POST" enctype="multipart/form-data">
                @include('includes.messages')
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <input name="name" id="name" type="text" class="validate">
                        <label for="name">Name</label>
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
                        </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="election_category">
                            <optgroup label="Parent Movement">
                                <option value="Pax Elections">Pax General Election</option>
                            </optgroup>
                            <optgroup label="SubGroup">
                                <option value="paxchoir">Pax Choir</option>
                            </optgroup>
                        </select>
                        <label>Election Category</label>
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

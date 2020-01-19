@extends('admin.dashboard')
@section('dashcontent')
    <div class="row">
        <form class="col s12" action="{{ route('admin.post.member')}}" method="POST">
            @include('includes.messages')
            @csrf
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" name="fullname" class="validate" />
                    <label for="icon_prefix"> Name</label>
                </div>
                <!-- <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input id="icon_telephone" type="tel" class="validate" />
                <label for="icon_telephone">Telephone</label>
            </div> -->
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_email" type="text" name="email" class="validate" />
                    <label for="icon_email">Email</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="tel" name="phone" class="validate" />
                    <label for="icon_telephone">Telephone</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">calendar_today</i>
                    <input id="icon_calendar" type="text" name="dob" class="validate datepicker" />
                    <label for="icon_calendar">Date of Birth</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">perm_contact_calendar</i>
                    <input id="icon_phone" type="tel" name="emergency_contact" class="validate" />
                    <label for="icon_phone">Emergency Contact</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <label for="gender" id="gender-label" class="active center">Gender</label>
                    <div id="gender">
                        <i class="material-icons">wc</i>
                        <span class="gender-radio-span center">
                            <label>
                                <input class="with-gap" name="gender" type="radio" value="female" checked />
                                <span>Female</span>
                            </label>
                        </span>
                        <span class="gender-radio-span center">
                            <label>
                                <input class="with-gap" name="gender" type="radio" value="male" />
                                <span>Male</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">group</i>
                    <input id="icon_subgroup" type="tel" name="subgroup" class="validate" />
                    <label for="icon_subgroup">Subgroup</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">house</i>
                    <input id="icon_house" type="text" name="hostel" class="validate" />
                    <label for="icon_house">Hall/Hostel</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">meeting_room</i>
                    <input id="icon_room" type="text" name="room_number" class="validate" />
                    <label for="icon_room">Room Number</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">menu_book</i>
                    <input id="icon_menubook" type="text" name="program" class="validate" />
                    <label for="icon_menubook">Progaram</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">looks_3</i>
                    <input id="icon_look" type="number" name="year" min="1" max="7" class="validate" />
                    <label for="icon_look">Year</label>
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

@extends('admin.dashboard')
@section('dashcontent')
<div class="row">
    @if ($members )
    @foreach( $members as $member)
    <div class="col s12 m6 l4">
        <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="{{ ($member->avatar) ? asset($member->avatar) : asset('/images/LOGO_PAX.png')}}">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{$member->fullname}}<i
                        class="material-icons right tooltipped" data-position="bottom" data-tooltip="more">more_vert</i>
                </span>
            </div>
            <div class="card-action">
                <a class="btn-floating waves-effect waves-light red">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-floating  waves-effect waves-light red">
                    <i class="material-icons">delete</i>
                </a>
            </div>
            <div class="card-reveal">
                <div class="center">
                    <span class="card-title grey-text text-darken-4">Member Bio<i class="material-icons right">close</i>
                    </span>
                    <div>
                        <span>
                            <b>Name:</b>
                            {{$member->fullname}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Email:</b>
                            {{$member->email}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Phone:</b>
                            {{$member->phone}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Date of Birth:</b>
                            {{$member->dob}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Emergency Contact:</b>
                            {{$member->emergency_contact}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Gender:</b>
                            {{$member->gender}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Hostel:</b>
                            {{$member->hostel}}
                            ,room
                            {{$member->room_number}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Program:</b>
                            {{$member->program}}
                            ,year
                            {{$member->year}}</span>
                    </div>
                    <div>
                        <span>
                            <b>Subgroup:</b>
                            {{$member->subgroup}}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endforeach
    @else
    <div class="message message-info">
        <span class="message-content center">No registered members</span>
        <i class="message-close material-icons">close</i>
    </div>
    @endif
</div>
@endsection
@section('scripts')
    @parent
    $('.tooltipped').tooltip();
@endsection

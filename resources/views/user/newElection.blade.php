@extends('admin.dashboard')
@section('dashcontent')
<div class="row" >
    <form class="col s12"  action="{{ route('admin.post.newElection')}}" method="POST">
        @include('includes.messages')
        @csrf
        <div class="row">
            <div class="input-field col s12">
                <select name="election_category">
                    <optgroup label="Parent Movement">
                        <option value="Pax General Elections">Pax General Election</option>
                        {{-- <option value="2">Option 2</option> --}}
                    </optgroup>
                    <optgroup label="SubGroup">
                        <option value="Pax Choir">Pax Choir</option>
                        {{-- <option value="4"></option> --}}
                    </optgroup>
                </select>
                <label>Election Category</label>
            </div>
        </div>
                <div class="row">
            <div class="input-field col s12 m12">
                <input type="text" placeholder="eg 2020/2021" id="period" name="period" class="validate">
                <label for="period">Period</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12">
                <input type="text" id="start_date" name="start_date" class="datepicker">
                <label for="start_date">Start Date</label>
            </div>
            <div class="input-field col s12 m12">
                <input id="start_time" name="start_time" type="text" class="timepicker">
                <label for="start_time">Start Time</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12">
                <input type="text" id="end_date" name="end_date" class="datepicker">
                <label for="end_date">End Date</label>
            </div>
            <div class="input-field col s12 m12">
                <input id="end_time" name="end_time" type="text" class="timepicker">
                <label for="end_time">End Time</label>
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
@endsection
@section('scripts')
    @parent
    $('select').formSelect();
    $('.datepicker').datepicker();('.datepicker');
    $('.timepicker').timepicker();
@endsection

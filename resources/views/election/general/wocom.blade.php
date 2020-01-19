@extends('election.dashboard')
@section("dashcontent")
@if ($candidates && count($candidates) > 0)
    <div class="row">
            <div class="col s12 center">Please click on <span><i class="material-icons">check</i></span>  below the candidate of your choice to cast your vote </div>
        @foreach ($candidates as $candidate)
            <div class="col s12 m6 l4">
                <div class="card sticky-action">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" height="300" width="100" src="{{ ($candidate->avatar) ? asset($candidate->avatar) : asset('/images/LOGO_PAX.png')}}">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{$candidate->name}}<i
                                class="material-icons right tooltipped" data-position="bottom" data-tooltip="more">more_vert</i>
                        </span>
                    </div>
                    <div class="card-action">
                        <label>
                            <input name="president" type="radio" />
                            <span><i class="material-icons">check</i></span>
                        </label>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="center">
        <a href="{{ url()->previous()}}" class="btn">previous</a>
        <a href="{{route("election.vote.submit",[$candidate->election_category,str_replace("/","_",$candidate->election_name)])}}" class="btn">next</a>
    </div>
 @endif
@endsection


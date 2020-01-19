@extends('admin.dashboard')
@section('dashcontent')
    @if( $candidates && count($candidates) > 0)
        @foreach ($candidates as $candidate)

        @endforeach

    @else
        <div class="container">
            <span class="yellow"><h2>No Candidate Registered</h2></span>
        </div>
    @endif
@endsection

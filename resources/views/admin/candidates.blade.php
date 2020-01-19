@extends('admin.dashboard')
@section('styles')
    <style>
      table, th, td {
        border: 1px solid black;
     }
    </style>
@endsection
@section('dashcontent')
    @if( $candidates && count($candidates) > 0)
        <table>
            <thead>
                <tr>
                    <th>candidate Detials</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                <tr>
                    <td>
                        <span><b>Name: </b> {{$candidate->name}}</span><br>
                        <span><b>Position: </b> {{$candidate->position}}</span><br>
                        <span><b>Election: </b> {{$candidate->election_category}}</span><br>
                        <span><b>Academic Year: </b> {{ "$candidate->election_name"}}</span><br>
                    </td>
                    <td class="center"><img src="{{ ($candidate->avatar) ? asset($candidate->avatar) : asset('/images/LOGO_PAX.png')}}" style="width:150px;height:150px;" alt="avatar"></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <div class="container">
            <span class="yellow"><h2>No Candidate Registered</h2></span>
        </div>
    @endif
@endsection

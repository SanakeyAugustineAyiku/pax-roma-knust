@extends('admin.dashboard')

@section('dashcontent')
    @if ($elections && count($elections) > 0)
  
        <table class="striped highlight">
            <thead>
                <tr>
                    <th>Election Category</th>
                    <th>Period</th>
                    <th>Start </th>
                    <th>End</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($elections as $election)
                    <tr>
                        <td>{{$election->election_category}}</td>
                        <td>{{$election->period}}</td>
                        <td>{{$election->start}}</td>
                        <td>{{ $election->end}}</td>
                        <td>{{$election->status}}</td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    @else
    <div class="container">
        <span class="yellow"><h2>No Election Created</h2></span>
    </div>
    @endif
@endsection

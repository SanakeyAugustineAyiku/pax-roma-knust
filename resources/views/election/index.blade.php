@extends('election.dashboard')
@section("dashcontent")
@if ($available_elections && count($available_elections) > 0)
    @foreach ($available_elections as $election)
        <div class="collection">
            <a href="{{route("election.voter.vote",[$election->election_category,str_replace("/","_",$election->period)])}}" class="collection-item">
                <span>{{ "$election->election_category  - $election->period" }}</span><br>
                <span>{{ "voting starts ".  \Carbon\Carbon::parse($election->start)->diffForHumans()." and end ".\Carbon\Carbon::parse($election->end)->diffForHumans() }}</span>
            </a>
            {{-- <a href="#!" class="collection-item">Alvin</a>
            <a href="#!" class="collection-item">Alvin</a>
            <a href="#!" class="collection-item">Alvin</a> --}}
          </div>
       
    @endforeach
@endif  
{{-- <div class="row">
    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <b>User Management</b>
                </div>
            </div>

            <div class="row">
                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">person</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Seller</h5>
                        </span>
                    </div>
                </a>
                <div class="col s1">&nbsp;</div>
                <div class="col s1">&nbsp;</div>

                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">people</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Customer</h5>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <b>Product Management</b>
                </div>
            </div>
            <div class="row">
                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">store</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Product</h5>
                        </span>
                    </div>
                </a>

                <div class="col s1">&nbsp;</div>
                <div class="col s1">&nbsp;</div>

                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">assignment</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Orders</h5>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <b>Brand Management</b>
                </div>
            </div>

            <div class="row">
                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">local_offer</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Brand</h5>
                        </span>
                    </div>
                </a>

                <div class="col s1">&nbsp;</div>
                <div class="col s1">&nbsp;</div>

                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">loyalty</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Sub Brand</h5>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col s6">
        <div style="padding: 35px;" align="center" class="card">
            <div class="row">
                <div class="left card-title">
                    <b>Category Management</b>
                </div>
            </div>
            <div class="row">
                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                        <span class="indigo-text text-lighten-1">
                            <h5>Category</h5>
                        </span>
                    </div>
                </a>
                <div class="col s1">&nbsp;</div>
                <div class="col s1">&nbsp;</div>

                <a href="#!">
                    <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                        <i class="indigo-text text-lighten-1 large material-icons">view_list</i>
                        <span class="truncate indigo-text text-lighten-1">
                            <h5>Sub Category</h5>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div> --}}

@endsection
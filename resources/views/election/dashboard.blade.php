@extends('includes.dashboard')
@section('logout')

    <a class="waves-effect" style="text-decoration: none;" href="{{ route('elections.voter.logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    <i class="material-icons">exit_to_app</i>{{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('elections.voter.logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
@endsection
<!-- mobile view side nav -->
@section('sidenav')
@parent
<li class="center no-padding">
    <div class="indigo white-text" style="height: 180px;">
        <div class="row">
            <img style="margin-top: 5%;" width="100" height="100" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar):asset('/images/LOGO_PAX.png')}}"
                class="circle responsive-img" />

            <p style="margin-top: -5%;">
                {{ Auth::user()->fullname }}
            </p>
        </div>
    </div>
</li>

<li><a class="waves-effect" href="{{route('elections.voter.home')}}">Dashboard</a></li>
<ul class="collapsible">
    {{-- <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">group</i>Manage Members
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="users_seller">
                    <a class="waves-effect" style="text-decoration: none;" href="{{ route('admin.add.member')}}">Add
                        Member</a>
                </li>

                <li id="users_customer">
                    <a class="waves-effect" style="text-decoration: none;"
                        href="{{ route('admin.view.Members')}}">Members List</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">how_to_vote</i>Manage Elections
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="products_product">
                    <a class="waves-effect" style="text-decoration: none;" href="{{route('admin.create.election')}}">New
                        Election</a>
                    <a class="waves-effect" style="text-decoration: none;" href="{{ route('admin.add.candidate')}}">Add
                        Candidate</a>
                    <a class="waves-effect" style="text-decoration: none;"
                        href="{{ route('admin.view.Candidates')}}">Candidates List</a>
                        <a class="waves-effect" style="text-decoration: none;" href="{{route('admin.view.Elections')}}">Election List</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">whatshot</i>Categories
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="categories_category">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
                </li>

                <li id="categories_sub_category">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
                </li>
            </ul>
        </div>
    </li> --}}
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">account_circle</i>Profile
        </div>
        <div class="collapsible-body">
            <ul>
                    <li>
                        <a href="#!"><i class="material-icons">cloud</i>notifications</a>
                    </li>
                    <li class="divider" tabindex="-1"></li>
                    <li>
                        @yield('logout')
                    </li>
            </ul>
        </div>
    </li>
</ul>
@endsection

<!-- side bar -->
@section("sidebar")
@parent
<li class="center no-padding">
    <div class="indigo white-text" style="height: 180px;">
        <div class="row">
            <img style="margin-top: 5%;" width="100" height="100" src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar):asset('/images/LOGO_PAX.png')}}"
                class="circle responsive-img" />

            <p style="margin-top: -5%;">
                {{ Auth::user()->fullname}}
            </p>
        </div>
    </div>
</li>
<li><a class="waves-effect" href="{{route('elections.voter.home')}}">Dashboard</a></li>
{{-- <ul class="collapsible">
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">group</i>Manage Members
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="users_seller">
                    <a class="waves-effect" style="text-decoration: none;" href="{{ route('admin.add.member')}}">Add
                        Member</a>
                </li>

                <li id="users_customer">
                    <a class="waves-effect" style="text-decoration: none;"
                        href="{{ route('admin.view.Members')}}">Members List</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">how_to_vote</i>Manage Elections
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="products_product">
                    <a class="waves-effect" style="text-decoration: none;" href="{{route('admin.create.election')}}">New
                        Election</a>
                    <a class="waves-effect" style="text-decoration: none;" href="{{ route('admin.add.candidate')}}">Add
                        Candidate</a>
                    <a class="waves-effect" style="text-decoration: none;"
                        href="{{ route('admin.view.Candidates')}}">Candidates List</a>
                    <a class="waves-effect" style="text-decoration: none;" href="{{route('admin.view.Elections')}}">Election List</a>
                </li>
            </ul>
        </div>
    </li>
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">whatshot</i>Categories
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="categories_category">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Category</a>
                </li>

                <li id="categories_sub_category">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Category</a>
                </li>
            </ul>
        </div>
    </li>
</ul> --}}
@endsection




@section("scripts")
@parent

@endsection

@extends('includes.dashboard')

<!-- mobile view side nav -->
@section('sidenav')
@parent
<li class="center no-padding">
    <div class="indigo white-text" style="height: 180px;">
        <div class="row">
            <img style="margin-top: 5%;" width="100" height="100" src="{{ asset('/images/LOGO_PAX.png')}}"
                class="circle responsive-img" />

            <p style="margin-top: -13%;">
                Admin name
            </p>
        </div>
    </div>
</li>

<li><a class="waves-effect" href="{{route('admin.home')}}">Dashboard</a></li>
<ul class="collapsible">
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
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">whatshot</i>Brands
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="brands_brand">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
                </li>

                <li id="brands_sub_brand">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
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
            <img style="margin-top: 5%;" width="100" height="100" src="{{ asset('/images/LOGO_PAX.png')}}"
                class="circle responsive-img" />

            <p style="margin-top: -13%;">
                Admin name
            </p>
        </div>
    </div>
</li>
<li><a class="waves-effect" href="{{route('admin.home')}}">Dashboard</a></li>
<ul class="collapsible">
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
    <li>
        <div class="collapsible-header waves-effect">
            <i class="material-icons">whatshot</i>Brands
        </div>
        <div class="collapsible-body">
            <ul>
                <li id="brands_brand">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Brand</a>
                </li>

                <li id="brands_sub_brand">
                    <a class="waves-effect" style="text-decoration: none;" href="#!">Sub Brand</a>
                </li>
            </ul>
        </div>
    </li>
</ul>
@endsection




@section("scripts")
@parent

@endsection

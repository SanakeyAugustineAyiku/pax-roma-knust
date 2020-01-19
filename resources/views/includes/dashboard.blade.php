@extends("includes.shell")
@section('content')
    <!-- Header -->
    <header class="dashboard">
        <!-- nav bar -->
        <nav>
            <div class="nav-wrapper indigo">
                <a href="#" class="brand-logo">Logo</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    {{-- <li>
                        <a href="{{route('admin.home')}}"><i class="material-icons">dashboard</i></a>
                    </li> --}}

                    <li>
                        <a class="dropdown-trigger dropdown-button" data-hover="true" data-constrainwidth="false" href="#!"
                            data-target="profile-dropdown">
                            <i class=" material-icons">account_circle</i>
                        </a>
                        <ul id="profile-dropdown" class="dropdown-content nav-dropdown-content" style="width: 300px !important">
                            <li>
                                <a href="#!"><i class="material-icons">cloud</i>notifications</a>
                            </li>
                            <li class="divider" tabindex="-1"></li>
                            <li>
                               @yield('logout')
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- mobile view side nav -->
        <ul id="mobile-links" class="sidenav">
            @yield('sidenav')
        </ul>
    </header>
    <!-- End Header -->

    <!-- side bar -->
    <div class="sidebar">
        <ul class="sidenav sidenav-fixed z-depth-2">
            @yield('sidebar')
        </ul>
    </div>
    <!-- end sidebar -->
    <!-- page content -->
    <main class="dashboard">
        @yield("dashcontent")
    </main>
    <!-- end page content -->

    <!-- footer -->
    <footer class="page-footer dashboard indigo">
    <div class="footer-copyright">
        <div class="">
            <p>
                <span>Copyright © <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> PAX Romana Knust All rights reserved.</span>
                <span class="right hide-on-small-only" style="margin-left:100px"> Design and Developed by PAX Romana Knust IT</span>
            </p>
        </div>
    </div>
</footer>

    <!-- end footer -->
@endsection
@section("scripts")
@parent
$('.dropdown-trigger').dropdown({constrainWidth:false});
@endsection

<!DOCTYPE html>
<html>

<head>
    <title>Accommodations</title>
    <meta charset="UTF-8">
    @yield('styles')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/animate.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="myPage">

<!-- Navbar -->
<div class="w3-top w3-small">
    <div class="w3-bar Theme-dark blue-dark w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>BRAINSOFT</a>

        <div class="w3-dropdown-hover w3-hide-small @yield('active-members')">
            <button class="w3-button" title="Notifications">MEMBERS <i class="fa fa-caret-down "></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block ">
                <a href="{{route('member.index')}}" class="w3-bar-item w3-button ">SHOW ALL</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-hide-small @yield('active-location')">
            <button class="w3-button" title="Notifications">LOCATION <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="{{route('location.index')}}" class="w3-bar-item w3-button">SHOW ALL</a>
                <a href="{{route('location.create')}}" class="w3-bar-item w3-button">ADD LOCATION</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-hide-small @yield('active-plans')">
            <button class="w3-button" title="Notifications">PLAN <i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block">
                <a href="{{route('plan.index')}}" class="w3-bar-item w3-button">SHOW ALL</a>
                <a href="{{route('plan.create')}}" class="w3-bar-item w3-button">ADD PLAN</a>
            </div>
        </div>

        <div class="w3-dropdown-hover w3-hide-small w3-right @yield('active-admin') ">
            <button class="w3-button" title="Notifications">Account<i class="fa fa-caret-down"></i></button>
            <div class="w3-dropdown-content w3-card-4 w3-bar-block Theme-light blue-light" style="right: 0; width: 200px;">
                <a href="{{route('admin.index')}}" class="w3-bar-item w3-right w3-button">Show Administrators</a>
                <a href="{{route('admin.create')}}" class="w3-bar-item w3-right w3-button">Add Administrator</a>
                <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-bar-item w3-button">Log Out</a>
            </div>
        </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block Theme-dark blue-dark w3-hide w3-hide-large w3-hide-medium">
        <div class="w3-transparent @yield('active-members')">
            <a href="#" onclick="w3.toggleShow('#Member')" class="w3-bar-item w3-button">MEMBER</a>
            <div id="Member" class="w3-margin-left" style="display: none">
                <a href="{{route('member.index')}}" class="w3-button w3-block">SHOW ALL</a>
            </div>
        </div>

        <div class="w3-transparent @yield('active-location')">
            <a href="#" onclick="w3.toggleShow('#Location')" class="w3-bar-item w3-button">Location</a>
            <div id="Location" class="w3-margin-left" style="display: none">
                <a href="{{route('location.index')}}" class="w3-button w3-block">SHOW ALL</a>
                <a href="{{route('location.create')}}" class="w3-button w3-block">ADD LOCATION</a>
            </div>
        </div>

        <div class="w3-transparent @yield('active-plans')">
            <a href="#" onclick="w3.toggleShow('#Plans')" class="w3-bar-item w3-button">Plans</a>
            <div id="Plans" class="w3-margin-left" style="display: none">
                <a href="{{route('plan.index')}}" class="w3-button w3-block">SHOW ALL Plans</a>
                <a href="{{route('plan.create')}}" class="w3-button w3-block">ADD Plan</a>
            </div>
        </div>

        <div class="w3-transparent @yield('active-admin')">
            <a href="#" onclick="w3.toggleShow('#Account')" class="w3-bar-item w3-button">Account</a>
            <div id="Account" class="w3-margin-left" style="display: none">
                <a href="{{route('admin.index')}}" class="w3-button w3-block">Show Administrators</a>
                <a href="{{route('admin.create')}}" class="w3-button w3-block">ADD Administrator</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="w3-button w3-text-red w3-border w3-border-red w3-block">Log Out</a>

            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>







<div class="w3-row-padding w3-mobile">
    <div class="w3-col l1 m1 s12">
        @yield('content-left')
    </div>

    <div class="w3-col 10 m10 s12">
        @yield('content-middle')
    </div>

    <div class="w3-col l1 m1 s12">
        @yield('content-right')
    </div>
</div>



<div  id="theme" class="Theme-light blue-light w3-hide w3-container w3-card-4 w3-padding w3-round-large animated w3-tiny" style="width: 200px; position: fixed; right: 1%; bottom: 1%;" >
    <button onclick="w3.removeClass('#theme','bounceInRight');w3.addClass('#theme','bounceOutRight');" class="w3-button  w3-right w3-red w3-margin-bottom w3-round-xlarge  w3-right">Close</button>

    <button onclick="blue()" class="w3-button w3-blue w3-block">Blue</button>
    <button onclick="purple()" class="w3-button w3-purple w3-block">Purple</button>
    <button onclick="green()" class="w3-button w3-green w3-block">Green</button>
    <button onclick="yellow()" class="w3-button w3-yellow w3-block">Yellow</button>
    <button onclick="cyan()" class="w3-button w3-cyan w3-block">Cyan</button>
    <button onclick="indigo()" class="w3-button w3-indigo w3-block">Indigo</button>
</div>
<!-- Footer -->
<footer class="w3-container  Theme-dark blue-dark w3-center">
    <div id="" style="" class="" >
        <div id="footer" class="">
            <button style="" id="btnTheme" onclick="w3.removeClass('#theme','bounceOutRight');w3.addClass('#theme','bounceInRight w3-show')" class="w3-button w3-hover-blue w3-right">Theme</button>

            <h2 class=""> Brainsoft Solutions Co. Ltd. &copy</h2>
        </div>
    </div>
    <h4>Follow Us</h4>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
    <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>



    {{--<div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">--}}
        {{--<span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>--}}
        {{--<a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">--}}
    {{--<i class="fa fa-chevron-circle-up"></i></span></a>--}}
    {{--</div>--}}
</footer>

<script>
    // // Script for side navigation
    // function w3_open() {
    //     var x = document.getElementById("mySidebar");
    //     x.style.width = "300px";
    //     x.style.paddingTop = "10%";
    //     x.style.display = "block";
    // }
    //
    // // Close side navigation
    // function w3_close() {
    //     document.getElementById("mySidebar").style.display = "none";
    // }

    // Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>
<script src="{{asset('js/jq.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/w3.js')}}" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('js/load-image.all.min.js')}}" type="text/javascript"></script>

@yield('scripts')
</body>
</html>

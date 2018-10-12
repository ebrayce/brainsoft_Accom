@extends('layouts.master')
@section('active-admin','w3-bottombar w3-border-black')



@section('content-left')
    <p></p>
@stop


@section('content-middle')
    <div id="signUp" class="w3-row-padding w3-padding-64">

        <div id="ContainerStatusSignUp"></div>
        <div class="w3-col l4 w3-hide-small  m3"> <p></p> </div>

        <div id="FormContainer" class="w3-col l4 s12 m6  ">

            {!! Form::open(['method' => 'POST', 'action' => ['AdminController@store']]) !!}

            <div id="LogInDetails" class="w3-card-4 w3-margin-bottom Theme-dark blue-dark w3-padding w3-round-large">
                <div>
                    <h3 class="Theme-dark blue-dark  w3-round-large w3-padding w3-center w3-block"><b>Add Administrator</b></h3>
                </div>

                <label class=""><b>Full Name</b></label>
                @if ($errors->has('name'))
                    <strong class="w3-text-red w3-small w3-hover-text-white">Full Name is Required</strong>
                @endif
                <input required class="w3-input w3-round-xlarge w3-margin-bottom w3-border "  type="text" placeholder="Full Name" id="FirstName" name="name" value="{{ old('name') }}">

                <label class=""><b>Email</b></label>
                @if ($errors->has('email'))
                    <strong class="w3-text-red w3-hover-text-white w3-small">Email is Required. It should be Unique</strong>
                @endif
                <input required class="w3-input w3-round-xlarge w3-margin-bottom w3-border "  type="text" placeholder="Email" name="email" value="{{ old('email') }}">

                <label class=""><b>Password</b></label>
                @if ($errors->has('password'))
                    <strong class="w3-text-red w3-small w3-hover-text-white">Password is Required</strong>
                @endif
                <input required class="w3-input w3-round-xlarge w3-margin-bottom w3-border "  type="password" placeholder="Password"  name="password">


                <input type="submit"  class="w3-btn w3-block w3-round-xlarge w3-border animated zoomIn" name="btnUser" value="Create Plan">
            </div>

            {!! Form::close() !!}
        </div>

        <div class="w3-col l4 w3-hide-small m3"><p></p></div>
    </div>

@stop


@section('content-right')
    <p></p>
@stop
@extends('layouts.master')
@section('active-plans','w3-bottombar w3-border-black')





@section('content-left')
    <p></p>
@stop


@section('content-middle')
    <div id="signUp" class="w3-row-padding w3-padding-64">

        <div id="ContainerStatusSignUp"></div>
        <div class="w3-col l4 w3-hide-small  m3"> <p></p> </div>

        <div id="FormContainer" class="w3-col l4 s12 m6  ">

            {!! Form::open(['method' => 'PATCH', 'action' => ['PlanController@update',$plan->id]]) !!}

            <div id="LogInDetails" class="w3-card-4 w3-margin-bottom Theme-dark blue-dark w3-padding w3-round-large">
                <div>
                    <h3 class="Theme-dark blue-dark  w3-round-large w3-padding w3-center w3-block"><b>Edit Plan [{{$plan->name}}]</b></h3>
                </div>

                <label class=""><b>Name</b></label>
                <input required class="w3-input w3-round-xlarge w3-margin-bottom w3-border "  type="text" placeholder="Location Name" id="FirstName" name="name" value="{{$plan->name}}">


                <input type="submit"  class="w3-btn w3-block w3-round-xlarge w3-border animated zoomIn" name="btnUser" value="Update">
            </div>

            {!! Form::close() !!}
            @extends('layouts.showErrors')
        </div>

        <div class="w3-col l4 w3-hide-small m3"><p></p></div>
    </div>

@stop


@section('content-right')
    <p></p>
@stop
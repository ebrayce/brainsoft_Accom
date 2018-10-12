@extends('layouts.master')
@section('active-members','w3-bottombar w3-border-black')


@section('styles')
    <link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
@stop


@section('content-left')
    <p></p>
@stop


@section('content-middle')
    <br>

    <div class="w3-margin-top w3-padding-64">

        <div class="w3-row-padding ">
            <div class="w3-col l3"><p></p></div>
            <div class="w3-col l6 m12 s12">
                <div class="w3-card-4 w3-padding w3-round-xxlarge Theme-dark blue-dark">
                    <div>
                        @if($member)
                            <table class="w3-table">
                                <tr>
                                    <td><b>Full Name:</b></td>
                                    <td>{{$member->name}}</td>
                                </tr>

                                <tr>
                                    <td><b>Email:</b></td><td>{{$member->email}}</td>
                                </tr>

                                <tr>
                                    <td><b>Telephone:</b></td><td>{{$member->telephone}}</td>
                                </tr>

                                <tr>
                                    <td><b>Location:</b></td><td>{{$member->location->name}}</td>
                                </tr>

                                <tr>
                                    <td><b>Plan:</b></td><td>{{$member->plan->name}}</td>
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


@section('content-right')
    <p></p>
@stop
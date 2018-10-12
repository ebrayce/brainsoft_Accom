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
    <br><br>
    <div class="w3-padding-64">
        <div class="w3-card-4 w3-padding">
            <h1 class="w3-block w3-padding w3-center Theme-dark blue-dark">List Of Members</h1>
            <table id="table" class="w3-table w3-striped w3-border w3-small nowrap display" border="0" data-page-length='10'>
                <div id="Bfrtip" ></div>
                <thead class="Theme-dark blue-dark">
                <tr style="">
                    <th>Full Name</th>
                    <th>Show</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Location</th>
                    <th>Plan</th>
                    <th>Date</th>
                    <th>Sort_New</th>
                </tr>
                </thead>

                <tbody>
                @if($members)
                    @foreach($members as $member )
                        <tr>
                            <td>{{$member->name}}</td>

                            <td>
                                <a href="{{route('member.show',$member->id)}}" class="w3-blue w3-btn w3-round-large">Show</a>
                            </td>
                            <td>{{$member->email}}</td>
                            <td>{{$member->telephone}}</td>
                            <td>{{$member->location->name}}</td>
                            <td>{{$member->plan->name}}</td>
                            <td>{{$member->created_at->diffForHumans()}}</td>
                            <td>{{$member->created_at}}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>





            </table>
        </div>

    </div>

@stop


@section('content-right')
<p></p>
@stop

@section('scripts')
    <script src="{{asset('js/dataTables.buttons.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/buttons.flash.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/buttons.print.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/buttons.html5.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pdfmake.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/vfs_fonts.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jszip.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jszip.min.js')}}" type="text/javascript"></script>
@stop
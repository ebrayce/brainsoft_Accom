@extends('layouts.master')
@section('active-plans','w3-bottombar w3-border-black')


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
            <h1 class="w3-block w3-padding w3-center Theme-dark blue-dark">List Of Plans</h1>
            <table id="table" class="w3-table w3-striped w3-border w3-small nowrap display" border="0" data-page-length='10'>
                <div id="Bfrtip" ></div>
                <thead class="Theme-dark blue-dark">
                <tr style="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date Created</th>
                    <th>Last Updated</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                @if($plans)
                    @foreach($plans as $plan )
                        <tr>
                            <td>{{$plan->id}}</td>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->created_at}}</td>
                            <td>{{$plan->updated_at}}</td>
                            <td>
                                <a href="{{route('plan.edit',$plan->id)}}" class="w3-btn w3-green w3-round-large">Edit</a>
                            </td>

                            <td>
                                {!! Form::open(['method' => 'DELETE', 'action' => ['LocationController@destroy',$plan->id],'onsubmit' => "return confirm('Are you sure you want to delete [Name: ". $plan->name. "]?')"]) !!}
                                <input type="submit" class="w3-btn w3-red w3-round-large" value="Delete">

                                {!! Form::close() !!}
                            </td>
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
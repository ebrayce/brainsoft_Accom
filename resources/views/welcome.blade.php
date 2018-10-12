<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <title>Document</title>
</head>
<body>
<div class="">
    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
        <div class="w3-row">
            <div class="w3-col m5">
                <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
                <h3>Address</h3>
                <p>Swing by for a cup of coffee, or whatever.</p>
                <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
                <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
                <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
            </div>
            <div class="w3-col m7">
                <div class="w3-card-4 w3-padding w3-round-xxlarge ">

                    {!! Form::open(['method' => 'POST', 'action' => ['MemberController@store']]) !!}

                    <div class="w3-section w3-padding ">
                        @if ($errors->has('name'))
                            <p class="w3-red w3-padding w3-round-xlarge">Name is Required</p>
                        @endif
                        <label><b>Name:</b></label>
                        <input class="w3-input {{ $errors->has('name') ? 'w3-border-red' : '' }}" type="text" name="name" required value="{{ old('name') }}">
                    </div>
                    <div class="w3-section w3-padding">
                        @if ($errors->has('email'))
                            <p class="w3-red w3-padding w3-round-xlarge">Email is Required</p>
                        @endif
                        <label><b>Email</b></label>
                        <input class="w3-input {{ $errors->has('email') ? 'w3-border-red' : '' }}" type="email" name="email" value="{{ old('telephone') }} ">
                    </div>
                    <div class="w3-section w3-padding">
                        @if ($errors->has('telephone'))
                            <p class="w3-red w3-padding w3-round-xlarge">Telephone is Required</p>
                        @endif
                        <label><b>Telephone:</b></label>
                        <input class="w3-input {{ $errors->has('telephon') ? 'w3-border-red' : '' }}" type="text" name="telephone" required value="{{ old('telephone') }}">
                    </div>

                    <div class="w3-section w3-padding">
                        @if ($errors->has('location'))
                            <p class="w3-red w3-padding w3-round-xlarge">Location is Required</p>
                        @endif
                        <label><b>Location:</b></label>
                        <select name="location_id" id="" class="{{ $errors->has('location_id') ? 'w3-border-red' : '' }} w3-select" required>
                            <option value="">Select Location</option>
                            @if($locations)
                                @foreach($locations as $location )
                                    <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach

                            @endif

                        </select>
                    </div>

                    <div class="w3-section w3-padding">
                        @if ($errors->has('plan_id'))
                            <p class="w3-red w3-padding w3-round-xlarge">Plan is Required</p>
                        @endif
                        <label><b>Plan:</b></label>
                        <select required name="plan_id" id="" class="w3-select {{ $errors->has('plan_id') ? 'w3-border-red' : '' }}">
                            <option value="{{ old('plan_id') }}">Select Your Plan</option>
                            @if($plans)
                                @foreach($plans as $plan )
                                    <option value="{{$plan->id}}">{{$plan->name}}</option>
                                @endforeach

                            @endif
                        </select>
                    </div>

                    <div class="w3-center">
                        <button type="submit" class="w3-button  w3-round-xxlarge w3-blue">Submit</button>
                    </div>


                    {!! Form::close() !!}

                </div>

            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jq.js')}}" type="text/javascript"></script>
<script src="{{asset('js/w3.js')}}" type="text/javascript"></script>
</body>
</html>

    @if(count($errors)>0)
        <div class="w3-card-4 w3-margin w3-padding ">
            <div class="w3-text-red w3-padding">
                <ul>
                    @foreach($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>
        </div>
    @endif

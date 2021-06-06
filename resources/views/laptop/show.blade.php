@extends('layouts.app')
@section('content')
<div class="container">
 <div class="well">
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
    
        <table class="table table-bordered">
        <tr>
            <th colspan="2" class="th"><center>Χαρακτηριστικά</center></th>
        </tr> 
        <tr class="white">
        <td class="bold">Κατασκευαστής:</td> <td>{{$laptop->fact}}</td>
        </tr>
        <tr>
        <td class="bold">Επεξεργαστής:</td> <td>{{$laptop->cpu}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Μητρική κάρτα:</td> <td>{{$laptop->mboard}}</td>
        </tr>
        <tr>
        <td class="bold">Μνήμη RAM:</td> <td>{{$laptop->ram}} GB</td>
        </tr>
        <tr class="white">
        <td class="bold">Κάρτα γραφικών:</td> <td>{{$laptop->gpu}}</td>
        </tr>
        <tr>
        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$laptop->disc}} GB</td>
        </tr>
        <tr class="white">
        <td class="bold">Οθόνη:</td> <td>{{$laptop->screen}} ίντσες</td>
        </tr>
        <tr>
        <td class="bold">Λειτουργικό σύστημα:</td> <td>{{$laptop->system}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Κατάσταση:</td> <td>{{$laptop->status}}</td>
        </tr>
        <tr>
        <td class="bold">Τιμή:</td> <td class="timi">{{$laptop->price}} &euro;</td>
        </tr>
        <tr>
            <th colspan="2" class="th"><center>Επικοινωνία</center></th>
        </tr>
        
        <tr class="white">
                <td class="bold">Χώρα:</td><td>  {{$laptop->user->profile->country}}</td>
            </tr>
            <tr>
                    <td class="bold">Πόλη:</td><td>  {{$laptop->user->profile->city}}</td>
                </tr>
                <tr class="white">
                        <td class="bold">Τηλέφωνο 1:</td><td>  {{$laptop->user->profile->thl1}}</td>
                    </tr>
                    <tr>
                            <td class="bold">Τηλέφωνο 2:</td><td> {{$laptop->user->profile->thl2}}</td>
                        </tr>
                        <tr class="white">
                            <td class="bold">E-mail:</td> <td>{{$laptop->user->email}}</td>
                            </tr>
    </table>
        <br>
        <p class="bold">Περιγραφή:<br><br> {!!$laptop->body!!}</p>
        <hr>
        <small class="bold">Δημοσιεύτηκε στις {{$laptop->created_at}} από {{$laptop->user->name}} {{$laptop->user->lastname}}.</small>
        <hr>
    </div>
    </div>
    <div class="row">
        <div class="gallery">
                <ul>
                @if ($laptop->cover_image!="noimage.jpg")    
                <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$laptop->cover_image}}"><img  width="300" height="250" src="/storage/cover_images/{{$laptop->cover_image}}" alt="" title=""/></a></li>
                @endif
                @if ($laptop->cover_image1!="noimage.jpg")
                <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$laptop->cover_image1}}"><img width="300" height="250"  src="/storage/cover_images/{{$laptop->cover_image1}}" alt="" title=""/></a></li>
                @endif
                @if ($laptop->cover_image2!="noimage.jpg")
                <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$laptop->cover_image2}}"><img   width="300" height="250"  src="/storage/cover_images/{{$laptop->cover_image2}}" alt="" title=""/></a></li>
                @endif
                </ul>
                </div> 
            </div> 
        <hr>
        <a href="/laptops" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Πίσω</a>
        @if(!Auth::guest())
            @if(Auth::user()->id == $laptop->user_id)
                <a href="/laptops/{{$laptop->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία</a>
                {!!Form::open(['action' => ['LaptopController@destroy', $laptop->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Διαγραφή', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                {!!Form::close()!!} 
            @endif
        @endif
</div>
</div>
@endsection
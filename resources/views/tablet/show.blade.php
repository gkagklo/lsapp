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
        <td class="bold">Κατασκευαστής:</td> <td>{{$tablet->fact}}</td>
        </tr>
        <tr>
        <td class="bold">Λειτουργικό σύστημα:</td> <td>{{$tablet->system}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Επεξεργαστής:</td> <td>{{$tablet->cpu}}</td>
        </tr>
        <tr>
        <td class="bold">Μνήμη RAM:</td> <td>{{$tablet->ram}} GB</td>
        </tr>
        <tr class="white">
        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$tablet->disc}} GB</td>
        </tr>
        <tr>
        <td class="bold">Οθόνη:</td> <td>{{$tablet->screen}} ίντσες</td>
        </tr>
        <tr class="white">
        <td class="bold">Εμπρόσθια κάμερα:</td> <td>{{$tablet->camera}} MP</td>
        </tr>
        <tr>
            <td class="bold">Οπίσθια κάμερα:</td> <td>{{$tablet->camera2}} MP</td>
        </tr>
        <tr class="white">
        <td class="bold">Μπαταρία:</td> <td>{{$tablet->battery}} mAh</td>
        </tr>
        <tr>
        <td class="bold">Χρώμα:</td> <td>{{$tablet->color}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Κατάσταση:</td> <td>{{$tablet->status}}</td>
        </tr>
        <tr>
        <td class="bold">Τιμή:</td> <td class="timi">{{$tablet->price}} &euro;</td>
        </tr>
        <tr>
            <th colspan="2" class="th"><center>Επικοινωνία</center></th>
        </tr>
        
        <tr class="white">
            <td class="bold">Χώρα:</td><td> {{$tablet->user->profile->country}}</td>
        </tr>
        <tr>
            <td class="bold">Πόλη:</td><td>  {{$tablet->user->profile->city}}</td>
        </tr>
        <tr class="white">
            <td class="bold">Τηλέφωνο 1:</td><td>  {{$tablet->user->profile->thl1}}</td>
        </tr>
        <tr>
            <td class="bold">Τηλέφωνο 2:</td><td>  {{$tablet->user->profile->thl2}}</td>
        </tr>
        <tr class="white">
            <td class="bold">E-mail:</td> <td>{{$tablet->user->email}}</td>
        </tr>
    </table>
        <br>
        <p class="bold">Περιγραφή: {!!$tablet->body!!}</p>
        <hr>
        <small class="bold">Δημοσιεύτηκε στις {{$tablet->created_at}} από {{$tablet->user->name}} {{$tablet->user->lastname}}.</small>
        <hr>
    </div>
</div>
<div class="row">
    <div class="gallery">
            <ul>
            @if ($tablet->cover_image!="noimage.jpg")    
            <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$tablet->cover_image}}"><img  width="300" height="250" src="/storage/cover_images/{{$tablet->cover_image}}" alt="" title=""/></a></li>
            @endif
            @if ($tablet->cover_image1!="noimage.jpg")
            <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$tablet->cover_image1}}"><img width="300" height="250"  src="/storage/cover_images/{{$tablet->cover_image1}}" alt="" title=""/></a></li>
            @endif
            @if ($tablet->cover_image2!="noimage.jpg")
            <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$tablet->cover_image2}}"><img   width="300" height="250"  src="/storage/cover_images/{{$tablet->cover_image2}}" alt="" title=""/></a></li>
            @endif
            </ul>
            </div> 
        </div> 
    <br>
        <a href="/tablets" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Πίσω</a>
        @if(!Auth::guest())
            @if(Auth::user()->id == $tablet->user_id)
                <a href="/tablets/{{$tablet->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία</a>
                {!!Form::open(['action' => ['TabletController@destroy', $tablet->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Διαγραφή', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                {!!Form::close()!!} 
            @endif
        @endif
</div>
</div>
@endsection
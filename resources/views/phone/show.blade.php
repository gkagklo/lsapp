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
        <td class="bold">Κατασκευαστής:</td> <td>{{$phone->fact}}</td>
        </tr>
        <tr>
        <td class="bold">Λειτουργικό σύστημα:</td> <td>{{$phone->system}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Επεξεργαστής:</td> <td>{{$phone->cpu}}</td>
        </tr>
        <tr>
        <td class="bold">Μνήμη RAM:</td> <td>{{$phone->ram}} GB</td>
        </tr>
        <tr class="white">
        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$phone->disc}} GB</td>
        </tr>
        <tr>
        <td class="bold">Οθόνη:</td> <td>{{$phone->screen}} ίντσες</td>
        </tr>
        <tr class="white">
        <td class="bold">Εμπρόσθια κάμερα:</td> <td>{{$phone->camera}} MP</td>
        </tr>
        <tr>
            <td class="bold">Οπίσθια κάμερα:</td> <td>{{$phone->camera2}} MP</td>
        </tr>
        <tr class="white">
        <td class="bold">Μπαταρία:</td> <td>{{$phone->battery}} mAh</td>
        </tr>
        <tr>
            <td class="bold">Χρώμα:</td> <td>{{$phone->color}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Κατάσταση:</td> <td>{{$phone->status}}</td>
        </tr>
        <tr>
        <td class="bold">Τιμή:</td> <td class="timi">{{$phone->price}} &euro;</td>
        </tr>
        <tr>
            <th colspan="2" class="th"><center>Επικοινωνία</center></th>
        </tr>
        <tr class="white">
            <td class="bold">Χώρα:</td><td>{{$phone->user->profile->country}}</td>
        </tr>
        <tr>
            <td class="bold">Πόλη:</td><td> {{$phone->user->profile->city}}</td>
        </tr>
        <tr class="white">
            <td class="bold">Τηλέφωνο 1:</td><td> {{$phone->user->profile->thl1}}</td>
        </tr>
        <tr>
            <td class="bold">Τηλέφωνο 2:</td><td>  {{$phone->user->profile->thl2}}</td>
        </tr>
        <tr class="white">
            <td class="bold">E-mail:</td> <td>{{$phone->user->email}}</td>
            </tr>
    </table>
        <br>
        <p class="bold">Περιγραφή: {!!$phone->body!!}</p>
        <hr>
        <small class="bold">Δημοσιεύτηκε στις {{$phone->created_at}} από {{$phone->user->name}} {{$phone->user->lastname}}.</small>
        <hr>
        </div>
        </div>
        <div class="row">
            <div class="gallery">
                    <ul>
                    @if ($phone->cover_image!="noimage.jpg")    
                    <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$phone->cover_image}}"><img  width="300" height="250" src="/storage/cover_images/{{$phone->cover_image}}" alt="" title=""/></a></li>
                    @endif
                    @if ($phone->cover_image1!="noimage.jpg")
                    <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$phone->cover_image1}}"><img width="300" height="250"  src="/storage/cover_images/{{$phone->cover_image1}}" alt="" title=""/></a></li>
                    @endif
                    @if ($phone->cover_image2!="noimage.jpg")
                    <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$phone->cover_image2}}"><img   width="300" height="250"  src="/storage/cover_images/{{$phone->cover_image2}}" alt="" title=""/></a></li>
                    @endif
                    </ul>
                    </div> 
                </div> 
                <hr>
        <a href="/phones" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Πίσω</a>
        @if(!Auth::guest())
            @if(Auth::user()->id == $phone->user_id)
                <a href="/phones/{{$phone->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία</a>
                {!!Form::open(['action' => ['PhoneController@destroy', $phone->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Διαγραφή', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                {!!Form::close()!!} 
            @endif
        @endif
    </div>
</div>
@endsection
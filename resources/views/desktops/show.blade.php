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
       <td class="bold">Κατασκευαστής:</td> <td>{{$post->fact}}</td>
        </tr>
        <tr>
        <td class="bold">Επεξεργαστής:</td><td> {{$post->cpu}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Μητρική κάρτα:</td><td> {{$post->mboard}}</td>
        </tr>
        <tr>
        <td class="bold">Μνήμη RAM:</td><td> {{$post->ram}} GB </td>
        </tr>
        <tr class="white">
        <td class="bold">Κάρτα γραφικών:</td><td> {{$post->gpu}}</td>
        </tr>
        <tr>
        <td class="bold">Αποθηκευτικός χώρος:</td><td> {{$post->disc}} GB</td>
        </tr>
        <tr class="white">
            <td class="bold">Λειτουργικό σύστημα:</td><td> {{$post->system}}</td>
        </tr>
        <tr>
        <td class="bold">Κατάσταση:</td><td> {{$post->status}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Τιμή:</td><td class="timi"> {{$post->price}} &euro;</td>
        </tr>
        <tr>
                <th colspan="2" class="th"><center>Επικοινωνία</center></th>
        </tr>
        
        <tr class="white">
            <td class="bold">Χώρα:</td><td> {{$post->user->profile->country}}</td>
        </tr>
        <tr>
                <td class="bold">Πόλη:</td><td> {{$post->user->profile->city}}</td>
            </tr>
            <tr class="white">
                    <td class="bold">Τηλέφωνο 1:</td><td> {{$post->user->profile->thl1}}</td>
                </tr>
                <tr>
                        <td class="bold">Τηλέφωνο 2:</td><td> {{$post->user->profile->thl2}}</td>
                    </tr>
                    <tr class="white">
                        <td class="bold">E-mail:</td><td> {{$post->user->email}}</td>
                         </tr>
    </table>
        <br>
        <p class="bold">Περιγραφή:<br><br>
             {!!$post->body!!}</p>
        <hr>
        <small class="bold">Δημοσιεύτηκε στις {{$post->created_at}} από {{$post->user->name}} {{$post->user->lastname}}.</small>
        <br> <br>
    </div>

</div>

 <div class="row">
<div class="gallery">
        <ul>
        @if ($post->cover_image!="noimage.jpg")    
        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$post->cover_image}}"><img  width="300" height="250" src="/storage/cover_images/{{$post->cover_image}}" alt="" title=""/></a></li>
        @endif
        @if ($post->cover_image1!="noimage.jpg")
        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$post->cover_image1}}"><img width="300" height="250"  src="/storage/cover_images/{{$post->cover_image1}}" alt="" title=""/></a></li>
        @endif
        @if ($post->cover_image2!="noimage.jpg")
        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$post->cover_image2}}"><img   width="300" height="250"  src="/storage/cover_images/{{$post->cover_image2}}" alt="" title=""/></a></li>
        @endif
        </ul>
        </div> 
    </div> 

        <hr>
        <a href="/desktops" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Πίσω</a>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/desktops/{{$post->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία</a>              
                {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}  
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Διαγραφή', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                {!!Form::close()!!} 
            @endif
        @endif
</div> 
</div>


@endsection
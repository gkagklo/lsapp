@extends('layouts.app')
@section('content')

<div class="well">    

@if(isset($details))
@foreach($details as $post)

        <div class="row">
            <div class="col-md-4">
             <br> 
             <center>   <a href="desktops/{{$post->id}}"><img class="img-responsive"  width="350" height="180" src="/storage/cover_images/{{$post->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center>                   
            </div> <br>
        <div class="col-md-6"> 
  
        <table class="table table-bordered">                     
            <tr class="white">
            <td class="bold">Κατασκευαστής:</td> <td>{{$post->fact}}</td>
            </tr>
            <tr>
            <td class="bold">Επεξεργαστής:</td> <td>{{$post->cpu}}</td>
            </tr>
            <tr class="white">
            <td class="bold">Μνήμη RAM:</td> <td>{{$post->ram}} GB</td>
            </tr>
            <tr>
            <td class="bold">Κάρτα γραφικών:</td> <td>{{$post->gpu}}</td>
            </tr>
            <tr class="white">
            <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$post->disc}} GB</td>
            </tr>
            <tr>
            <td class="bold">Κατάσταση:</td> <td>{{$post->status}}</td>
            </tr>
            <tr class="white">
            <td class="bold">Τιμή:</td> <td class="timi">{{$post->price}} &euro;</td>
            </tr>
            </table>
            <center><a href="/posts/{{$post->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
            <hr>
            <center><p class="bold">Δημοσιεύτηκε στις {{$post->created_at}} από {{$post->user->name}} {{$post->user->lastname}}.</p></center>
         <br><br><br><br>
        </div>
    </div>
            @endforeach  
        @endif
    @if(isset($data))
    @foreach($data as $laptop)
    <div class="row">     
        <div class="col-md-4">
         <br> 
         <center>   <a href="laptops/{{$laptop->id}}"><img class="img-responsive"  width="350" height="180" src="/storage/cover_images/{{$laptop->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center>                   
        </div> <br>
    <div class="col-md-6"> 
    <table class="table table-bordered">                     
        <tr class="white">
        <td class="bold">Κατασκευαστής:</td> <td>{{$laptop->fact}}</td>
        </tr>
        <tr>
        <td class="bold">Επεξεργαστής:</td> <td>{{$laptop->cpu}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Μνήμη RAM:</td> <td>{{$laptop->ram}} GB</td>
        </tr>
        <tr>
        <td class="bold">Κάρτα γραφικών:</td> <td>{{$laptop->gpu}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$laptop->disc}} GB</td>
        </tr>
        <tr>
        <td class="bold">Κατάσταση:</td> <td>{{$laptop->status}}</td>
        </tr>
        <tr class="white">
        <td class="bold">Τιμή:</td> <td class="timi">{{$laptop->price}} &euro;</td>
        </tr>
        </table>
        <center><a href="/laptops/{{$laptop->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
        <hr>
        <center><p class="bold">Δημοσιεύτηκε στις {{$laptop->created_at}} από {{$laptop->user->name}} {{$laptop->user->lastname}}.</p></center>
        <br><br><br><br>
    </div>
</div>
        @endforeach
    @endif

    
    @if(isset($phones))
    @foreach($phones as $phone)
    <div class="row">
            <div class="col-md-4">

               <center>   <a href="/phones/{{$phone->id}}"><img  class="img-responsive" width="350" height="180" src="/storage/cover_images/{{$phone->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center> 
            </div>
            <div class="col-md-6 col-sm-6">
                    <table class="table table-bordered">
                            <br>
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
                                        <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$phone->ram}} GB</td>
                                    </tr>
                                    <tr>
                                    <td class="bold">Κατάσταση:</td> <td>{{$phone->status}}</td>
                                    </tr>
                                    <tr class="white">
                                    <td class="bold">Τιμή:</td> <td class="timi">{{$phone->price}} &euro;</td>
                                    </tr>
                        </table>
                    <Br>
                        <Center>  <a href="/phones/{{$phone->id}}"  class="btn btn-primary">Διαβάστε περισσότερα..</a></Center>
                        <hr>
                        <Center>   <small class="bold">Δημοσιεύτηκε στις {{$phone->created_at}} από {{$phone->user->name}} {{$phone->user->lastname}}.</small></Center>
                        <br><br><br><br>
            </div>
        </div>
        
        @endforeach
        @endif



        @if(isset($tablets))
        @foreach($tablets as $tablet)
        <div class="row">
                <div class="col-md-4">

                    <center> <a href="/tablets/{{$tablet->id}}"><img  class="img-responsive" width="350" height="180" src="/storage/cover_images/{{$tablet->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center>
                </div>
                <div class="col-md-6 col-sm-6">
                    
                        <table class="table table-bordered">               
                                <br>
                               <tr >
                                    <td class="bold">Κατασκευαστής:</td> <td>{{$tablet->fact}}</td>
                                </tr>
                                <tr class="white">
                                        <td class="bold">Επεξεργαστής:</td><td> {{$tablet->cpu}}</td>
                                    </tr>
                                    <tr >
                                            <td class="bold">Μνήμη Ram: </td><td>{{$tablet->ram}} GB</td>
                                        </tr>

                                        <tr class="white">
                                                <td class="bold">Αποθηκευτικός χώρος:</td><td> {{$tablet->disc}}</td>
                                        </tr>
                                                 <tr>    
                                                <td class="bold">Κατάσταση:</td><td> {{$tablet->status}}</td>
                                                </tr>
                                                <tr>
                                                        <td class="bold">Τιμή:</td> <td class="timi">{{$tablet->price}}&euro;</td>
                                                      </tr>
                                                    </table>
                        <Br>
                            <Center>  <a href="/tablets/{{$tablet->id}}"  class="btn btn-primary">Διαβάστε περισσότερα..</a></Center>
                            <hr>
                            <Center>   <small class="bold">Δημοσιεύτηκε στις {{$tablet->created_at}} από {{$tablet->user->name}} {{$tablet->user->lastname}}.</small></Center>
                            <br><br><br><br>
                </div>
            </div>
        @endforeach
        @endif



        @if(isset($periferiakas))
        @foreach($periferiakas as $periferiaka)
        <div class="row">
                <div class="col-md-4">

                    <center> <a href="/periferiaka/{{$periferiaka->id}}"><img  class="img-responsive" width="350" height="180" src="/storage/cover_images/{{$periferiaka->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a></center>
                </div>
                <div class="col-md-6 col-sm-6">
                        <table class="table table-bordered">
                                <tr class="white">
                                        <td class="bold">Κατηγορία:</td> <td>{{$periferiaka->category}}</td>
                                        </tr>
                                        <tr>
                                            <td class="bold">Κατασκευαστής:</td> <td>{{$periferiaka->fact}}</td>
                                        </tr>
                                        @if ($periferiaka->category=="Ηχεία")
                                        <tr class="white">
                                              <td class="bold">Ισχύς:</td> <td>{{$periferiaka->power}} W</td>
                                              </tr>
                                      @endif
                                        @if ($periferiaka->category=="Ακουστικά")
                                        <tr class="white">
                                              <td class="bold">Ευαισθησία Ακουστικών:</td> <td>{{$periferiaka->volume}} dB</td>
                                      </tr>
                                      @endif
                                        @if ($periferiaka->category=="Ποντίκια")
                                        <tr class="white">
                                              <td class="bold">Ανάλυση Αισθητήρα:</td> <td>{{$periferiaka->dpi}} dpi</td>
                                        </tr>
                                        @endif
                                        @if ($periferiaka->category=="Πληκτρολόγια")
                                      <tr class="white">
                                          <td class="bold">Μηχανικό Πληκτρολόγιο:</td> <td>{{$periferiaka->mech}} </td>
                                      </tr>
                                      @endif
                                        <tr>
                                        <td class="bold">Συνδεσιμότητα:</td> <td>{{$periferiaka->connectivity}}</td>
                                        </tr>
                                        <tr class="white">
                                        <td class="bold">Χρώμα:</td> <td>{{$periferiaka->color}}</td>
                                        </tr>
                                        <tr >
                                              <td class="bold">Κατάσταση :</td> <td>{{$periferiaka->status}}</td>
                                      </tr>
                                        <tr class="white">
                                        <td class="bold">Τιμή:</td> <td class="timi">{{$periferiaka->price}} &euro;</td>
                                        </tr>
                     
                                                    </table>
                        <Br>
                            <Center>  <a href="/periferiaka/{{$periferiaka->id}}"  class="btn btn-primary">Διαβάστε περισσότερα..</a></Center>
                            <hr>
                            <Center>  <small class="bold">Δημοσιεύτηκε στις {{$periferiaka->created_at}} από {{$periferiaka->user->name}} {{$periferiaka->user->lastname}}.</small></Center>
                            <br><br><br><br>
                </div>
            </div>
        @endforeach
        @endif



<br><br>
<center>
    @if(isset($error))
    <p style="font-size:20px;">{{ $error }}</p>
    @endif
</center>
</div>
   
    @endsection
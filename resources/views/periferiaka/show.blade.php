@extends('layouts.app')
@section('content')
<div class="container">
        <div class="well">
           <div class="row">
            <div class="col-md-8 col-md-offset-2"> 
               <table class="table  table-bordered ">
               <tr>
                   <th colspan="2" class="th"><center>Χαρακτηριστικά</center></th>
               </tr> 
               <tr class="white">
               <td class="bold">Κατηγορία:</td> <td>{{$periferiaka->category}}</td>
               </tr>
               <tr>
               <td class="bold">Κατασκευαστής:</td> <td>{{$periferiaka->fact}}</td>
               </tr>
        
               <tr class="white">
               <td class="bold">Συνδεσιμότητα:</td> <td>{{$periferiaka->connectivity}}</td>
               </tr>
             
             

                    @if ($periferiaka->category=="Πληκτρολόγια")
                    <tr>
                        <td class="bold">Χρήση:</td> <td>{{$periferiaka->usage}} </td>
                         </tr>
                         <tr class="white">
                                <td class="bold">Μηχανικό Πληκτρολόγιο:</td> <td>{{$periferiaka->mech}} </td>
                                 </tr>
                                 <tr>
                                         <td class="bold">Φωτιζόμενα Πλήκτρα:</td> <td>{{$periferiaka->rgb}} </td>
                                         </tr>
                                     @endif
 
                    @if ($periferiaka->category=="Ποντίκια")
                     <tr>
                     <td class="bold">Ανάλυση Αισθητήρα:</td> <td>{{$periferiaka->dpi}} dpi</td>
                     </tr>
                      <tr class="white">
                         <td class="bold">Πλήκτρα:</td> <td>{{$periferiaka->pliktra}} </td>
                     </tr>
                    @endif

                    @if ($periferiaka->category=="Ακουστικά")
                    <tr>
                    <td class="bold">Ευαισθησία Ακουστικών:</td> <td>{{$periferiaka->volume}} dB</td>
                    </tr>
                     <tr class="white">
                        <td class="bold">Ευαισθησία Μικροφώνου:</td> <td>{{$periferiaka->micro}} dB </td>
                    </tr>
                   @endif

                   @if ($periferiaka->category=="Ηχεία")
                   <tr>
                    <td class="bold">Ισχύς:</td> <td>{{$periferiaka->power}} W</td>
                    </tr>
                     <tr class="white">
                        <td class="bold">Κανάλια:</td> <td>{{$periferiaka->channels}}</td>
                    </tr>
                    @endif

                    @if ($periferiaka->category=="Κάμερες")
                    <tr>
                     <td class="bold">Ανάλυση Βίντεο:</td> <td>{{$periferiaka->resolution}}</td>
                     </tr>
                      <tr class="white">
                         <td class="bold">Καρέ ανά δευτερόλεπτο:</td> <td>{{$periferiaka->fps}} fps</td>
                     </tr>
                     <tr>
                        <td class="bold">Μικρόφωνο:</td> <td>{{$periferiaka->mic}}</td>
                    </tr>
                     @endif

                     <tr class="white">
                            <td class="bold">Κατάσταση:</td> <td>{{$periferiaka->status}} </td>
                            </tr>

                     <tr>
                            <td class="bold">Χρώμα:</td> <td>{{$periferiaka->color}} </td>
                            </tr>


               <tr class="white">
               <td class="bold">Τιμή:</td> <td class="timi">{{$periferiaka->price}} &euro;</td>
               </tr>
               <tr>
                   <th colspan="2" class="th"><center>Επικοινωνία</center></th>
               </tr>
               <tr class="white">
                   <td class="bold">Χώρα:</td><td>{{$periferiaka->user->profile->country}}</td>
               </tr>
               <tr>
                   <td class="bold">Πόλη:</td><td> {{$periferiaka->user->profile->city}}</td>
               </tr>
               <tr class="white">
                   <td class="bold">Τηλέφωνο 1:</td><td> {{$periferiaka->user->profile->thl1}}</td>
               </tr>
               <tr>
                   <td class="bold">Τηλέφωνο 2:</td><td>  {{$periferiaka->user->profile->thl2}}</td>
               </tr>
               <tr class="white">
                   <td class="bold">E-mail:</td> <td>{{$periferiaka->user->email}}</td>
                   </tr>
           </table>
               <br>
               <p class="bold">Περιγραφή: {!!$periferiaka->body!!}</p>
               <hr>
               <small class="bold">Δημοσιεύτηκε στις {{$periferiaka->created_at}} από {{$periferiaka->user->name}} {{$periferiaka->user->lastname}}.</small>
               <hr>
               </div>
               </div>
               <div class="row">
                <div class="gallery">
                        <ul>
                        @if ($periferiaka->cover_image!="noimage.jpg")    
                        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$periferiaka->cover_image}}"><img  width="300" height="250" src="/storage/cover_images/{{$periferiaka->cover_image}}" alt="" title=""/></a></li>
                        @endif
                        @if ($periferiaka->cover_image1!="noimage.jpg")
                        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$periferiaka->cover_image1}}"><img width="300" height="250"  src="/storage/cover_images/{{$periferiaka->cover_image1}}" alt="" title=""/></a></li>
                        @endif
                        @if ($periferiaka->cover_image2!="noimage.jpg")
                        <li><a class="fancybox" data-fancybox-group="group" href="/storage/cover_images/{{$periferiaka->cover_image2}}"><img   width="300" height="250"  src="/storage/cover_images/{{$periferiaka->cover_image2}}" alt="" title=""/></a></li>
                        @endif
                        </ul>
                        </div> 
                    </div> 
                    <hr>
               <a href="/periferiaka" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Πίσω</a>
               @if(!Auth::guest())
                   @if(Auth::user()->id == $periferiaka->user_id)
                       <a href="/periferiaka/{{$periferiaka->id}}/edit" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Επεξεργασία</a>
                       {!!Form::open(['action' => ['PeriferiakaController@destroy', $periferiaka->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                       {{Form::hidden('_method', 'DELETE')}}
                       {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Διαγραφή', array('class'=>'btn btn-danger', 'type'=>'submit')) }}
                       {!!Form::close()!!} 
                   @endif
               @endif
           </div>
       </div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">Σελίδα χρήστη</div>
    <br><br>

<div class="row">
    <div class="gallery">
    <ul>     
     <li><a href="/posts/create">  <img  class="img-responsive img-circle " src="/images/desktop.jpg" alt="ΠΟΥΛΑ ΤΟ ΥΠΟΛΟΓΙΣΤΗ" title="ΠΟΥΛΑ ΤΟ ΥΠΟΛΟΓΙΣΤΗ" width="150" height="100" ></a>Πούλα τον υπολογιστή</li>
    <li><a href="/laptops/create"> <img class="img-responsive img-circle " src="/images/laptop.jpg" alt="ΠΟΥΛΑ ΤΟ ΛΑΠΤΟΤ" title="ΠΟΥΛΑ ΤΟ ΛΑΠΤΟΤ"  width="150" height="100" ></a>Πούλα το laptop</li>
    <li><a href="/phones/create"> <img class="img-responsive img-circle " src="/images/smartphone.jpg" alt="ΠΟΥΛΑ ΤΟ ΚΙΝΗΤΟ " title="ΠΟΥΛΑ ΤΟ ΚΙΝΗΤΟ " width="150" height="100"></a>Πούλα το κινητό</li>
    <li><a href="/tablets/create"> <img class="img-responsive img-circle" src="/images/tablet.jpg" alt="ΠΟΥΛΑ ΤΟ TABLET" title="ΠΟΥΛΑ ΤΟ TABLET" width="150" height="100" ></a>Πούλα το tablet</li>
    <li><a href="/periferiaka/create"> <img class="img-responsive img-circle" src="/images/periferiaka.jpg" alt="ΠΟΥΛΑ ΤΟ ΛΑΠΤΟΤ" title="ΠΟΥΛΑ ΤΟ ΛΑΠΤΟΤ" width="150" height="100" ></a>Πούλα τα περιφερειακά</li>
    </ul>
    </div>
</div>
   
   
                <div class="panel-body">
                           
                <center><h2>Οι δημοσιεύσεις μου</h2></center>
                <br> <br>
                
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                   
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                    <td>{{$post->title}} <br> <br> <a href="/desktops/{{$post->id}}"><img class="img-responsive" height="200" width="300" src="/storage/cover_images/{{$post->cover_image}}"></a></td>

                                    <td><a href="/desktops/{{$post->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </td>
                            </tr>
                            @endforeach
                            
                        </table>
                        @endif 
                       
                       
                        @if(count($laptop) >0)
                        <table class="table table-striped">
                        @foreach($laptop as $laptops)
                        <tr>
                                <td>{{$laptops->title}} <br> <br> <a href="/laptops/{{$laptops->id}}"> <img  class="img-responsive" height="200" width="300" src="/storage/cover_images/{{$laptops->cover_image}}"></a></td>
                                <td><a href="/laptops/{{$laptops->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                <td>
                                        {!!Form::open(['action' => ['LaptopController@destroy', $laptops->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @endif 
                  
                        
                        @if(count($phone) >0)
                        <table class="table table-striped">
                        @foreach($phone as $phones)
                        <tr>
                                <td>{{$phones->title}} <br> <br> <a href="/phones/{{$phones->id}}"><img class="img-responsive" height="200" width="300" src="/storage/cover_images/{{$phones->cover_image}}"></a></td>
                                <td><a href="/phones/{{$phones->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                <td>
                                        {!!Form::open(['action' => ['PhoneController@destroy', $phones->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @endif 
                      

                              
                        @if(count($tablet) >0)
                        <table class="table table-striped">
                        @foreach($tablet as $tablets)
                        <tr>
                                <td>{{$tablets->title}} <br> <br> <a href="/tablets/{{$tablets->id}}"><img class="img-responsive" height="200" width="300" src="/storage/cover_images/{{$tablets->cover_image}}"></a></td>
                                <td><a href="/tablets/{{$tablets->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                <td>
                                        {!!Form::open(['action' => ['TabletController@destroy', $tablets->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @endif 
                      
                        @if(count($periferiaka) >0)
                        <table class="table table-striped">
                        @foreach($periferiaka as $periferiakas)
                        <tr>
                                <td>{{$periferiakas->title}} <br> <br> <a href="/periferiaka/{{$periferiakas->id}}"><img class="img-responsive" height="200" width="300" src="/storage/cover_images/{{$periferiakas->cover_image}}"></a></td>
                                <td><a href="/periferiaka/{{$periferiakas->id}}/edit" class="btn btn-default">Επεξεργασία</a></td>
                                <td>
                                        {!!Form::open(['action' => ['PeriferiakaController@destroy', $periferiakas->id],'method' => 'POST','onsubmit' => 'return confirmDelete()', 'class' =>'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Διαγραφή', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}   
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @endif                  
                    </div> 
            </div>    
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Κάντε κλικ για να επιστρέψετε στην κορυφή της σελίδας" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a><br><br><br>
@endsection

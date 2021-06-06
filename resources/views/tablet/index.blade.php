@extends('layouts.app')
@section('content')

<div class="container">
   
        <div class="search">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                      <div class="form-section">
                        <div class="row">
                          
                                    <form action="/search" method="POST"  role="search" class="navbar-search">
                                        {{csrf_field() }} 

                              <div class="col-md-4">                
                                    <div class="form-group"> 
                                        <div class="serchtile">Κατασκευαστής :</div> 
                                        <label class="sr-only" for="tablet_fact"></label>
                                        <input type="text" class="form-control" placeholder="" name="tablet_fact" >
                                    </div>
                              </div>
    
                              <div class="col-md-2">                    
                                    <div class="form-group">
                                            <div class="serchtile">Επεξεργαστής :</div>  
                                            <label class="sr-only" for="tablet_cpu"></label>
                                            <input type="text" class="form-control" placeholder="" name="tablet_cpu" >
                                        </div>
                            
                                    </div>
                                  
                              <div class="col-md-2">                       
                                <div class="form-group"> 
                                    <div class="serchtile">Μνήμη RAM :</div> 
                                    <label class="sr-only" for="tablet_ram"></label>
                                    <div class="input-group">
                                    <input type="number" min="1" class="form-control" placeholder="" name="tablet_ram" >
                                    <span class="input-group-addon">GB</span>
                                    </div>
                                </div>
                              </div>

                              <div class="col-md-2">
                                    <div class="form-group">
                                            <div class="serchtile">Χρώμα :</div>  
                                            <label class="sr-only" for="tablet_color"></label>
                                            <select  name="tablet_color" class="form-control">
                                            <option value=""></option>
                                            <option value="Μαύρο" style="background-color: Black;color: #FFFFFF;font-size:17px;">Μαύρο</option>
                                            <option value="Γκρί" style="background-color: Gray;color: #FFFFFF;font-size:17px;">Γκρί</option>
                                            <option value="Άσπρο" style="background-color: White;color:black;font-size:17px;">Άσπρο</option>  
                                            <option value="Μπλέ" style="background-color: Blue;color: #FFFFFF;font-size:17px;">Μπλέ</option>
                                            <option value="Μώβ" style="background-color: Purple;color: #FFFFFF;font-size:17px;">Μώβ</option>
                                            <option value="Ρόζ" style="background-color: DeepPink;color: #FFFFFF;font-size:17px;">Ρόζ</option>
                                            <option value="Πράσινο" style="background-color: Green;color: #FFFFFF;font-size:17px;">Πράσινο</option>
                                            <option value="Κίτρινο" style="background-color: Yellow;color: black;font-size:17px;">Κίτρινο</option>
                                            <option value="Πορτοκαλί" style="background-color: Orange;color: #FFFFFF;font-size:17px;">Πορτοκαλί</option>
                                            <option value="Κόκκινο" style="background-color: Red;color: #FFFFFF;font-size:17px;">Κόκκινο</option>
                                            <option value="Καφέ" style="background-color: Brown;color: #FFFFFF;font-size:17px;">Καφέ</option>
                                            <option value="Γαλάζιο" style="background-color: #00bfff;color: #FFFFFF;font-size:17px;">Γαλάζιο</option>
                                            </select>
                                          </div>
                        
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group"> 
                                        <div class="serchtile">Τιμή :</div>
                                        <label class="sr-only" for="tablet_price"></label>     
                                    <select required name="tablet_price" class="form-control"  >
                                    <option value=""></option>   
                                    <option value="100"> έως 100&euro; </option>
                                    <option value="200"> έως 200&euro; </option>
                                    <option value="300"> έως 300&euro; </option>
                                    <option value="400"> έως 400&euro; </option>
                                    <option value="500"> έως 500&euro; </option>
                                    <option value="600"> έως 600&euro; </option>
                                    <option value="700"> έως 700&euro; </option>
                                    <option value="800"> έως 800&euro; </option>
                                    <option value="900"> έως 900&euro; </option>
                                    <option value="1000"> έως 1000&euro; </option>
                                    </select>
                                          </div>
                                      </div>
    
                     
                              <div class="col-md-2">
                                  <br>
                                  <button type="submit" class="btn btn-default btn-primary">Αναζήτηση</button>
                              </div>
    
    
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
   


      @if(count($tablet) > 0)
      <center><h1>Tablets</h1></center> 
        @foreach($tablet as $tablets)
        <div class="well">
                 
            <div class="row">
                <div class="col-md-4">

                   <br> <center> <a href="tablets/{{$tablets->id}}"><img  class="img-responsive" width="350" height="180" src="/storage/cover_images/{{$tablets->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a> <center>
                </div><br>
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr class="white">
                        <td class="bold">Κατασκευαστής:</td> <td>{{$tablets->fact}}</td>
                        </tr>
                        <tr>
                        <td class="bold">Επεξεργαστής:</td> <td>{{$tablets->cpu}}</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Μνήμη RAM:</td> <td>{{$tablets->ram}} GB</td>
                        </tr>
                        <tr>
                            <td class="bold">Αποθηκευτικός χώρος:</td> <td>{{$tablets->ram}} GB</td>
                        </tr>
                        <tr class="white">
                        <td class="bold">Κατάσταση:</td> <td>{{$tablets->status}}</td>
                        </tr>
                        <tr> 
                        <td class="bold">Τιμή:</td> <td class="timi">{{$tablets->price}} &euro;</td>
                        </tr>
                    </table>
                        <center><a href="/tablets/{{$tablets->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
                        <hr>
                        <center><p class="bold">Δημοσιεύτηκε στις {{$tablets->created_at}} από {{$tablets->user->name}} {{$tablets->user->lastname}}.</p></center>
                </div>
            </div>
        </div>
    
        @endforeach
<div class="text-center">
    <div class="pagination">
        {{$tablet->links()}}
        
    </div>
</div>
    @else
    <br>
        <center><p style="font-size:25px;"> Δεν βρέθηκαν Tablet. </p></center>
    <br>
    @endif


@endsection


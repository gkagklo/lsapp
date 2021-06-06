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
                                            <div class="serchtile">Κατηγορία :</div>
                                        <label class="sr-only" for="periferiaka_category"></label>     
                                    <select  name="periferiaka_category" class="form-control"  >
                                    <option value=""></option>
                                    <option value="Πληκτρολόγια"> Πληκτρολόγια </option>
                                    <option value="Ποντίκια"> Ποντίκια </option>
                                    <option value="Ακουστικά"> Ακουστικά </option>
                                    <option value="Ηχεία"> Ηχεία </option>
                                    <option value="Κάμερες"> Κάμερες </option>  
                                    </select>
                                  </div>  
                          </div>

                          <div class="col-md-2">
                                <div class="form-group"> 
                                <div class="serchtile">Κατασκευαστής :</div>
                                <label class="sr-only" for="periferiaka_fact"></label> 
                                <input type="text" class="form-control" placeholder="" name="periferiaka_fact" >
                                </div>
                                </div>
                              
                          <div class="col-md-2">
                                
                                        <div class="form-group"> 
                                                <div class="serchtile">Χρώμα :</div>
                                                <label class="sr-only" for="periferiaka_color"></label> 
                                                <select  name="periferiaka_color" class="form-control">
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
                                <label class="sr-only" for="periferiaka_price"></label>     
                            <select required name="periferiaka_price" class="form-control">
                            <option value=""></option>   
                            <option value="50"> έως 50&euro; </option>
                            <option value="100"> έως 100&euro; </option>
                            <option value="150"> έως 150&euro; </option>
                            <option value="200"> έως 200&euro; </option>
                            <option value="250"> έως 250&euro; </option>
                            <option value="300"> έως 300&euro; </option>
                            <option value="350"> έως 350&euro; </option>
                            <option value="400"> έως 400&euro; </option>
                            <option value="450"> έως 450&euro; </option>
                            <option value="500"> έως 500&euro; </option>
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



    
@if(count($periferiaka) > 0)
<center><h1> Περιφεριακά </h1></center> 
  @foreach($periferiaka as $periferiakas)
  <div class="well">
           
      <div class="row">
          <div class="col-md-4">

             <br> <center> <a href="periferiaka/{{$periferiakas->id}}"><img class="img-responsive"  width="350" height="180" src="/storage/cover_images/{{$periferiakas->cover_image}}" alt="Περισσότερες πληροφορίες..." title="Περισσότερες πληροφορίες..."></a> </center>
          </div> <br>
          <div class="col-md-6">
              <table class="table table-bordered">
                  <tr class="white">
                  <td class="bold">Κατηγορία:</td> <td>{{$periferiakas->category}}</td>
                  </tr>
                  <tr>
                      <td class="bold">Κατασκευαστής:</td> <td>{{$periferiakas->fact}}</td>
                  </tr>
                  @if ($periferiakas->category=="Ηχεία")
                  <tr class="white">
                        <td class="bold">Ισχύς:</td> <td>{{$periferiakas->power}} W</td>
                        </tr>
                @endif
                  @if ($periferiakas->category=="Ακουστικά")
                  <tr class="white">
                        <td class="bold">Ευαισθησία Ακουστικών:</td> <td>{{$periferiakas->volume}} dB</td>
                </tr>
                @endif
                  @if ($periferiakas->category=="Ποντίκια")
                  <tr class="white">
                        <td class="bold">Ανάλυση Αισθητήρα:</td> <td>{{$periferiakas->dpi}} dpi</td>
                  </tr>
                  @endif
                  @if ($periferiakas->category=="Πληκτρολόγια")
                <tr class="white">
                    <td class="bold">Μηχανικό Πληκτρολόγιο:</td> <td>{{$periferiakas->mech}} </td>
                </tr>
                @endif
                  <tr>
                  <td class="bold">Συνδεσιμότητα:</td> <td>{{$periferiakas->connectivity}}</td>
                  </tr>
                  <tr class="white">
                  <td class="bold">Χρώμα:</td> <td>{{$periferiakas->color}}</td>
                  </tr>
                  <tr >
                        <td class="bold">Κατάσταση :</td> <td>{{$periferiakas->status}}</td>
                </tr>
                  <tr class="white">
                  <td class="bold">Τιμή:</td> <td class="timi">{{$periferiakas->price}} &euro;</td>
                  </tr>
              </table>
              <center><a href="/periferiaka/{{$periferiakas->id}}" class="btn btn-primary">Διαβάστε περισσότερα..</a></center>
              <hr>
              <center><p class="bold">Δημοσιεύτηκε στις {{$periferiakas->created_at}} από {{$periferiakas->user->name}} {{$periferiakas->user->lastname}}.</p></center>
          </div>
      </div>
  </div>

  @endforeach
<div class="text-center">
        <div class="pagination">
  {{$periferiaka->links()}}  
</div>
</div>

@else
<br>
<center><p style="font-size:25px;"> Δεν βρέθηκαν περιφεριακά. </p></center>
<br>
@endif


@endsection


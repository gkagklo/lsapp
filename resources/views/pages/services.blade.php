@extends('layouts.app')
@section('content')
<div class="container">
  <div class="well">
        <div class="row">
            <center>
            <h2>Υπηρεσίες</h2>
            <h4> Η σελίδα <strong style="color:green;">  Procomputerades.gr </strong> διαθέτει: </h4>  
            <br>  
            <ul class="menu1">
                <li><a  href="/posts"> Desktop</a></li>
                <li><a  href="/laptops">Laptop</a></li>
                <li><a  href="/phones">Smartphones</a></li> 
                <li><a  href="/tablets">Tablet</a></li>
                <li><a  href="/periferiaka"> Περιφερειάκα</a></li>
                </ul>
              </center>
        </div>
      
  <div class="row">
    <div class="col-sm-8">
      <h2>Πληροφορίες</h2>    
      <p style="font-size:16px;">Καλώς ήρθατε στην ιστοσελίδα μας, εδώ μπορείτε να πουλήσετε ή να αγοράσετε  ηλεκτρονικές συσκευές εύκολα και γρήγορα.Κάνοντας εγγραφή
       μπορείτε να καταχωρήσετε προϊόντα αλλά καθώς και να αναζητήσετε  προϊόντα τις αρέσκειας σας.H σελίδα δημιουργήθηκε με σκοπό την γρήγορη
       και καλύτερη εξυπηρέτηση σας. Οποιαδήποτε διαδικτυακή απάτη η σελίδα δεν φέρνει καμία ευθύνη.</p>
      <a href="{{ url('register')}}"><button class="btn btn-default btn-lg">Εγγραφή</button></a><br><br>
    </div>
  </div>
<br>

<div class="row"> 
   <center><h2>Διαχειριστές</h2></center><br>
    <div class="col-md-4">
      <div class="thumbnail"> 
          <img class="img-circle img-responsive" src="/images/georgegaglo.jpg" alt="ΓΚΑΚΛΟΙΔΗΣ ΓΕΩΡΓΙΟΣ" title="ΓΚΑΚΛΟΙΔΗΣ ΓΕΩΡΓΙΟΣ" width="300px" /> 
          <center><div class="caption">
            <p style="font-size:20px"><b>ΓΚΑΓΚΛΟΙΔΗΣ ΓΕΩΡΓΙΟΣ</b></p>  
          </div>
        </center>
      </div>
    </div>
    

    <div class="col-md-4">
        <div class="thumbnail">
            <br> <br> <br> <br>
            <img class="img-circle img-responsive" src="/images/papasgeorge1.jpg" alt="ΠΑΠΑΣ ΓΕΩΡΓΙΟΣ" title="ΠΑΠΑΣ ΓΕΩΡΓΙΟΣ" width="300px" />
            <center><div class="caption">
             <p style="font-size:20px"><b>ΠΑΠΑΣ ΓΕΩΡΓΙΟΣ</b></p>
            </div></center>
        </div>   
    </div>
</div>



</div>
</div>

@endsection
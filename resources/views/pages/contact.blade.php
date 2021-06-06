@extends('layouts.app')
@section('content')
<div class="container">    
<div class="container-fluid" style="background-color:#f6f6f6;padding:60px;">
          
    <h2 style="color:#365c81;" class="text-center"><i class="fa fa-envelope"></i> Επικοινωνία</h2>
      
        <div class="row">
            <div class="col-md-5 col-xs-12">
                <p style="font-size:18px;">Συμπλήρωσε την παρακάτω φόρμα και θα επικοινωνήσουμε το συντομότερο μαζί σου..</p>
                <p style="font-size:15px; color:red; font-weight: bold;"><span class="glyphicon glyphicon-map-marker"></span> TEI LARISAS GR</p>
                <p style="font-size:15px; color:red; font-weight: bold;" > <span class="glyphicon glyphicon-envelope"></span> procomputerades@gmail.com </p> 
                <br>  
            </div>
                                 
<div class="col-md-7 col-xs-12">
    <div class="row">
          {!! Form::open(['url' => 'contact','method' => 'POST']) !!}
          {{ csrf_field() }}

          <div class="col-sm-6 col-md-6 form-group">              
          {!! Form::label('email', 'Το email σας:') !!}
          <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>  
          {!! Form::text('email',null,['class' => 'form-control']) !!}
          </div>       
          </div>

        <div class="col-sm-6 col-md-6 form-group">
          {!! Form::label('subject', 'Θέμα:') !!}
          {{ Form::select('subject', ['Γενική εξυπηρέτηση πελατών' => 'Γενική εξυπηρέτηση πελατών' , 'Προτάσεις' => 'Προτάσεις' , 'Υποστήριξη προιόντος' => 'Υποστήριξη προιόντος', 'Άλλο' => 'Άλλο'],  null,['class' => 'form-control','placeholder' => '','onchange'=>'showfield(this.options[this.selectedIndex].value)'])}}
        </div>
        <div id="div1"></div>

        <div class="col-sm-12 form-group">
        {!! Form::label('msg', 'Μήνυμα:') !!}
        {!! Form::textarea('msg',null,['class' => 'form-control']) !!}
        </div>
        

        <div class="col-sm-12 form-group">
    {{Form::submit('Αποστολή', ['class'=>'btn btn-primary btn-lg btn-block'])}}
    <br>
    {!! Form::close() !!}
</div>
</div>
</div>
</div>

<div id="map"></div>
</div>
</div>
@endsection

<script type="text/javascript">
    function showfield(name){
      if(name=='Άλλο')document.getElementById('div1').innerHTML='<div class="col-sm-6 col-md-6 form-group"> {!! Form::label('subject', 'Συμπληρώστε το θέμα σας:') !!}   {!! Form::text('subject',null,['class' => 'form-control']) !!}</div>';
      else document.getElementById('div1').innerHTML='';
    }
</script>
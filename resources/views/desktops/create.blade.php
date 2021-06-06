@extends('layouts.app')
@section('content')
<div class="main">
<div class="container">
  <div class="well">
      <center><h2>Καταχώρηση αγγελίας</h2></center> 
  <br>

      
  <p class="paragraph">Στοιχεία αγγελίας.</p>
  <center><p style="font-size:18px"> Τα πεδια με (<span class="kok">  * </span>) είναι υπωχρεωτικά. </p></center><br>
  {!! Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data' ]) !!}
  <div class="form-row">
      <div class="form-group col-md-6">
        {{Form::label('fact', 'Κατασκευαστής : ')}} <span class="kok">*</span>
        {{Form::text('fact','',['class' => 'form-control', 'placeholder' => ''])}}
      </div>
   
        <div class="form-group col-md-6">
          {{Form::label('cpu', 'Επεξεργαστής :')}} <span class="kok">*</span>
          {{Form::text('cpu','',['class' => 'form-control', 'placeholder' => ''])}}
        </div>
  </div>
   
  <div class="form-row">
      <div class="form-group col-md-6">
        {{Form::label('mboard', 'Μητρική κάρτα :')}} <span class="kok">*</span>
        {{Form::text('mboard','',['class' => 'form-control', 'placeholder' => ''])}}
      </div>
    
        <div class="form-group col-md-6">
            {{Form::label('ram', 'Μνήμη Ram :')}} <span class="kok">*</span>
          <div class="input-group">
          {{Form::number('ram','',['class' => 'form-control','min'=>1])}} 
          <span class="input-group-addon">GB</span>
          </div>
         </div>
  </div>
        
 
  <div class="form-row">
        <div class="form-group col-md-6">
          {{Form::label('gpu', 'Κάρτα γραφικών :')}} <span class="kok">*</span>
          {{Form::text('gpu','',['class' => 'form-control', 'placeholder' => ''])}}
        </div>

      <div class="form-group col-md-6">
        {{Form::label('disc', 'Αποθηκευτικός χώρος :')}} <span class="kok">*</span>
        <div class="input-group">
        {{Form::number('disc','',['class' => 'form-control', 'min'=>1])}}
        <span class="input-group-addon">GB</span>
        </div>
      </div>
  </div>

   
  <div class="form-row">
      <div class="form-group col-md-6"> 
          {{Form::label('system', 'Λειτουργικό σύστημα :')}}  <span class="kok">*</span>
          {{ Form::select('system', ['Windows 10' => 'Windows 10' , 'Windows 8' => 'Windows 8' , 'Windows 7' => 'Windows 7','Windows XP' => 'Windows XP','Linux' => 'Linux'],  null,['class' => 'form-control','placeholder' => ''])}}
          </div>
          
      <div class="form-group col-md-6">   
        {{Form::label('price', 'Τιμή :')}} <span class="kok">*</span>
        <div class="input-group">
        {{Form::number('price', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
        <span class="input-group-addon">&euro;</span>
        </div>
      </div>
    </div>
    
    <div class="form-group"> 
     
      <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}} <span class="kok">*</span>
        <br>
        Άριστη {{Form::radio('status', 'Άριστη')}}
        Καλή {{Form::radio('status', 'Καλή')}}
        Μέτρια {{Form::radio('status', 'Μέτρια')}}
        Κακή {{Form::radio('status', 'Κακή')}}</p>
      </div>
 
      
  <br><br>
  <div class="form-group">  
    {{Form::label('body', 'Περιγραφή :')}}
    {{Form::textarea('body', '',['class'=>'form-control', 'placeholder' => 'Περιγραφή..'])}}
  </div>
  <br><center><h3>Προσθήκη εικόνων</h3></center><br>
<div class="row">
  <div class="col-sm-4">
    <div class="box">
      <div class="js--image-preview"></div>
      <div class="upload-options">
        <label>
          <input type="file" class="image-upload" accept="image/*" name="cover_image" />
        </label>
      </div>
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="box">
      <div class="js--image-preview"></div>
      <div class="upload-options">
        <label>
          <input type="file" class="image-upload" accept="image/*" name="cover_image1"  />
        </label>
      </div>
    </div>
  </div>
  
  <div class="col-sm-4">
    <div class="box">
      <div class="js--image-preview"></div>
      <div class="upload-options">
        <label>
          <input type="file" class="image-upload" accept="image/*" name="cover_image2" />
        </label>
      </div>
    </div>
  </div>
</div>

<br>
  {{Form::submit('Αποστολή', [ 'class'=>'btn btn-primary'])}}   
  {!! Form::close() !!}

    

<br><br>
</div>
</div>
</div>
</section>
@endsection


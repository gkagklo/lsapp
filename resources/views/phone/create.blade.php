@extends('layouts.app')
@section('content')
<div class="main">
<div class="container">
<div class="well">
    <center><h2>Καταχώρηση αγγελίας</h2></center> 
 <br>
 <p class="paragraph">Στοιχεία αγγελίας.</p>
 <center><p style="font-size:18px"> Τα πεδια με (<span class="kok">  * </span>) είναι υπωχρεωτικά. </p></center><br>
  {!! Form::open(['action' => 'PhoneController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  

   <div class="form-row">
    
    <div class="form-group col-md-6">  
      {{Form::label('fact', 'Κατασκευαστής :')}} <span class="kok">*</span>
      {{Form::text('fact','',['class' => 'form-control', 'placeholder' => ''])}}
    </div>

    <div class="form-group col-md-6"> 
        {{Form::label('system', 'Λειτουργικό σύστημα :')}} <span class="kok">*</span>
        {{ Form::select('system', ['Android' => 'Android' , 'Apple iOS' => 'Apple iOS' , 'Windows Phone' => 'Windows Phone'],  null,['class' => 'form-control','placeholder' => ''])}}
        </div>
  </div>

    <div class="form-row">
      <div class="form-group col-md-6"> 
        {{Form::label('cpu', 'Επεξεργαστής :')}} <span class="kok">*</span>
        {{Form::text('cpu','',['class' => 'form-control', 'placeholder' => ''])}}
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
      {{Form::label('disc', 'Αποθηκευτικός χώρος :')}} <span class="kok">*</span>
      <div class="input-group">
      {{Form::number('disc','',['class' => 'form-control', 'min'=>1])}}
      <span class="input-group-addon">GB</span>
      </div>
    </div>

    <div class="form-group col-md-6"> 
        {{Form::label('screen', 'Οθόνη :')}} 
        <div class="input-group">
        {{Form::number('screen','',['class' => 'form-control', 'placeholder' => '', 'min'=>1])}}
        <span class="input-group-addon">ίντσες</span>
        </div>
      </div>
    </div>


    <div class="form-row"> 
     

        <div class="form-group col-md-6"> 
          {{Form::label('camera', 'Εμπρόσθια κάμερα :')}} 
          <div class="input-group">
          {{Form::number('camera','',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
          <span class="input-group-addon">MP</span>
          </div>
      </div>

      <div class="form-group col-md-6"> 
          {{Form::label('camera2', 'Οπίσθια κάμερα :')}} 
          <div class="input-group">
          {{Form::number('camera2','',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
          <span class="input-group-addon">MP</span>
          </div>
      </div>
     
      
    </div>
    
      <div class="form-row">
         
            <div class="form-group col-md-6"> 
                    {{Form::label('battery', 'Μπαταρία :')}} 
                    <div class="input-group">
                    {{Form::number('battery','',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                    <span class="input-group-addon">mAh</span>
                  </div>
                  </div>
                 
                  <div class="form-group col-md-4"> 
                      <label for="color">Χρώμα</label>
                      <select  name="color" class="form-control">
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


          <div class="form-group col-md-2">   
              {{Form::label('price', 'Τιμή :')}} <span class="kok">*</span>
              <div class="input-group">
              {{Form::number('price', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
              <span class="input-group-addon">&euro;</span>
              </div>
            </div>
    </div>
    

     

      <div class="form-group"> 
          <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}}  <span class="kok">*</span>
        <br>
        Άριστη {{Form::radio('status', 'Άριστη')}}
        Καλή {{Form::radio('status', 'Καλή')}}
        Μέτρια {{Form::radio('status', 'Μέτρια')}}
        Κακή {{Form::radio('status', 'Κακή')}}</p>
       </div><br>
    
  
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


  {{Form::submit('Αποστολή', ['class'=>'btn btn-primary'])}}
      
  {!! Form::close() !!}
  
</div>
</div>
</div>
  
</section>
@endsection
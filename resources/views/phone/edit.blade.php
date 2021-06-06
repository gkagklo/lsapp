@extends('layouts.app')
@section('content')
<div class="container">
<div class="main">
<div class="well">

  <center><h2>Επεξεργασία αγγελίας</h2></center><br>
  <p class="paragraph">Στοιχεία αγγελίας.</p>
  {!! Form::open(['action' => ['PhoneController@update', $phone->id],   'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  
  

  <div class="form-row">  
      <div class="form-group col-md-6">  
        {{Form::label('fact', 'Κατασκευαστής :')}}
        {{Form::text('fact', $phone->fact,['class' => 'form-control'])}}
      </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">
          {{Form::label('system', 'Λειτουργικό σύστημα :')}}
          {{ Form::select('system',['Android' => 'Android' , 'Apple iOS' => 'Apple iOS' , 'Windows Phone' => 'Windows Phone'],  $phone->system ,['class' => 'form-control','placeholder' => ''] )}}
      </div>

      <div class="form-group col-md-6"> 
          {{Form::label('cpu', 'Επεξεργαστής :')}}
          {{Form::text('cpu', $phone->cpu,['class' => 'form-control'] )}}
      </div>
  </div>


  <div class="form-row">
      <div class="form-group col-md-6">  
          {{Form::label('ram', 'Μνήμη Ram :')}}
          <div class="input-group">
          {{Form::number('ram', $phone->ram ,['class' => 'form-control','placeholder' => ' gb','min'=>1])}}
          <span class="input-group-addon">GB</span>
        </div>
        </div>

        <div class="form-group col-md-6">  
            {{Form::label('disc', 'Αποθηκευτικός χώρος :')}}
            <div class="input-group">
            {{Form::number('disc', $phone->disc,['class' => 'form-control','min'=>1])}}
            <span class="input-group-addon">GB</span>
            </div>
          </div>
  </div>

          
  <div class="form-row">
      <div class="form-group col-md-6"> 
            {{Form::label('camera', 'Εμπρόσθια κάμερα :')}}
            <div class="input-group">
            {{Form::number('camera', $phone->camera,['class' => 'form-control','min'=>1])}}
            <span class="input-group-addon">MP</span>
            </div>
          </div>
          <div class="form-group col-md-6"> 
                {{Form::label('camera2', 'Οπίσθια κάμερα :')}}
                <div class="input-group">
                {{Form::number('camera2', $phone->camera2,['class' => 'form-control','min'=>1])}}
                <span class="input-group-addon">MP</span>
                </div>
              </div>
          
          <div class="form-group col-md-6"> 
              {{Form::label('screen', 'Οθόνη :')}}
              <div class="input-group">
              {{Form::number('screen',$phone->screen,['class' => 'form-control','min'=>1])}}
              <span class="input-group-addon">ίντσες</span>
              </div>
            </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">  
            {{Form::label('battery', 'Μπαταρία :')}}
            <div class="input-group">
            {{Form::number('battery',$phone->battery,['class' => 'form-control','min'=>1])}}
            <span class="input-group-addon">mAh</span>
            </div>
          </div>

          
          <div class="form-group col-md-4"> 
                <label for="color">Χρώμα</label>
            <select name="color" id="color" class="form-control" >
                <option value=""></option>
               <option value="Μαύρο"  {{ old('color', $phone->color) == "Μαύρο" ? 'selected' : ''  }} style="background-color: Black;color: #FFFFFF;font-size:17px;">Μαύρο</option>
                <option value="Γκρί" {{ old('color', $phone->color) == "Γκρί" ? 'selected' : '' }} style="background-color: Gray;color: #FFFFFF;font-size:17px;">Γκρί</option>
                <option value="Άσπρο" {{ old('color', $phone->color) == "Άσπρο" ? 'selected' : '' }} style="background-color: White;color:black;font-size:17px;">Άσπρο</option>  
                <option value="Μπλέ" {{ old('color', $phone->color) == "Μπλέ" ? 'selected' : '' }} style="background-color: Blue;color: #FFFFFF;font-size:17px;">Μπλέ</option>
                <option value="Μώβ" {{ old('color', $phone->color) == "Μώβ" ? 'selected' : '' }} style="background-color: Purple;color: #FFFFFF;font-size:17px;">Μώβ</option>
                <option value="Ρόζ" {{ old('color', $phone->color) == "Ρόζ" ? 'selected' : '' }} style="background-color: DeepPink;color: #FFFFFF;font-size:17px;">Ρόζ</option>
                <option value="Πράσινο" {{ old('color', $phone->color) == "Πράσινο" ? 'selected' : '' }} style="background-color: Green;color: #FFFFFF;font-size:17px;">Πράσινο</option>
                <option value="Κίτρινο" {{ old('color', $phone->color) == "Κίτρινο" ? 'selected' : '' }} style="background-color: Yellow;color: black;font-size:17px;">Κίτρινο</option>
                <option value="Πορτοκαλί" {{ old('color', $phone->color) == "Πορτοκαλί" ? 'selected' : '' }} style="background-color: Orange;color: #FFFFFF;font-size:17px;">Πορτοκαλί</option>
                <option value="Κόκκινο" {{ old('color', $phone->color) == "Κόκκινο" ? 'selected' : '' }} style="background-color: Red;color: #FFFFFF;font-size:17px;">Κόκκινο</option>
                <option value="Καφέ" {{ old('color', $phone->color) == "Καφέ" ? 'selected' : '' }} style="background-color: Brown;color: #FFFFFF;font-size:17px;">Καφέ</option>
                <option value="Γαλάζιο" {{ old('color', $phone->color) == "Γαλάζιο" ? 'selected' : '' }} style="background-color: #00bfff;color: #FFFFFF;font-size:17px;">Γαλάζιο</option>
                </select>
              </div>
              
   
          <div class="form-group col-md-2">  
              {{Form::label('price', 'Τιμή :')}}
              <div class="input-group">
              {{Form::number('price', $phone->price ,['class' => 'form-control', 'placeholder' => 'Price','min'=>1])}}
              <span class="input-group-addon">&euro;</span>
              </div>
            </div>
  </div>

  <div class="form-group"> 
    <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}} 
  Άριστη {{Form::radio('status', 'Άριστη',old('status',$phone->status) =='Άριστη')}}
  Καλή {{Form::radio('status', 'Καλή',old('status',$phone->status) =='Καλή')}}
  Μέτρια {{Form::radio('status', 'Μέτρια',old('status',$phone->status) =='Μέτρια')}}
  Κακή {{Form::radio('status', 'Κακή',old('status',$phone->status) =='Κακή')}}</p>
 </div><br><br>
      
    
      
  <div class="form-group">  
  {{Form::label('body', 'Περιγραφή :')}}
  {{Form::textarea('body', $phone->body ,['class'=>'form-control', 'placeholder' => 'Body Text'])}}
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



  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Ανανέωση', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}

</div> 
</div>  
</div> 
</section>
@endsection
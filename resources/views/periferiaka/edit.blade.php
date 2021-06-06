@extends('layouts.app')
@section('content')
<div class="container">
<div class="main">
<div class="well">

  <center><h2>Επεξεργασία αγγελίας</h2></center><br>
  <p class="paragraph">Στοιχεία αγγελίας.</p>
  {!! Form::open(['action' => ['PeriferiakaController@update', $periferiaka->id],    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  
<div class="form-row" >
    <div class="form-group col-md-6"> 
        {{Form::label('category', 'Κατηγορία : ')}}
        {{ Form::select('category', ['Πληκτρολόγια' => 'Πληκτρολόγια' , 'Ποντίκια' => 'Ποντίκια', 'Ακουστικά' =>'Ακουστικά','Ηχεία' =>'Ηχεία' ,'Κάμερες' =>'Κάμερες'  ],$periferiaka->category,['class' => 'form-control ','disabled'=>true] )}}
    </div>

  <div class="form-group col-md-6">  
    {{Form::label('fact', 'Κατασκευαστής :')}}
    {{Form::text('fact', $periferiaka->fact,['class' => 'form-control'])}}
  </div>
</div>


<div class="form-row">
    @if ($periferiaka->category=="Πληκτρολόγια")
    <div class="form-group col-md-6">
        {{Form::label('usage', 'Χρήση :')}}
        {{ Form::select('usage',['Για γραφείο' => 'Για γραφείο', 'Για παιχνίδια' => 'Για παιχνίδια'],  $periferiaka->usage ,['class' => 'form-control','placeholder' => ''] )}}
    </div>

    <div class="form-group col-md-6">
        {{Form::label('mech', 'Μηχανικό Πληκτρολόγιο :')}}
        {{ Form::select('mech',['Ναι' => 'Ναι', 'Όχι' => 'Όχι'],  $periferiaka->mech ,['class' => 'form-control','placeholder' => ''] )}}
    </div>

    <div class="form-group col-md-6">
        {{Form::label('rgb', 'Φωτιζόμενα Πλήκτρα :')}}
        {{ Form::select('rgb',['Ναι' => 'Ναι', 'Όχι' => 'Όχι'],  $periferiaka->rgb ,['class' => 'form-control','placeholder' => ''] )}}
    </div>
@endif

@if ($periferiaka->category=="Ποντίκια") 
    <div class="form-group col-md-6">
        {{Form::label('dpi', 'Ανάλυση Αισθητήρα :')}}
        <div class="input-group">
        {{ Form::select('dpi',['Έως και 1600' => 'Έως και 1600' , '1600-3200' => '1600-3200','3200-5600' => '3200-5600' ,'5600 και πάνω' => '5600 και πάνω' ],  $periferiaka->dpi ,['class' => 'form-control','placeholder' => ''] )}}
        <span class="input-group-addon">dpi</span>
        </div>
    </div>

    <div class="form-group col-md-6">  
        {{Form::label('pliktra', 'Πλήκτρα :')}}
        {{Form::number('pliktra', $periferiaka->pliktra ,['class' => 'form-control', 'placeholder' => '','min'=>1])}}
      </div>
@endif
    


@if ($periferiaka->category=="Ακουστικά")
      <div class="form-group col-md-6">  
          {{Form::label('volume', 'Ευαισθησία Ακουστικών :')}}
          <div class="input-group">
          {{Form::number('volume', $periferiaka->volume ,['class' => 'form-control', 'placeholder' => '','min'=>1])}}
          <span class="input-group-addon">dB</span>
        </div>
        </div>

        <div class="form-group col-md-6">  
            {{Form::label('micro', 'Ευαισθησία Μικροφώνου :')}}
            <div class="input-group">
            {{Form::number('micro', $periferiaka->micro ,['class' => 'form-control', 'placeholder' => '','min'=>1])}}
            <span class="input-group-addon">dB</span>
            </div>
          </div>
@endif

@if ($periferiaka->category=="Ηχεία")
      <div class="form-group col-md-6">  
          {{Form::label('power', 'Ισχύς :')}}
          <div class="input-group">
          {{Form::number('power', $periferiaka->power ,['class' => 'form-control', 'placeholder' => '','min'=>1])}}
          <span class="input-group-addon">W</span>
        </div>
        </div>

        <div class="form-group col-md-6">
                {{Form::label('channels', 'Κανάλια :')}}
                {{ Form::select('channels',['2.0' => '2.0' , '2.1' => '2.1','5.1' => '5.1'  ],  $periferiaka->channels ,['class' => 'form-control','placeholder' => ''] )}}
                </div>
@endif


@if ($periferiaka->category=="Κάμερες")
<div class="form-group col-md-6"> 
    {{Form::label('resolution', 'Ανάλυση Βίντεο :')}}
    {{Form::text('resolution', $periferiaka->resolution,['class' => 'form-control'])}}
</div>

        <div class="form-group col-md-6">  
            {{Form::label('fps', 'Καρέ ανά δευτερόλεπτο :')}}
            <div class="input-group">
            {{Form::number('fps', $periferiaka->fps ,['class' => 'form-control', 'placeholder' => '','min'=>1])}}
            <span class="input-group-addon">fps</span>
            </div>
          </div>

          <div class="form-group col-md-6">
            {{Form::label('mic', 'Μικρόφωνο :')}}
            {{ Form::select('mic',['Ναι' => 'Ναι', 'Όχι' => 'Όχι'],  $periferiaka->mic ,['class' => 'form-control','placeholder' => ''] )}}
        </div>
@endif


</div>


<div class="form-row">
    <div class="form-group col-md-6">
        {{Form::label('connectivity', 'Συνδεσιμότητα :')}}
        {{ Form::select('connectivity',['Ενσύρματο' => 'Ενσύρματο', 'Ασύρματο' => 'Ασύρματο'],  $periferiaka->connectivity ,['class' => 'form-control','placeholder' => ''] )}}
    </div>
  
    <div class="form-group col-md-6"> 
            <label for="color">Χρώμα</label>
        <select name="color" id="color" class="form-control"  >
            <option value=""></option>
           <option value="Μαύρο"  {{ old('color', $periferiaka->color) == "Μαύρο" ? 'selected' : ''  }} style="background-color: Black;color: #FFFFFF;font-size:17px;">Μαύρο</option>
            <option value="Γκρί" {{ old('color', $periferiaka->color) == "Γκρί" ? 'selected' : '' }} style="background-color: Gray;color: #FFFFFF;font-size:17px;">Γκρί</option>
            <option value="Άσπρο" {{ old('color', $periferiaka->color) == "Άσπρο" ? 'selected' : '' }} style="background-color: White;color:black;font-size:17px;">Άσπρο</option>  
            <option value="Μπλέ" {{ old('color', $periferiaka->color) == "Μπλέ" ? 'selected' : '' }} style="background-color: Blue;color: #FFFFFF;font-size:17px;">Μπλέ</option>
            <option value="Μώβ" {{ old('color', $periferiaka->color) == "Μώβ" ? 'selected' : '' }} style="background-color: Purple;color: #FFFFFF;font-size:17px;">Μώβ</option>
            <option value="Ρόζ" {{ old('color', $periferiaka->color) == "Ρόζ" ? 'selected' : '' }} style="background-color: DeepPink;color: #FFFFFF;font-size:17px;">Ρόζ</option>
            <option value="Πράσινο" {{ old('color', $periferiaka->color) == "Πράσινο" ? 'selected' : '' }} style="background-color: Green;color: #FFFFFF;font-size:17px;">Πράσινο</option>
            <option value="Κίτρινο" {{ old('color', $periferiaka->color) == "Κίτρινο" ? 'selected' : '' }} style="background-color: Yellow;color: black;font-size:17px;">Κίτρινο</option>
            <option value="Πορτοκαλί" {{ old('color', $periferiaka->color) == "Πορτοκαλί" ? 'selected' : '' }} style="background-color: Orange;color: #FFFFFF;font-size:17px;">Πορτοκαλί</option>
            <option value="Κόκκινο" {{ old('color', $periferiaka->color) == "Κόκκινο" ? 'selected' : '' }} style="background-color: Red;color: #FFFFFF;font-size:17px;">Κόκκινο</option>
            <option value="Καφέ" {{ old('color', $periferiaka->color) == "Καφέ" ? 'selected' : '' }} style="background-color: Brown;color: #FFFFFF;font-size:17px;">Καφέ</option>
            <option value="Γαλάζιο" {{ old('color', $periferiaka->color) == "Γαλάζιο" ? 'selected' : '' }} style="background-color: #00bfff;color: #FFFFFF;font-size:17px;">Γαλάζιο</option>
            </select>
          </div>

          <div class="form-group col-md-6">  
                {{Form::label('price', 'Τιμή :')}}
                <div class="input-group">
                {{Form::number('price', $periferiaka->price ,['class' => 'form-control', 'placeholder' => 'Price','min'=>1])}}
                <span class="input-group-addon">&euro;</span>
                </div>
              </div>
</div>


       

<div class="form-group"> 
        <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}} 
      Άριστη {{Form::radio('status', 'Άριστη',old('status',$periferiaka->status) =='Άριστη')}}
      Καλή {{Form::radio('status', 'Καλή',old('status',$periferiaka->status) =='Καλή')}}
      Μέτρια {{Form::radio('status', 'Μέτρια',old('status',$periferiaka->status) =='Μέτρια')}}
      Κακή {{Form::radio('status', 'Κακή',old('status',$periferiaka->status) =='Κακή')}}</p>
     </div><br><br>
      
  <div class="form-group">  
  {{Form::label('body', 'Περιγραφή :')}}
  {{Form::textarea('body', $periferiaka->body ,['class'=>'form-control', 'placeholder' => 'Body Text'])}}
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
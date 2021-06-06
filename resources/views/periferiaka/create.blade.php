@extends('layouts.app')
@section('content')
<div class="container">
<div class="main"> 
<div class="well">
 <center> <h2>Καταχώρηση αγγελίας</h2></center>
  <br> 
  <p class="paragraph">Στοιχεία αγγελίας.</p>
  <center><p style="font-size:18px"> Τα πεδια με (<span class="kok">  * </span>) είναι υπωχρεωτικά. </p></center><br>
  {!! Form::open(['action' => 'PeriferiakaController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  

<div class="form-row">



  <div class="form-group col-md-6"> 
        <label for="category">Κατηγορία :</label>
        <select  name="category" class="form-control"  onchange="java_script_:show(this.options[this.selectedIndex].value)"  >
        <option value=""></option>
        <option value="Πληκτρολόγια"> Πληκτρολόγια </option>
        <option value="Ποντίκια"> Ποντίκια </option>
        <option value="Ακουστικά"> Ακουστικά </option>
        <option value="Ηχεία"> Ηχεία </option>
        <option value="Κάμερες"> Κάμερες </option>
      
        </select>
      </div>


 
  <div class="form-group col-md-6">  
      {{Form::label('fact', 'Κατασκευαστής :')}} <span class="kok">*</span>
      {{Form::text('fact','',['class' => 'form-control', 'placeholder' => ''])}}
  </div>
     
</div>

<div class="form-row">

    <div class="form-group col-md-6"> 
        {{Form::label('connectivity', 'Συνδεσιμότητα :')}} <span class="kok">*</span>
        {{ Form::select('connectivity', ['Ενσύρματο' => 'Ενσύρματο' , 'Ασύρματο' => 'Ασύρματο' ],  null,['class' => 'form-control','placeholder' => ''])}}
    </div>
 
    <div class="form-group col-md-6"> 
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

</div>
<div class="form-row">
<div id="hiddenusage" style="display:none" class="form-group col-md-6" > 
        {{Form::label('usage', 'Χρήση :')}} 
        {{ Form::select('usage', ['Για γραφείο' => 'Για γραφείο' , 'Για παιχνίδια' => 'Για παιχνίδια' ],  null,['class' => 'form-control','placeholder' => ''])}}
    </div>

    <div id="hiddenmech" style="display:none" class="form-group col-md-6" > 
            {{Form::label('mech', 'Μηχανικό Πληκτρολόγιο :')}} 
            {{ Form::select('mech', ['Ναι' => 'Ναι' , 'Όχι' => 'Όχι' ],  null,['class' => 'form-control','placeholder' => ''])}}
        </div>

        <div id="hiddenrgb" style="display:none" class="form-group col-md-6" > 
                {{Form::label('rgb', 'Φωτιζόμενα Πλήκτρα :')}} 
                {{ Form::select('rgb', ['Ναι' => 'Ναι' , 'Όχι' => 'Όχι' ],  null,['class' => 'form-control','placeholder' => ''])}}
            </div>

            <div id="hiddendpi" style="display:none" class="form-group col-md-6" > 
                    {{Form::label('dpi', 'Ανάλυση Αισθητήρα :')}} 
                    <div class="input-group">
                    {{ Form::select('dpi', ['Έως και 1600' => 'Έως και 1600' , '1600-3200' => '1600-3200','3200-5600' => '3200-5600' ,'5600 και πάνω' => '5600 και πάνω'  ],  null,['class' => 'form-control','placeholder' => ''])}}
                    <span class="input-group-addon">dpi</span>
                    </div>
                </div>

                <div id="hiddenpliktra" style="display:none" class="form-group col-md-6" > 
                        {{Form::label('pliktra', 'Πλήκτρα :')}} 
                        {{Form::number('pliktra', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                    </div>

                    <div id="hiddenvolume" style="display:none" class="form-group col-md-6" > 
                            {{Form::label('volume', 'Ευαισθησία Ακουστικών :')}} 
                            <div class="input-group">
                            {{Form::number('volume', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                            <span class="input-group-addon">dB</span>
                            </div>
                        </div>

                        <div id="hiddenmicro" style="display:none" class="form-group col-md-6" > 
                                {{Form::label('micro', 'Ευαισθησία Μικροφώνου :')}} 
                                <div class="input-group">
                                {{Form::number('micro', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                                <span class="input-group-addon">dB</span>
                                </div>
                            </div>

                            <div id="hiddenpower" style="display:none" class="form-group col-md-6" > 
                                {{Form::label('power', 'Ισχύς :')}} 
                                <div class="input-group">
                                {{Form::number('power', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                                <span class="input-group-addon">W</span>
                                </div>
                            </div>
    
                            <div id="hiddenchannels" style="display:none" class="form-group col-md-6" > 
                                {{Form::label('channels', 'Κανάλια :')}} 
                                {{ Form::select('channels', ['2.0' => '2.0' , '2.1' => '2.1', '5.1' => '5.1' ],  null,['class' => 'form-control','placeholder' => ''])}}
                            </div>
                            
                            <div id="hiddenresolution" style="display:none" class="form-group col-md-6">  
                                {{Form::label('resolution', 'Ανάλυση Βίντεο :')}} <span class="kok">*</span>
                                {{Form::text('resolution','',['class' => 'form-control', 'placeholder' => ''])}}
                            </div>

                            <div id="hiddenfps" style="display:none" class="form-group col-md-6" > 
                                {{Form::label('fps', 'Καρέ ανά δευτερόλεπτο :')}} 
                                <div class="input-group">
                                {{Form::number('fps', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
                                <span class="input-group-addon">fps</span>
                                </div>
                            </div>

                            
        <div id="hiddenmic" style="display:none" class="form-group col-md-6" > 
            {{Form::label('mic', 'Μικρόφωνο :')}} <span class="kok">*</span>
            {{ Form::select('mic', ['Ναι' => 'Ναι' , 'Όχι' => 'Όχι' ],  null,['class' => 'form-control','placeholder' => ''])}}
        </div>


                    </div>

      
<div class="form-row">

    <div class="form-group col-md-6"> 
        {{Form::label('price', 'Τιμή :')}} <span class="kok">*</span>
        {{Form::number('price', '',['class' => 'form-control', 'placeholder' => '','min'=>1])}}
    </div>
</div>

<div class="form-group"> 

    <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}}  <span class="kok">*</span>
    <br>
  Άριστη {{Form::radio('status', 'Άριστη')}}
  Καλή {{Form::radio('status', 'Καλή')}}
  Μέτρια {{Form::radio('status', 'Μέτρια')}}
  Κακή {{Form::radio('status', 'Κακή')}}</p>
  <br><br>
</div>

  <div class="form-group"> 
  {{Form::label('body', 'Περιγραφή :')}}
  {{Form::textarea('body', '',['class'=>'form-control', 'placeholder' => 'Body Text'])}}
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



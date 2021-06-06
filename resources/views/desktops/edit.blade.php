@extends('layouts.app')
@section('content')
<div class="container">
<div class="main">
<div class="well">

  <center><h2>Επεξεργασία αγγελίας</h2></center><br>

  
  <p class="paragraph">Στοιχεία αγγελίας.</p>
  {!! Form::open(['action' => ['PostsController@update', $post->id],    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  

  <div class="form-row">
      <div class="form-group col-md-6"> 
          {{Form::label('fact', 'Κατασκευαστής :')}}
          {{Form::text('fact', $post->fact,['class' => 'form-control'])}}
      </div>

          <div class="form-group col-md-6"> 
            {{Form::label('cpu', 'Επεξεργαστής :')}}
            {{Form::text('cpu', $post->cpu,['class' => 'form-control'] )}}
          </div>
  </div>

  
         
  <div class="form-row">
      <div class="form-group col-md-6"> 
          {{Form::label('mboard', 'Μητρική κάρτα :')}}
          {{Form::text('mboard', $post->mboard,['class' => 'form-control'] )}}
        </div>
      </div>


        <div class="form-group col-md-6">  
          {{Form::label('ram', 'Μνήμη Ram :')}}
          <div class="input-group">
          {{Form::number('ram', $post->ram ,['class' => 'form-control','placeholder' => ' gb','min'=>1])}}
          <span class="input-group-addon">GB</span>
        </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6"> 
          {{Form::label('gpu', 'Κάρτα γραφικών :')}}
          {{Form::text('gpu', $post->gpu,['class' => 'form-control'])}}
      </div>

      
      <div class="form-group col-md-6">  
          {{Form::label('disc', 'Αποθηκευτικός χώρος :')}}
          <div class="input-group">
          {{Form::number('disc', $post->disc,['class' => 'form-control','min'=>1])}}
          <span class="input-group-addon">GB</span>
          </div>
        </div>
      </div>


<div class="form-row">
    <div class="form-group col-md-6">
      {{Form::label('system', 'Λειτουργικό σύστημα :')}}
      {{ Form::select('system',['Windows 10' => 'Windows 10' , 'Windows 8' => 'Windows 8' , 'Windows 7' => 'Windows 7','Windows XP' => 'Windows XP','Linux' => 'Linux'],  $post->system ,['class' => 'form-control','placeholder' => ''] )}}
    </div>

    <div class="form-group col-md-6">  
      {{Form::label('price', 'Τιμή :')}}
      <div class="input-group">
      {{Form::number('price', $post->price ,['class' => 'form-control', 'placeholder' => 'Price','min'=>1])}}
      <span class="input-group-addon">&euro;</span>
      </div>
    </div>
</div>
 
            <div class="form-group"> 
              <p class="katastasi">{{Form::label('Status', 'Κατάσταση :')}} 
            Άριστη {{Form::radio('status', 'Άριστη',old('status',$post->status) =='Άριστη')}}
            Καλή {{Form::radio('status', 'Καλή',old('status',$post->status) =='Καλή')}}
            Μέτρια {{Form::radio('status', 'Μέτρια',old('status',$post->status) =='Μέτρια')}}
            Κακή {{Form::radio('status', 'Κακή',old('status',$post->status) =='Κακή')}}</p>
           </div><br><br>
    
      
  <div class="form-group"> 
  {{Form::label('body', 'Περιγραφή :')}}
  {{Form::textarea('body', $post->body ,['class'=>'form-control', 'placeholder' => 'Body Text'])}}
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
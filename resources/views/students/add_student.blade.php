@extends('layouts.master')

@section('title','Add Student | SMS')

@section('content_title')
    Add Student Information
@endsection

@section('main_content')
    {!! Form::open( array('route' => 'sms.store', 'class'=> 'form-horizontal')) !!}

    <div class="container">
      <div class="col-md-5 col-md-offset-3">

          <label for="student_name" class="pull-left"> Student Name</label>
          <input type="text" class="form-control" placeholder="Input Name" id="student_name" name="name"> <br/>

          <label for="bangla_name" class="pull-left">  বাংলাতে নাম লিখুন </label>
          <input type="text" class="form-control" placeholder="বাংলায় লিখুন" id="bangla_name" name="bangla_name"> <br/>

          <label for="roll" class="pull-left">  Student Roll No </label>
          <input type="number" class="form-control" placeholder="Input Student Roll Number" id="roll" maxlength="8"
                                                                                                name="roll"> <br/>

          <label for="dept" class="pull-left"> Department Name </label>
          <input type="text" class="form-control" placeholder="Type Department Name" id="dept" name="dept"> <br/>

          <label for="info" class="pull-left"> Address Information </label>
          <textarea class="form-control" id="info" name="info" cols="10" rows="4"> </textarea> <br/>

          {{  Form::submit('Insert Data Now', array('class'=>'btn btn-info')) }}

      </div>
    </div>
    {!! Form::close() !!}
@endsection
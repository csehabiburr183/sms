@extends('layouts.master')

@section('title','Add Student | SMS')

@section('content_title')
    Add Student Information
@endsection

@section('main_content')
    {!! Form::open( array('route' => ['sms.update', $sedit->id], 'method'=>'put', 'class'=> 'form-horizontal')) !!}

    <div class="container">
        <div class="col-md-5 col-md-offset-3">

            <label for="student_name" class="pull-left"> Student Name</label>
            <input type="text" class="form-control" placeholder="Input Name" id="student_name" name="name" value="{{ $sedit->name }}"> <br/>

            <label for="roll" class="pull-left">  Student Roll No </label>
            <input type="number" class="form-control" placeholder="Input Student Roll Number" id="roll" maxlength="8"
                   name="roll" value="{{ $sedit->roll }}"> <br/>

            <label for="dept" class="pull-left"> Department Name </label>
            <input type="text" class="form-control" placeholder="Type Department Name" id="dept" name="dept" value="{{ $sedit->dept }}"> <br/>

            {{  Form::submit('Update Information', array('class'=>'btn btn-info')) }}

        </div>
    </div>
    {!! Form::close() !!}
@endsection
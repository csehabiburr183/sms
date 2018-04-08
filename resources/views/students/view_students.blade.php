@extends('layouts.master')

@section('title','View All Students | SMS')

@section('content_title')
    View All Students Information
@endsection

@section('main_content')

 <table class="table-bordered table-striped table text-center">
    <tr>
        <th class="text-center"> S/N </th>
        <th class="text-center"> Student Name </th>
        <th class="text-center"> Roll Number </th>
        <th class="text-center"> Department Name </th>
        <th class="text-center"> Action </th>
    </tr>

 <?php $sl=0; ?>
     @foreach($data as $students)
     <tr>
        <td>{{ $sl=$sl+1}}</td>
        <td>{{ $students->name }}</td>
        <td>{{ $students->roll }}</td>
        <td>{{ $students->dept }}</td>
        <td><a href="{{ route('sms.edit', $students->id) }}" class="btn btn-sm btn-theme03"> Edit </a>  | <a href="" class="btn btn-sm btn-theme04"> Delete </a> </td>
     </tr>
     @endforeach


 </table>

@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <table class="table">
            <a href="{{url('card_new_add')}}" class="btn btn-info">New Add</a>
            &nbsp
            <a href=" " class="btn btn-secondary">Public-View</a>
   
<table class="table table-dark">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Image</th>
      <th>Description</th>
      <th>Date</th>
      <th> Action</th>
    </tr>
  </thead>
 
@foreach($ppp as $row)
<tbody>
    <tr>
      <td>{{ $row->id }}</td>
      <td>{{ $row->title }}</td>
      <td>{{ $row->image }}</td>
      <td>{{ $row->description }}</td>
      <td>{{ $row->date }}</td>    
      <td> 
        <a href="{{URL::to('delete_card/'. $row->id)}}" class="btn btn-danger">Delete</a>
        <a href="{{URL::to('edit_card/'. $row->id)}}" class="btn btn-info">Edit</a>

      </td></tr>    
  </tbody>
@endforeach
</table>

 



 
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
    <span>Edit Page</span>


 

   <form action="{{url('update_add/'. $edit->id)}}" method="POST" enctype="multipard/form-data">
     <table class="table table-dark">
            		{{csrf_field()}}
	<tr><td>Title :</td><td> <input type="text" value="{{$edit->title}}" name="title"></td></tr>
	<tr><td>Image :</td><td> <input type="text" value="{{$edit->image}}"name="image"></td></tr>
	<tr><td>Description :</td><td> <input type="text" value="{{$edit->image}}" name="description"></td></tr>
	<tr><td>Date :</td><td> <input type="text" value="{{$edit->date}}" name="date"></td></tr> 
	<tr><td></td><td><input type="submit" value="Save">
    			<input type="reset" value="Reset"></td></tr> 
</form>
  </table>




        </div>
    </div>
</div>
@endsection

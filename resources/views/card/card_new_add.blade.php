@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a href="{{url('/home')}}" class="btn btn-success">Home</a>


 

   <form action="{{url('data_add')}}" method="POST" enctype="multipard/form-data">
            	<table class="table">
            		{{csrf_field()}}
	<tr><td>Title :</td><td> <input type="text" name="title"></td></tr>
	<tr><td>Image :</td><td> <input type="text" name="image"></td></tr>
	<tr><td>Description :</td><td> <input type="text" name="description"></td></tr>
	<tr><td>Date :</td><td> <input type="text" name="date"></td></tr> 
	<tr><td></td><td><input type="submit" value="Save">
    			<input type="reset" value="Reset"></td></tr> 
</form>
  </table>




        </div>
    </div>
</div>
@endsection

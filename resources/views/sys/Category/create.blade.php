@extends('layouts.app')


@section('content')

        <h2 class="text-center mt-3">Add New Category</h2>

        <form action="{{ route('category.store') }}" method="post" class="col-8 m-auto mt-4">
        	@csrf
        	<div class="md-form">
        		<label for="">Name Of Category</label>
        		<input type="text" name="name" class="form-control" value="{{old('name')}}">
        	</div>
			<br>
			<br>
        	<div class="md-textarea">
        		<label for="" class="text-dark-50">Short Description</label>
        		<textarea name="desc" class="form-control" id="" cols="30" rows="10">{{old('desc')}}</textarea>
        	</div>
			<br>
        	<button class="btn btn-info btn-rounded"  type="Submit">Submit</button>
        </form>
@endsection
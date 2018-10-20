@extends('layouts.app')


@section('content')

        <h2 class="text-center mt-3">Add New Author</h2>

        <form action="{{ route('author.store') }}" method="post" class="col-8 m-auto mt-4">
        	@csrf
        	<div class="md-form">
        		<label for="">Name Of Author</label>
        		<input type="text" name="name" class="form-control" value="{{old('name')}}">
        	</div>

                        <br>

                <div class="md-form">
                        <label for="">Loaction Of Author</label>
                        <input type="text" name="location" class="form-control" value="{{old('location')}}">
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
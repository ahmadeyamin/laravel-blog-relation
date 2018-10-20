@extends('layouts.app')


@section('content')

        <h2 class="text-center mt-3">Add New Tag</h2>

        <form action="{{ route('tag.store') }}" method="post" class="col-8 m-auto mt-4">
        	@csrf
        	<div class="md-form">
        		<label for="">Name Of Tag</label>
        		<input type="text" name="name" class="form-control" value="{{old('name')}}">
        	</div>
			<br>
			
        	<button class="btn btn-info btn-rounded"  type="Submit">Submit</button>
        </form>
@endsection
@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3">Add New Category</h2>
<form action="{{ route('post.store') }}" method="post" class="col-8 m-auto mt-4">
	@csrf
	<div class="md-form">
		<label for="">Post Title</label>
		<input type="text" name="title" class="form-control" value="{{old('title')}}">
	</div>
	<br>
	<br>
	<div class="">
		<label for="">Select As Author</label>
		<select class="form-control d-block" name="author">
			@foreach ($Authors as $Author)
			<option value="{{$Author->id}}">{{$Author->name}}</option>
			@endforeach
		</select>
	</div>
	<br>
	<div class="input-group row">
		<div class="col-6">
			<div class="">
				<label for="">Select Category</label>
				<select multiple="" class="form-control d-block" name="category[]">
					@foreach ($categoris as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-6">
			<div class="form-group">
				<label for="">Select Tag</label>
				<select multiple="" class="form-control d-block" name="tag[]">
					@foreach ($tags as $tag)
					<option value="{{$tag->id}}">{{$tag->name}}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	<br>
	<div class="md-textarea">
		<label for="" class="text-dark-50">Post Body</label>
		<textarea name="body" class="form-control" id="" cols="30" rows="10">{{old('desc')}}</textarea>
	</div>
	<br>
	<button class="btn btn-info btn-rounded"  type="Submit">Submit</button>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
$(document).ready(function() {
$('.mdb-select').material_select();
});
</script>
@endsection
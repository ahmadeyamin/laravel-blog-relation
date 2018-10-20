@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3">This Is Post Page</h2>
<a href="{{ route('post.create') }}" class="btn btn-primary btn-sm btn-rounded">Add New Post</a>

<div class="col-12">
	<br>
	<br>
	<hr>
	<br>
	<h2 class="text-center">All Post</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Title</th>
							<th class="text-center">Author</th>
							<th class="text-center">Tags</th>
							<th class="text-center">Category</th>
							<th class="text-center">Time</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($posts as $key => $post)
							@php
								$key++
							@endphp
							<tr>
								<td class="text-center">{{$key}}</td>
								<td class="text-center">{{$post->title}}</td>
								<td class="text-center">{{$post->author->name}}</td>


								<td class="text-center">
									@foreach ($post->tags as $tag)
										<div class="badge bg-primary">{{$tag->name}}</div>
									@endforeach
								</td>
								<td class="text-center">
									@foreach ($post->categories as $category)
										<div class="badge bg-primary">{{$category->name}}</div>
									@endforeach
								</td>


								<td class="text-center">{{$post->updated_at->diffForHumans()}}</td>
								<td class="text-center">
								<form action="{{ route('post.destroy',$post->id) }}" method="POST" class="form-inline text-center" >
									@method('DELETE')
									@csrf

									<button type="submit" class="btn btn-danger btn-rounded btn-sm text-center">Delete</button>
								</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
@endsection
@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3">This Is Authors </h2>
<a href="{{ route('author.create') }}" class="btn btn-primary btn-sm  btn-rounded">Add New Author</a>

<div class="col-12">
    <br>
    <br>
    <hr>
    <br>
    <h2 class="text-center">All Authors</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Location</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $key => $author)
                            @php
                                $key++
                            @endphp
                            <tr>
                                <td class="text-center">{{$key}}</td>
                                <td class="text-center">{{$author->name}}</td>
                                <td class="text-center">{{$author->updated_at->diffForHumans()}}</td>
                                <td class="text-center">
                                <form action="{{ route('author.destroy',$author->id) }}" method="POST" class="form-inline text-center" >
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
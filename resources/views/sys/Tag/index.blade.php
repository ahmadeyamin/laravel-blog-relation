@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3">This Is Tag</h2>
<a href="{{ route('tag.create') }}" class="btn btn-primary btn-sm btn-rounded">Add New Tag</a>

<div class="col-12">
    <br>
    <br>
    <hr>
    <br>
    <h2 class="text-center">All Tags</h2>
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Last Update</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $key => $tag)
                            @php
                                $key++
                            @endphp
                            <tr>
                                <td class="text-center">{{$key}}</td>
                                <td class="text-center">{{$tag->name}}</td>
                                <td class="text-center">{{$tag->updated_at->diffForHumans()}}</td>
                                <td class="text-center">
                                <form action="{{ route('tag.destroy',$tag->id) }}" method="POST" class="form-inline text-center" >
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
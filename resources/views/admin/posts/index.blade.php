@extends('layouts.admin_layout')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
                <div class="card m-4">
                    <div class="card-header">Title : {{ $post->title }}
                        <div class="card-body">Body : {{ $post->body }}</div>
                    
                    </div>

                    <div class="card-body">Body : {{ $post->body }}</div>
                </div>   
            @endforeach
        </div>
    </div>
</div> --}}
<a href="{{ route('admin.posts.create') }}" class="btn btn-primary">New Post</a>
<table class="table">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>BODY</th>
            <th>ACTION</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
                <a href="{{ route('admin.posts.show', ['post' => $post->slug ])}}" class="btn btn-primary"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                <a href="{{ route('admin.posts.edit', ['post' => $post->slug ])}}" class="btn btn-warning"><i class="fas fa-pencil-alt fa-sm fa-fw"></i>
                </a>
                <form action="{{ route('admin.posts.destroy', ['post' => $post -> slug]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fas fa-trash fa-sm fa-fw"></i></button>
                </form> 
                
            </td>
            
        </tr>
        @endforeach
    </tbody>
    
</table>
@endsection


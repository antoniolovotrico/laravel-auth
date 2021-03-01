
@extends('layouts.admin_layout')

@section('content')
<h1>Show post</h1>   
<table class="table">
    <thead>
        <tr>
            <th class="id">ID</th>
            <th class="title">Title</th>
            <th class="body">Body</th>
            <th class="created">Created</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="id">{{ $post -> id  }}</td>
            <td class="title">{{ $post -> title  }}</td>
            <td class="body">{{ $post -> body  }}</td>
            <td class="created">{{ $post -> created_at  }}</td>
        </tr>     
    </tbody>
</table>
@endsection
@extends('layouts.admin_layout')

@section('content')
<h1>Edit {{ $post -> title }}</h1>
        <form class="form_container" action="{{ route('admin.posts.update', ['post'=> $post-> id])}}" method="post">
            @csrf
            @method('Put')
            <div class="draw_container">
                <label for="title">Title</label>
                <input id="input_title" type="text" name="title" value="{{ $post -> title }}">
                @error('title')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
                <label for="body">Body</label>
                <textarea cols="30" rows="10" id="input_body" type="text" name="body">{{ $post -> body }}</textarea>
                @error('body')
                    <div class="error_field_required">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button id="create_btn" type="submit">Edit</button>
            </div>
        </form>
@endsection

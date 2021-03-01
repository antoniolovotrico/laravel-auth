@extends('layouts.admin_layout')

@section('content')
<h1>Write a New Article</h1>
<form class="form_container" action="{{ route('admin.posts.store')}}" method="post">
    @csrf
    <div class="draw_container">
        <label for="title">Title</label>
        <input id="input_title" type="text" name="title" placeholder="Write here the title of your post">
        @error('title')
            <div class="error_field_required">{{ $message }}</div>
        @enderror
        <label for="author">Author</label>
        <input id="input_author" type="text" name="author" placeholder="Write here the author of your post">
        <label for="body">Body</label>
        <textarea cols="30" rows="10" id="input_body" type="text" name="body" placeholder="Write here the body of your post"></textarea>
        @error('body')
            <div class="error_field_required">{{ $message }}</div>
        @enderror
    </div>
    <aside>
        
            <button id="create_btn" type="submit">Publish</button>
        </div>
    </aside>
</form>
@endsection
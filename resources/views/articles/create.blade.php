@extends('layouts.main')

@section('content')
       <!-- Modal -->

       <div class="card">
        <div class="card-header w3-teal w3-bottombar">
        <h3>Create Article</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="title" class=" w3-large">Title</label>
                    <input type="text" name="title" class="form-control">
                    {{-- @error('title')
                        <span class=" text-danger">{{ $mesage }}</span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label for="title" class=" w3-large">Content</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    {{-- @error('body')
                        <span class=" text-danger">{{ $mesage }}</span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <input type="file" name="image" id="image" class="form-control m-1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">create</button>
            </div>
</form>
        </div>
       </div>
@endsection

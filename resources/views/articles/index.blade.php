@extends('layouts.main')

@section('content')
<div class=" d-flex justify-content-between mb-0 pb-0">
<div>
        <h1>Articles</h1>
</div>
   <!-- Button trigger modal -->
   <div>
    <button type="button" class="btn btn-primary btn-ms" data-toggle="modal" data-target="#modelId">
     Create Article
   </button>
   </div>
</div>
<hr class="w3-bottombar w3-rightbar">
   <!-- Modal -->
   <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create a blog Post</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="title" class=" w3-large">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title" class=" w3-large">Content</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="image" id="image" class="form-control m-1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">create</button>
            </div>
            </form>
        </div>
    </div>
   </div>
@endsection

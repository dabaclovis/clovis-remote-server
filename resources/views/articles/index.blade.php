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
  @include('partials.modal')
@endsection

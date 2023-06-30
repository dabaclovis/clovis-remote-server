@extends('layouts.main')

@section('content')
<div class=" d-flex justify-content-between mb-0 pb-0">
<div>
        <h1>Articles</h1>
</div>
   <!-- Button trigger modal -->
   @if (count($articles) > 0)
    <div>
    <a href="{{ route('articles.create') }}" class="btn btn-primary btn-ms">
     Create Article
   </a>
   </div>
   @endif
</div>
<hr class="w3-bottombar w3-rightbar">
@if (count($articles) > 0)
    <p>Total number of Articles {{ count($articles) }}</p>
    @foreach ($articles as $article)
        <div class="row">
            <div class="col-4">
               <div class="w3-card-2 mb-1">
                     <img src="{{ asset('storage/images/'.$article->image) }}" alt="">
               </div>
            </div>
            <div class="col-8">
                <div class="w3-card-4 mt-1">
                    <div class="card-body">
                        <div class=" w3-large mb-2">
                           <a href="{{ route('articles.show', $article->id) }}" class="card-title">{{ Str::ucfirst($article->title) }}</a>
                        </div>
                        <p class="card-text">{{ $article->body }}</p>
                    </div>
                    <p class=" mx-2">
                        <small>{{ $article->created_at }}</small>
                    </p>
                </div>
            </div>
        </div>
    @endforeach

@endif
@endsection

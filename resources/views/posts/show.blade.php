@extends ('layout')


@section ('css')

<link href="/css/article.css" rel="stylesheet">

@endsection


@section ('content')

<!-- Title -->
<h1 class="mt-4"> {{ $post->title }} </h1>

<!-- Author -->
<p class="lead">
  by
  <a href="#">{{ $post->user->name }}</a>
</p>

<hr>

<!-- Date/Time -->
<p>{{ $post->updated_at->toFormattedDateString() }}</p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="{{ $post->picture }}" alt="">

<hr>

<!-- Post Content -->
 {{ $post->body }}

<hr>

@include ('layouts.comments')

@endsection

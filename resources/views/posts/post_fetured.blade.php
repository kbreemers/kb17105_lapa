<div class="box box-featured">
  <div class= "article_header"><h3>{{ $post->title }}</h3></div>
  <p>{{ $post->updated_at->toFormattedDateString() }}</p>
  <div class="img-fluid rounded"> <a href="articles/article1"><img src="{{ $post->picture }} " height="auto" width="700"  alt="" /></a> <span class="mark-featured notext">&nbsp;</span> </div>
  <p class="text">{{ $post->preview }}</p>
  <div class="box-body">
    <p>
    <a href="/posts/{{ $post->id }}" <button type="submit" class="btn btn-primary">
        Continue reading
    </button></a></p>
  <div class="cl">&nbsp;</div>
</div>

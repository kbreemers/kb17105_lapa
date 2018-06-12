<div class="card my-4">
  <h5 class="card-header">Leave a Comment:</h5>
  <div class="card-body">

    <form method="POST" action="/posts/{{ $post->id }}/comments">

      <div class="form-group">
        {{ csrf_field() }}

        <textarea name='body'class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<!-- Single Comment -->

@foreach ( $post -> comments as $comment)

<div class="media mb-4">
  <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
  <div class="media-body">
    <h5 class="mt-0">{{ $comment->user->name }}</h5>

      <a>{{ $comment->body }}<a>

  </div>
</div>

@endforeach

@extends ('layout')

@section ('css')

<link href="/css/article.css" rel="stylesheet">

@endsection

@section ('content')

  <h1 class="mt-4"> Create a Post </h1>
  <hr>
  <form method="POST" action="/posts">

    {{ csrf_field() }}

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>

    <textarea id="body" name="body" class="form-control" ></textarea>

  </div>

  <div class="form-group">

    <label for="Title">Short preview</label>
    <input type="text" class="form-control" id="preview" name="preview" >

  </div>

  <div class="form-group">

    <label for="Title">Picture link</label>
    <input type="text" class="form-control" id="picture" name="picture" >

  </div>

  
<hr>


  <div class="form-group">

  <button type="submit" class="btn btn-primary">Publish</button>

  </div>

  @include ('layouts.errors')

</form>

@endsection

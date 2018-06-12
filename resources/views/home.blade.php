
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="/css/article.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
  @include ('layouts.nav')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Hottest News</h1>

          <hr>
          <!-- Post Content -->
          <div class="shell">
         <div id="content" class="left">


           @foreach ($posts as $post)

            @include ('posts.post_fetured')

           @endforeach

           <div class="box box-featured">
             <div class= "article_header"><h3>How A New Generation Of Chicago Artists Redefined Rap</h3></div>
             <p>Posted on January 14, 2018 at 12:00 PM</p>
             <div class="img-fluid rounded"> <a href="articles/article1"><img src="https://scontent-arn2-1.xx.fbcdn.net/v/t1.0-9/13095827_1003439296414801_3330812785131695305_n.jpg?oh=59c38c367855c5aff78d0d1924e686cc&oe=5AF5B0DE " height="auto" width="700"  alt="" /></a> <span class="mark-featured notext">&nbsp;</span> </div>
             <p class="text">"From The Cool Kids to Bump J to Chief Keef and Chance The Rapper, here’s how Chicago redefined hip-hop this past decade."</p>
             <div class="box-body">
               <p>
               <a href="articles/article1" <button type="submit" class="btn btn-primary">
                   Continue reading
               </button></a></p>
             <div class="cl">&nbsp;</div>
           </div>
<hr></hr>
           <div class="box">
             <h3>How Lean Became Hip-Hop’s Dangerous Addiction</h3>
             <p class="posted">Posted on January 16, 2018 at 15:35 PM</p>
             <div class="box-image"> <a href="#"><img src="https://pbs.twimg.com/media/BrLpuCRCAAAZ-oE.jpg" alt="" height="auto" width="700"></a> <a href="css/images/box-image1.jpg" class="overlay notext">&nbsp;</a> </div>
             <p class="text">"From DJ Screw to Lil Pump, Houston’s influential drink found its way onto the charts and into hip-hop tragedies."</p>
             <div class="box-body">
               <a href="articles/article2" <button type="submit" class="btn btn-primary">
                   Continue reading
               </button></a>
             <div class="cl">&nbsp;</div>
             <a href="#" class="close notext">&nbsp;</a>
           </div>
<hr></hr>
           <div class="box">
             <h3>Braking Down The Origins Of Mumble Rap</h3>
             <p class="posted">Posted on January 17, 2018 at 20:45 PM</p>
             <div class="box-image"> <a href="/article3"><img src="https://static.vibe.com/files/2017/06/Mumble-Rap-VIBE-Essay-1496698088-1828x1000.jpg" alt="" height="auto" width="700" /></a> <a href="css/images/box-image2.jpg" class="overlay notext">&nbsp;</a> </div>
             <p class="text">"Lyrical dexterity sometimes takes a backseat to melody and flow, but it’s not the first time."</p>
             <div class="box-body">
             <a href="articles/article3" <button type="submit" class="btn btn-primary">
                 Continue reading
             </button></a>
             <div class="cl">&nbsp;</div>
             <a href="#" class="close notext">&nbsp;</a>
            </div>
<hr></hr>
           <div class="box box-small">
            <h3>Should Stealing Flows Matter In Hip-Hop?</h3>
            <p class="posted">Posted on January 15, 2018 at 12:10 PM</p>
             <div class="box-image"> <a href="articles/article4"><img src="http://img.wennermedia.com/social/021215-music-migos-press-promo-214c3461-6c26-48f6-9d3f-0249f207b713.png" alt="" height="auto" width="700" /></a> <a href="css/images/box-image3.jpg" class="overlay notext">&nbsp;</a> </div>
             <p class="text">"As hip-hop has grown, co-opting flows has become far more common."</p>
             <div class="box-body">
             <a href="articles/article4" <button type="submit" class="btn btn-primary">
                 Continue reading
             </button></a>
             <div class="cl">&nbsp;</div>
             <a href="#" class="close notext">&nbsp;</a>
           </div>
            </div>
          </div>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">


          <!-- Side Widget -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include ('layouts.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>

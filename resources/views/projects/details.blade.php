@extends('../Common')

@section('title')
    Project Details
@endsection

@section('elements')
<div class=" posts-list" style="min-width: 100%">
<div class="single-post">
   <!--div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
   </div-->
   <div class="blog_details">
      <h2 style="color: #2d2d2d;">{{$projects -> title}}
      </h2>
      <ul class="blog-info-link mt-3 mb-4">
         <li>Category :<a href="#"> {{$projects -> category}}</a></li>
         <li>Launch Date : {{$projects -> dateLancement}}</li>
         <li>Completion Date : {{$projects -> dateRealisation}}</li>
      </ul>
      <p class="excert">
         {{$projects -> description}}
      </p>
   </div>
</div>

@endsection
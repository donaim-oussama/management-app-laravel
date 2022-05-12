@extends('../Common')

@section('title')
    Event Details
@endsection

@section('elements')
<div class=" posts-list" style="min-width: 100%">
<div class="single-post">
   <!--div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/single_blog_1.png" alt="">
   </div-->
   <div class="blog_details">
      <h2 style="color: #2d2d2d;">{{$event -> nom_event}}
      </h2>
      <ul class="blog-info-link mt-3 mb-4">
         <li>Location :<a href="#"> {{$event -> lieu}}</a></li>
         <li>Date : {{$event -> date}}</li>
         
      </ul>
      <p class="excert">
         {{$event -> montant_prix}}
      </p>
      <p class="excert">
         {{$event -> nom_entreprise}}
      </p>
   </div>
</div>

@endsection
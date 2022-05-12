@extends('../Common')

@section('title')
    Projects
@endsection

@section('categories')
<a class="nav-item nav-link active" id="nav-home-tab" href="{{url('/projects')}}" aria-controls="nav-home" aria-selected="true">All</a>
@foreach ($categories as $cat)
    <a class="nav-item nav-link" id="nav-profile-tab" href=" {{ url('/projects/category/'.$cat->category_name) }} " aria-controls="nav-profile" aria-selected="false">{{$cat->category_name}}</a>
@endforeach


@endsection

@section('elements')
@foreach ($projects as $project)
<div class="col-xl-4 col-lg-4 col-md-6">
    <!-- Single course -->
    <div class="single-course mb-70">
        <div class="course-img">
            <img src="" alt="">
        </div>
        <div class="course-caption">
            <div class="course-cap-top">
                <h4><a href="{{ url('projects/details/'.$project->title) }}">{{$project -> title}}</a></h4>
            </div>
            
            <div class="course-cap-bottom d-flex justify-content-between">
                <ul>
                    <li><i class="ti-time"></i>Realisation Date</li>
                    
                </ul>
                <span>{{ $project -> dateRealisation }}</span>
            </div>
            <div class="course-cap-bottom d-flex justify-content-around">
                <a href=" /projects/{{$project->id}}/edit " class="genric-btn primary-border">Edit</a>
                <a href="/projects/{{$project->id}}/delete" class="genric-btn danger-border">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="container">
<div class="row justify-content-center">
<div class="form-group">
    <a type="submit" class="button button-contactForm btn_1 boxed-btn " href="/projects/create">Create Project</a>
</div>
</div>
</div>
@endsection
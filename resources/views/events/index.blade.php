@extends('../Common')

@section('title')
    Events
@endsection

@section('categories')

@endsection

@section('elements')
@foreach ($events as $event)
<div class="col-xl-4 col-lg-4 col-md-6" style="min-width: fit-content">
    <!-- Single course -->
    <div class="single-course mb-70" style="min-width: fit-content">
        <div class="course-img">
            <img src="" alt="">
        </div>
        <div class="course-caption" style="min-width: fit-content">
            <div class="course-cap-top">
                <h4><a href="{{ url('events/details/'.$event->id) }}">{{$event->nom_event}}</a></h4>
            </div>
            
            <div class="course-cap-bottom d-flex justify-content-between">
                <ul>
                    <li><i class="ti-time"></i>Realisation Date</li>
                    
                </ul>
                <span>{{ $event -> date }}</span>
            </div>
            <div class="course-cap-bottom d-flex justify-content-around">
                <a href=" /events/{{$event->id}}/edit " class="genric-btn primary-border">Edit</a>
                <a href="/events/{{$event->id}}/delete" class="genric-btn danger-border">Delete</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="container">
<div class="row justify-content-center">
<div class="form-group">
    <a type="submit" class="button button-contactForm btn_1 boxed-btn " href="/events/create">Create Event</a>
</div>
</div>
</div>
@endsection
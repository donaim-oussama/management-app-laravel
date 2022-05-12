@extends('../Common')

@section('title')
    Edit Project
@endsection


@section('elements')
<div class="comment-form">
    <h2>Edit the project details</h2>
    
    <form  action="/projects/details/{{$project->id}}" method="POST" id="commentForm">
    @method('PUT')
      @csrf
       <div class="row">
        <input type="hidden" name="id" value="{{ $project->id }}">
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="title" id="title" type="text" value="{{$project->title}}">
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <select name="id_category" id="id_category" >
                    
                   @foreach ($category as $cat)
                     @if ($cat -> id == $project -> id_category)
                        <option value="{{ $cat->id }}" selected>{{ $cat->category_name }} (current)</option>
                     @else
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                     @endif
                   @endforeach
                </select>
             </div>
          </div>
          <div class="col-12">
            <div class="form-group">
               <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9"
                  >{{$project->description}}</textarea>
            </div>
         </div>
          <!--div class="col-12">
             <div class="form-group">
                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
             </div>
          </div-->
          <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="dateLancement" id="dateLancement" type="date" value="{{Carbon\Carbon::parse($project->dateLancement)->format('Y-m-d')}}">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="dateRealisation" id="dateRealisation" type="date" value="{{Carbon\Carbon::parse($project->dateRealisation)->format('Y-m-d')}}">
            </div>
         </div>
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn">Edit Project</button>
       </div>
    </form>
 </div>
@endsection
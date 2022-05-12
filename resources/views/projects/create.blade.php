@extends('../Common')

@section('title')
    Add project
@endsection


@section('elements')
<div class="comment-form">
    <h2>Fill with project details</h2>
    <form  action="/projects/create" method="POST" id="commentForm">
      @csrf
       <div class="row">
          
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="title" id="title" type="text" placeholder="Title of the project...">
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <select name="id_category" id="id_category">
                   @foreach ($category as $cat)
                       <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                   @endforeach
                </select>
             </div>
          </div>
          <div class="col-12">
            <div class="form-group">
               <textarea class="form-control w-100" name="description" id="description" cols="30" rows="9"
                  placeholder="Write a description for the project..."></textarea>
            </div>
         </div>
          <!--div class="col-12">
             <div class="form-group">
                <input class="form-control" name="website" id="website" type="text" placeholder="Website">
             </div>
          </div-->
          <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="dateLancement" id="dateLancement" type="date">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="dateRealisation" id="dateRealisation" type="date">
            </div>
         </div>
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn">Add Project</button>
       </div>
    </form>
 </div>
@endsection
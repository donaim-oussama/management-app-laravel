@extends('../Common')

@section('title')
    Add Student To Project
@endsection


@section('elements')
<div class="comment-form " style="min-width: 100%">
    <h2>F</h2>
    <form  action="/projects" method="POST" id="commentForm">
      @csrf
       <div class="row ">
          
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="code_apogee" id="code_apogee" type="text" placeholder="Student's unique code..." required>
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <select name="id" id="id_category" required>
                    @foreach ($projects as $proj)
                        <option value="{{ $proj->id }}">{{ $proj->title }}</option>
                    @endforeach
                 </select>
             </div>
          </div>
          <div class="col-12">
            <div class="form-group">
               <textarea class="form-control w-100" name="mission" id="mission" cols="30" rows="9"
                  placeholder="Write a description for the student's task in the project..."></textarea>
            </div>
         </div>
         
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn" id="add_ev">Add Student</button>
       </div>
    </form>
 </div>

@endsection
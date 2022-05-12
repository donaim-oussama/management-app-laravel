@extends('../Common')

@section('title')
    Add Project To Event
@endsection


@section('elements')
<div class="comment-form " style="min-width: 100%">
    <h2>Choose the corresponding project and event below</h2>
    <form  action="/events/add-project" method="POST" id="commentForm">
      @csrf
       <div class="row ">
          
        <div class="col-sm-6">
            <div class="form-group">
                <p>Select Event</p>
               <select name="event_id" id="event_id" required>
                   @foreach ($events as $ev)
                       <option value="{{ $ev->id }}">{{ $ev->nom_event }}</option>
                   @endforeach
                </select>
            </div>
         </div>
          <div class="col-sm-6">
             <div class="form-group">
                 <p>Select Project</p>
                <select name="project_id" id="project_id" required>
                    @foreach ($projects as $proj)
                        <option value="{{ $proj->id }}">{{ $proj->title }}</option>
                    @endforeach
                 </select>
             </div>
          </div>
       
         
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn" id="add_ev">Add Project</button>
       </div>
    </form>
 </div>

@endsection
@extends('../Common')

@section('title')
    Remove Student From Project
@endsection


@section('elements')
<div class="comment-form " style="min-width: 100%">
    <h2>Fill with the student's code and the project</h2>
    <form  action="/projects/remove-student" method="POST" id="commentForm">
      @csrf
       <div class="row ">
          
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="code_apogee" id="code_apogee" type="text" placeholder="Student's unique code..." required>
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <select name="id" id="id" required>
                    @foreach ($projects as $proj)
                        <option value="{{ $proj->id }}">{{ $proj->title }}</option>
                    @endforeach
                 </select>
             </div>
          </div>
          
         
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn" id="add_ev">Remove Student</button>
       </div>
    </form>
 </div>

 <!--script>
     var montant = document.getElementById('montant_prix');
     var entreprise = document.getElementById('nom_entreprise');
     document.getElementById('primary-switch').onchange = function(){
         montant.disabled = !this.checked;
         entreprise.disabled = !this.checked;
     };
     document.getElementById('add_ev').onclick = function(){
        if(!document.getElementById('primary-switch').checked){
            montant.value = '';
            entreprise.value = '';
        }
     };
     
 </script-->
@endsection
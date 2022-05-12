@extends('../Common')

@section('title')
    Add Event
@endsection


@section('elements')
<div class="comment-form ">
    <h2>Fill with event details</h2>
    <form  action="/events" method="POST" id="commentForm">
      @csrf
       <div class="row ">
          
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="nom_event" id="nom_event" type="text" placeholder="Name of the event..." required>
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="lieu" id="lieu" type="text" placeholder="Location of the event..." required>
             </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="date" id="date" type="date" required>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
                <div class="switch-wrap d-flex justify-content-between">
                    <p>This event has a prize</p>
                    <div class="primary-switch">
                        <input type="checkbox" id="primary-switch" name="prix">
                        <label for="primary-switch"></label>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="montant_prix" id="montant_prix" type="number" placeholder="Prize..." disabled>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="nom_entreprise" id="nom_entreprise" type="text" placeholder="Host enterprise..." disabled>
            </div>
         </div>
         
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn" id="add_ev">Add Event</button>
       </div>
    </form>
 </div>

 <script>
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
     
 </script>
@endsection
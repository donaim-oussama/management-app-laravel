@extends('../Common')

@section('title')
    Edit Event
@endsection


@section('elements')
<div class="comment-form ">
    <h2>Fill with event details</h2>
    <form  action="/events/details/{{$event->id}}" method="POST" id="commentForm">
    @method('PUT')
      @csrf
       <div class="row ">
          <input type="hidden" value="{{$event->id}}">
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="nom_event" id="nom_event" type="text" placeholder="Name of the event..." required value="{{$event->nom_event}}">
             </div>
          </div>
          <div class="col-sm-6">
             <div class="form-group">
                <input class="form-control" name="lieu" id="lieu" type="text" placeholder="Location of the event..." required value="{{$event->lieu}}">
             </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="date" id="date" type="date" required value="{{$event->date}}">
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
                <div class="switch-wrap d-flex justify-content-between">
                    <p>This event has a prize</p>
                    <div class="primary-switch">
                        <input type="checkbox" id="primary-switch" name="prix" value="{{$event->prix}}">
                        <label for="primary-switch"></label>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="montant_prix" id="montant_prix" type="number" placeholder="Prize..."  value="{{$event->montant_prix}}">
             </div>
         </div>
         <div class="col-sm-6">
            <div class="form-group">
               <input class="form-control" name="nom_entreprise" id="nom_entreprise" type="text" placeholder="Host enterprise..."  value="{{$event->nom_entreprise}}">
            </div>
         </div>
         
       </div>
       <div class="form-group">
          <button type="submit" class="button button-contactForm btn_1 boxed-btn" id="add_ev">Edit Event</button>
       </div>
    </form>
 </div>
 <span id="test"></span>

 <script>
     var montant = document.getElementById('montant_prix');
     var entreprise = document.getElementById('nom_entreprise');
     var chkbx = document.getElementById('primary-switch');
     chkbx.onchange = function(){
         montant.disabled = !this.checked;
         entreprise.disabled = !this.checked;
     };
     document.getElementById('add_ev').onclick = function(){
        if(!chkbx.checked){
            montant.value = '';
            entreprise.value = '';
        }else{
            montant.setAttribute("required","");
            entreprise.setAttribute("required","");
        }
     };
     //var chck = JSON.parse("{{ json_encode($event) }}");
        var chk_tst = "{{$event->prix}}" 
     if(chk_tst == "on"){
        chkbx.checked = true;
     }
 </script>
@endsection
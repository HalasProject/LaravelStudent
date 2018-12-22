{{
  /*
  |--------------------------------------------------------------------------
  | StudNote v1
  |--------------------------------------------------------------------------
  | Contact me for anything that concerns the project ! :)
  | Creator : Salah Eddine Bentayeb
  | GitHub  : https://github.com/HalasProject/
  | Facebook: https://www.facebook.com/BentayebSalah
  | Twitter : https://twitter.com/halasdior
  | LinkedIn: https://www.linkedin.com/in/salahbentayeb/
  | 
  */
  }}

<!--------------------------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:black;" id="exampleModalCenterTitle">Contact</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--------------------------------------------------------------------------------------------------------------------------------->
 


      <div class="modal-body">
        <form action="{{ url('contact') }}" method="POST">
          @csrf
          <div class="form-row">
           <div class="form-group col-md-2">
            <h6 for="inputEmail4" style="color:black">Sexe</h6>
            <select class="form-control" id="inputEmail4" placeholder="Sexe..." name="gender" required>
              <option>Monsieur</option>
              <option>Madame</option>
            </select>
          </div>
          <div class="form-group col-md-5">
            <h6 for="inputEmail4" style="color:black">Nom</h6>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" name="nom" required>
          </div>
          <div class="form-group col-md-5">
            <h6 for="inputPassword4">Prenom</h6>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Prenom" name="prenom" required>
          </div>
        </div>
        <div class="form-group">
          <h6 for="inputAddress">Email</h6>
          <input type="email" class="form-control" id="inputAddress" placeholder="example@mail.com" name="email" required>
        </div>
        <div class="form-group">
          <h6 for="inputAddress2">Objet</h6>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Titre de votre message ..." name="objet"required>
        </div>
        <div class="form-group">
          <h6 for="inputAddress2">Sujet</h6>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre message ..." name="text" required></textarea>
        </div>
       
      </div>
      <!--------------------------------------------------------------------------------------------------------------------------------->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ENVOI</button>
      </div>
    </form>

  </div>
</div>
</div>
</div>
</div>
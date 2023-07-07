<form action="../Controller/inscription.ctrl.php" method="post">
<div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="nom_utilisateur" class="form-control" name="nom_utilisateur"/>
        <label class="form-label" for="nom_utilisateur">Nom de Compte</label>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="password" id="mot_de_passe" class="form-control" name="mot_de_passe"/>
        <label class="form-label" for="mot_de_passe">Mot de Passe</label>
      </div>
    </div>
  </div>
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="nom_prenom" class="form-control" name="nom_prenom"/>
        <label class="form-label" for="nom_prenom">Nom / Prénom </label>
      </div>
    </div>
  </div>

<!-- Nationalite input -->
  <div class="form-outline mb-4">
    <input type="text" id="nationalite" class="form-control" name="nationalite"/>
    <label class="form-label" for="nationalite">Nationalite</label>
  </div>

  <!-- PassePort input -->
  <div class="form-outline mb-4">
    <input type="text" id="num_passeport" class="form-control" name="num_passeport"/>
    <label class="form-label" for="num_passeport">Identifiant du PassePort</label>
  </div>

  <!-- Adresse input -->
  <div class="form-outline mb-4">
    <input type="text" id="adresse" class="form-control" name="adresse"/>
    <label class="form-label" for="adresse">Adresse</label>
  </div>

  <!-- Telephone input -->
  <div class="form-outline mb-4">
    <input type="text" id="telephone" class="form-control" name="telephone"/>
    <label class="form-label" for="telephone">Telephone</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
    <label class="form-check-label" for="form2Example33">
      Subscribe to our newsletter
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>or sign up with:</p>
    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-secondary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>

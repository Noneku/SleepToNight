<form action = "../Controller/authentification.ctrl.php" method="post" style="height: 1000px;">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" id="nom_utilisateur"  name="nom_utilisateur" class="form-control" />
        <label class="form-label" for="nom_utilisateur">Nom de compte</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" />
        <label class="form-label" for="mot_de_passe">Password</label>
    </div>

    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Remember me </label>
            </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
        <p>Pas encore membre ? <a href="./inscription.view.php">Crée un compte</a></p>
    </div>
</form>
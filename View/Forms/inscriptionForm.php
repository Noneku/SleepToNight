<form method="post" action="../../Controller/inscription.ctrl.php" class="w-50">
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="nom_utilisateur" name="nom_utilisateur" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="nom_utilisateur">Nom de compte</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="mot_de_passe">Mot de Passe</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="nom_prenom" name="nom_prenom" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="nom_prenom">Nom Prenom</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="nationalite" name="nationalite" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="nationalite">Nationalite</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="num_passeport" name="num_passeport" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="num_passeport">Identifiant de votre Passeport</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-4 pb-2">

            <div class="form-outline">
                <input type="text" id="adresse" name="adresse" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="adresse">Adresse</label>
            </div>

        </div>
        <div class="col-md-6 mb-4 pb-2">

            <div class="form-outline">
                <input type="tel" id="telephone" name="telephone" class="form-control form-control-lg" />
                <label class="form-label mt-2" for="telephone">Numéro Télephone</label>
            </div>
        </div>
    </div>
    <div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg mt-2" type="submit" value="Submit" />
    </div>
</form>
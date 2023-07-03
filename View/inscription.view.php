<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Hotel SleepToNight</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SleepToNight</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Créer votre compte !</h3>
                                <form method="post" action="../Controller/inscription.ctrl.php">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
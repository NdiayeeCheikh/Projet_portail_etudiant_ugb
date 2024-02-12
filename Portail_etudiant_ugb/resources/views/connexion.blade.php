<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylePersonaliser/connexion.css">


</head>

<body>

    <div class="container pt-4">
        <div class="row justify-content-center">

            <div class="col-md-6">

                <!--ligne pour image logo et texte  -->

                <div class="row flex-column">

                    <!-- image -->


                    <div  class="col-lg-12 col-sm-12 col-xl-12 col-md-12 d-flex justify-content-center align-items-center">
                        <img src="img/logo-ugb.jpg" class="img-thumbnail rounded mx-auto d-block" alt="logo_UGB">

                    </div>


                    <!-- texte -->

                    
                    <div class="col-md-12">
                        <h1 class="modification_head">Service d'Authentification Unique</h1>
                    </div>


                </div>

                <div class="contenueForme">

                    <!-- Champs de Formulaire -->
                    <form class="mx-auto mb-0">
                    
                    
                    
                        <div class="mb-3 form-group">
                            <label for="exampleInputEmail1" class="form-label control-label">Email institutionnel
                                UGB</label>
                            <input tabindex="1" id="username" placeholder=" Ex: xxxxxx.xxxxxxx@ugb.edu.sn" class="form-control"
                                name="username" value="" type="email" autofocus="" autocomplete="off">
                    
                        </div>
                    
                        <!-- Le MOT DE PASS -->
                    
                        <div class="mb-3 form-group">
                            <label for="exampleInputPassword1" class="form-label control-label">Mot de passe</label>
                            <input tabindex="2" placeholder=" ***************" id="password" class="form-control" name="password"
                                type="password" autocomplete="off">
                        </div>
                    
                        <div class="form-group row d-flex flex-wrap justify-content-between">
                    
                            <div class="col-md-6 mb-3">
                    
                    
                                <span class="lien_gras">
                                    <a tabindex="3" href="#" target="_blank">Activation mail UGB</a>
                                </span>
                    
                            </div>
                            <div class="col-md-6 mb-3">
                                <span class="lien_gras">
                                    <a tabindex="5" href="#">Mot de passe oublié ?</a>
                                </span>
                            </div>
                    
                        </div>
                    
                    
                        <input tabindex="4" class="btn btn-primary btn-block btn-lg" name="login" id="kc-login" type="submit"
                            value="Connexion">
                    
                    
                    </form>

                </div>

                

            </div>
        </div>
    </div>


    <script src="js/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>


</body>

</html>
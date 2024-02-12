<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-u7qaCPwyPR2VwOiCEb6HEMfkoAW2gSceJ/EBiPtk8vcz4ytS1tky5TtirjNzo+gD"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
     <!-- La tete--->
    <div id="div_1" class="row">
        <div class="col-12">
           <img width="100%" src="{{ asset('assets/img/photo.jpg') }}" alt="">
        </div>
    </div>
    <!-- Fin de La tete--->
   <!-- Le code qui suit la tete--->
    <div id="div_1" class="container">
            <div class="row" id="pousko">
                <div class="col-1"></div>
                <div id="taille" class="col-10">
                    <div class="row">
        
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!---1-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-6"> <img src="{{ asset('assets/img/photo2.jpg') }}" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-6">
                                            <!-- Contenu pour la première image -->
                                            <div class="row">
                                                <div class="col-10"><h1 id="h_1"></h1>Inscription pédagogique en ligne</div>
                                                <div class="col-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-11"><h4 id="h3_1">Recevez et telecharger en temps reel votre emploi du temps</h4></div>
                                                <div class="col-1"></div>
                                            </div>
                                            <hr><hr>
                                            <div class="row">
                                                <div class="col-11"><h6>Les enseignements programmes sont visibles dans votre espace prive si vous etes inscrit pedagogiquement a l'unite
                                                    </h6></div>
                                                <div class="col-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5"></div>
                                                <div class="col-3"><button id="colbutton" type="button"
                                                        class="btn btn-outline-primary" style="width: 100%">Lire la suite</button></div>
                                                <div class="col-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!---2-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6"> <img src="{{ asset('assets/img/temps.png') }}" class="d-block w-100" alt="..."></div>
                                        <div class="col-6">
                                            <!-- Contenu pour la deuxième image -->
                                            <div class="row">
                                                <div class="col-10"><h1 id="h_1">Consultation des emplois</h1></div>
                                                <div class="col-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-11"><h4 id="h3_1"> Recevez et telecharger en temps reel votre emploi du temps </h4></div>
                                                <div class="col-1"></div>
                                            </div>
                                            <hr><hr>
                                            <div class="row">
                                                <div class="col-11"><h6>Les enseignements programmes sont visibles dans votre espace prive 
                                                    si vous etes inscrit pedagogiquement a l'unite </h6>
                                                </div>
                                                <div class="col-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5"></div>
                                                <div class="col-3"><button id="colbutton" type="button"
                                                        class="btn btn-outline-primary">Lire la suite</button></div>
                                                <div class="col-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---3-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-6"> <img src="{{ asset('assets/img/enve.png') }}" class="d-block w-100" alt="..."></div>
                                        <div class="col-6">
                                            <!-- Contenu pour la deuxième image -->
                                            <div class="row">
                                                <div class="col-10"><h1 id="h_1">Activation de l'adresse email institutionnelle</h1></div>
                                                <div class="col-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-11"><h4 id="h3_1">En quelques clics, activez vous-même votre email UGB!</h4></div>
                                                <div class="col-1"></div>
                                            </div>
                                            <hr><hr>
                                            <div class="row">
                                                <div class="col-11"><h6>Activez vous-même l'adresse email institutionnelle (...@ugb.edu.sn) 
                                                    figurant sur votre carte étudiant. L'activation de l'email institutionnel est indispensable pour accéder aux différents services mais aussi pour vous connecter au Wifi.</h6>
                                                </div>
                                                <div class="col-1"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-5"></div>
                                                <div class="col-3"><button id="colbutton" type="button"
                                                        class="btn btn-outline-primary">Lire la suite</button></div>
                                                <div class="col-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        
                            <script>
                                $(document).ready(function () {
                                    $('#carouselExample').carousel({
                                        interval: 2000
                                    });
                                });
                            </script>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        
    </div>
   <!-- Fin du code qui suit la tete--->

     <!-- Scroll automatique--->

<div id="div_1" class="container" id="big">
                
        <div  class="row">
            <div class="col-1"></div>
          <div id="bb" class="col-8">
             <!-- Information et icon --->
            <div class="row" id="cc">
                <div class="col-1" id="wa">
                   <svg  xmlns="http://www.w3.org/2000/svg" width="100%"  fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                   <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z"/>
                   <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z"/>
               </svg> 
              </div>
               <div  class="col-11" id="inf"><h2 >Informations</h2></div>
           </div>
            <!-- Fin Information et icon --->
            <div  class="overflow-auto" style="height: 533px;">
                
                <div class="container">

                    <div class="">
                  @foreach ($inscription as $in)
                        <div class="row info_element ">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <img alt="" srcset="" class="w-100 d-none d-md-block img-article "
                                    src="img/activation_mail.jpg">
                            </div>

                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="menueScrolable-titre_sous_section"> 
                                    <h4 class="meme">{{$in->titre}}</h4> 
                                </div>
                                <div class="d-none d-sm-block">
                                    <h5 class="meme2">{{$in->coursdes}}...
                                        <button type="button"
                                            class="btn btn-outline-primary btn-sm btn_outline_pse"> Lire la suite </button>
                                    </h5>
                                        
                                    
                                    <div class="share_more mt-3">
                                        <div class="d-flex align-content-start flex-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-50 mb-2">
                        </div>
                    @endforeach

                        <div class="row info_element ">
                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt="" srcset=""
                                    class="w-100 d-none d-md-block img-article" src="img/consultation@2x (1).png"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="menueScrolable-titre_sous_section"> <h4 class="meme">Journée des alumni du département de Communication </h4> </div>
                                <div class="d-none d-sm-block">
                                    <h5 class="meme2">Le Consortium des Bibliothèques de l’Enseignement Supérieur et de la Recherche
                                        (COBESS) s’est réuni du 18 au 20 janvier 2024 à l’Université Gaston Berger de
                                        Saint-Louis pour réfléchir sur l’élaborati....  <button type="button"
                                        class="btn btn-outline-primary btn-sm btn_outline_pse"> Lire la
                                        suite </button></p></h5>
                                    
                                    <div class="share_more mt-3">
                                        <div class="d-flex align-content-start flex-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-50 mb-2">
                        </div>
                        <div class="row info_element ">
                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt="" srcset=""
                                    class="w-100 d-none d-md-block img-article" src="img/edt@2x.png"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="menueScrolable-titre_sous_section"><h4 class="meme" >Programme "TWAS Young Affiliates" : Dr Abdourahmane NDONG enseignant à l’UFR des Sciences de la Santé (2S) de l’UGB membre de l’Académie mondiale des sciences.</h4> </div>
                                <div class="d-none d-sm-block">
                                    <h5 class="meme2">  Le recteur, Pr Magatte NDIAYE a rendu une visite de courtoisie à la Direction de la
                                        Scolarité, de l’Orientation et des Statistiques (DSOS) ce mardi 16 janvier 2024. Il
                                        a été reçu par le Directeur de ....<button type="button"
                                        class="btn btn-outline-primary btn-sm btn_outline_pse"> Lire la suite </button>
                                    </h5>
                                    
                                    
                                    <div class="share_more mt-3">
                                        <div class="d-flex align-content-start flex-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-50 mb-2">
                        </div>
                        <div class="row info_element ">
                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt="" srcset=""
                                    class="w-100 d-none d-md-block img-article" src="img/Inscription admin@2x.png"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="menueScrolable-titre_sous_section"><h4 class="meme">Réunion de validation du plan de communication de l'UFR SEFS </h4> </div>
                                <div class="d-none d-sm-block">
                                    
                                    <h5 class="meme2"> L’Université Gaston Berger de Saint Louis a abrité du 08 au 11 Janvier 2024, un
                                        atelier de formation sur la prévention de la violence électorale organisé par le
                                        Gorée Institute : Centre pour la Démoc....<button type="button"
                                        class="btn btn-outline-primary btn-sm btn_outline_pse"> Lire la
                                        suite </button> </h5>
                                    <div class="share_more mt-3">
                                        <div class="d-flex align-content-start flex-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-50 mb-2">
                        </div>
                        <div class="row info_element ">
                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt="" srcset=""
                                    class="w-100 d-none d-md-block img-article" src="img/logo-ugb.jpg"></div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="menueScrolable-titre_sous_section"> <h4 class="meme">Une délégation de l’Université Nangui Abrogoua de Côte d’Ivoire en visite à l’UGB. </h4></div>
                                <div class="d-none d-sm-block">
                                
                                        <h5 class="meme2">L’UFR de Sciences Juridique et Politique(SJP) de l’Université Gaston Berger de Saint
                                            Louis à travers son Département droit Privé a abrité du 10 au 12 Janvier 2024 au CEA
                                            MITIC un forum sur les«&nbsp;enje.... <button type="button"
                                            class="btn btn-outline-primary btn-sm btn_outline_pse"> Lire la suite </button></h5> 
                                    
                                    <div class="share_more mt-3">
                                        <div class="d-flex align-content-start flex-wrap"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="w-50 mb-2">
                        </div>
                        
                    </div>
                    <div></div>
                </div>
            </div>
          </div>

            <div class="col-2">
                
                <div  class="row" id="div_5">
                    <div class="row" id="wagnil" >
                        <div class="col-2" ><h4><i class="fa fa-graduation-cap" id="h_11"></i></h4></div>
                        <div class="col-7"><h3 id="h_111">Espace</h3></div>      
                    </div>
                    <div class="row" id="h_11"><div class="col-12"><h3>privé</h3></div></div>
                    <div class="row" id="coll">
                        <h6 ><i  class="fa fa-lightbulb"></i> Veuillez vous connecter pour accéder à votre espace privé.</h6>
                    </div>
                    <div class="row" id="div_4">
                        <div class="col-12">
                            <button id="but5" type="button" class="btn btn-outline-warning">
                          
                            <h6 id="deco">  <i id="ii" class="fa fa-sign-in-alt "></i>Se connecter</h6>
                            </button>
                        </div>
                    </div>
                    <hr>
                </div>
                <!------------------------------------->
                <div class="row" id="div_66">
                    <div id="boulo" class="row">
                        <div class="col-2" ><h3><i _ngcontent-mue-c113="" class="fa fa-hand-holding"></i></h3></div>
                        <div class="col-7"><h2>Guides</h2></div>
                    </div>
                    <div class="row">
                        <h6> Veuillez vous connecter pour accéder à votre espace privé.</h6>
                    </div>
                    <div class="row">
                        <h6> Pour tout savoir sur l'utilisation de ce portail, veuillez télécharger:</h6>
                        <div id="ddd" class="container d-flex justify-content-center mb-3">
                            <button type="button"  class="btn text-white w-100 bg_jaune shadow-lg btn-pse">
                                <i class="fa fa-file-pdf"></i> Le guide d'utilisation
                            </button>
                        </div>
                        <h6>Ou consulter</h6>
                    </div>
                    <hr>
                    <div class="row" id="div_4">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <button type="button" class="btn text-white shadow-lg bg_jaune btn-pse m-0">
                                <i class="fa fa-globe"></i> <span class="d-inline">Le guide en ligne</span>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <!------------------------------------->

                <!------------------------------------->
             
           
                <!------------------------------------->
            
            </div>

            <div class="col-1"></div>
        </div>
</div>

     
     <!--Scroll automatique--->







 <!--Video--->


                <div class="container">
                    <div class="row" >
                      <div class="col-1"></div>
                        <div class="col-10">
                        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/xZhfQyfUOLQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-1"></div>
                </div>

<!--Video--->
<footer>
    <div class="">
       <div class="row" id="foot">
                <div class="col-5"></div>
                <div class="col-4"> Copyright © CCOS| 2024</div>
                <div class="col-2"></div>
       </div>
    </div>
</footer>
</body>
</html>
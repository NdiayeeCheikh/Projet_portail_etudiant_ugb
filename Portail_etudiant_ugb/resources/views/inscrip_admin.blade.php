<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylePersonaliser/styleGenerale.css">

    <title>Inscription Administrative</title>
</head>

<body>
    <div class="wrapper">


        <!-- Sidebar -->
        <aside id="sidebar" class="col-auto col-md-2 min-vh-100 d-md-block compacted">
            <div class="h-100 ">

                <div class="sidebar-logo">
                    <img src="img/logoPSE.png" class="img-fluid rounded me-2" alt="logo">
                </div>

                <!-- Sidebar Navigation -->

                <ul class="sidebar-nav">



                    <!-- acceuile -->

                    <li class="menu-item   sidebar-item">
                        <a href="dashbord.html" class="nav-link px-3 sidebar-link"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;"
                            title="Accueil">
                            <span class="me-2"><i class="bi bi-house-door-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Accueil</span>
                        </a>
                    </li>



                    <!-- le lien Inscription Administrative -->
                    <li class="menu-item estActive sidebar-item">
                        <a href="inscriptionAdministrative.html" class="nav-link px-3 active sidebar-link"
                            title="Inscription Administrative"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2">


                                <i class="bi bi-archive-fill menu-icon"></i>
                            </span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Inscription Administrative</span>


                        </a>
                    </li>

                    <!-- le lien Inscription Pedagogique -->
                    <li class="menu-item sidebar-item">
                        <a href=" inscriptionPedagogique.html" title="Inscription Pédagogique"
                            class="nav-link px-3 active sidebar-link"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2"><i class="bi bi-file-earmark-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Inscription Pedagogique</span>
                        </a>
                    </li>


                    <!-- le lien Consultation de Notes -->
                    <li class="menu-item sidebar-item">
                        <a href="consultationNote.html" class="nav-link px-3 active sidebar-link"
                            title="Consultation de Notes"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2"><i class="bi bi-eye-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Consultation de Notes</span>
                        </a>
                    </li>


                    <!-- le lien Information -->
                    <li class="menu-item sidebar-item">
                        <a href="information.html" class="nav-link px-3 active sidebar-link" title="Information"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2"><i class="bi bi-info-circle-fill menu-icon"></i></span>
                            <span class="menu-title ms-3 d-none d-sm-inline">Information</span>
                        </a>
                    </li>



                    <!-- le lien Aide -->
                    <li class="menu-item sidebar-item">
                        <a href="aide.html" class="nav-link px-3 active sidebar-link" title="Aide"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2"><i class="bi bi-question-circle-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Aide</span>
                        </a>
                    </li>


                </ul>
            </div>
        </aside>

        <!-- Main Component -->
        <div class="main">

           
            <!-- BARE NAVIGATION SUPERIEUR  -->
            <nav class="navbar navbar-expand px-3 border-bottom " style="background-color: #B25F35; color: white;">



                <div class="d-flex align-items-center">

                    <div class="text-left">
                        <button class="btn" type="button" data-bs-theme="dark">
                            <span class="navbar-toggler-icon" style="color: white;"></span>
                        </button>
                    </div>

                    <div class="navbar-brand d-flex justify-content-center text-center fw-bold text-uppercase tire_verticale"
                        style="border-left: 1px solid #ebebeb;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                            class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                            <path
                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z" />
                            <path
                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z" />
                        </svg>

                        Portail de Services aux Étudiants
                    </div>

                    <div class="collapse navbar-collapse" id="topNavBar" style="color: wheat;">
                        <ul class="navbar-nav d-flex ms-auto my-3 my-lg-0">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle ms-2" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-person-fill"></i>
                                    Nom utilisateur
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Se Déconnecter</a></li>
                                    <li><a class="dropdown-item" href="#">Paramètres</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>



            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">



                        <div class="container-lg">

                            <!-- LIGNE VIDE -->

                            <div class="row">
                                <div class="col-md-12">
                                    <h4></h4>
                                </div>
                            </div>

                            

                            <!--  CENTRAL -->
                            
                            <div class="row">
                            
                            
                            
                                <div class=" col-xl-9 col-lg-9 col-md-9 col-sm-12 py-5">
                                    <div class="border shadow-lg mb-2 bg-white rounded p-3">
                            
                            
                                        <!-- information -->
                                        <div class="  py-5">
                                            <h4 class="menueScrolable_texteInfotmation">
                            
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-person-vcard-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                                </svg> Inscription Administrative
                                            </h4>
                            
                                            <div class="overflow-auto " style="height: 533px;">
                            
                                                <div class="container " style="margin-top: 3rem!important;">

                                                <div  class="mt-5">
                                                    <br >
                                                    <p  class="big_indication mb-5 text-center">
                                                         Veuillez passer à la scolarité pour démarrer votre inscription:
                                                    </p>

                                                    <div  class="alert alert-danger text-center "> Vos informations de
                                                        délibération ne sont pas encore disponibles sur cette plateforme!
                                                    </div>

                                                    <div  class="d-flex justify-content-center">
                                                        <button id="boutonConsultationDossier" type="button" class="big_button mb-5 w-75 bg_mouvant">
                                                            
                                                            <span  class="text-white">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right"
                                                                    viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd"
                                                                        d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                                                </svg>
                                                                Consulter mon dossier 
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                            
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- LE MENUE A droite -->
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 py-5">
                            
                                    <div class="border shadow-lg mb-2 bg-white rounded p-3">
                            
                                    <div  class="section_container" style="width: 100%;">

                                        <h4  class="text_bleu_claire font-weight-bolder titre_section">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hourglass-split"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                            </svg> Etapes 
                                        </h4>

                                        <div  class="etat_container">

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img  alt="" class="icone_etat"  src="img/etats/etat_0.png">
                                                        
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat"> Démarrage</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat"> Formation</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat"> Frais d'inscription</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat">Bibliothèque</p><!----><!---->
                                                    </div>
                                                </div>
                                            </div>

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat">Visite Médicale</p><!---->
                                                    </div>
                                                </div>
                                            </div>

                                            <div  class="etat_items">
                                                <div  class="d-flex">
                                                    <img alt="" class="icone_etat" src="img/etats/etat_0_last.png">
                                                    <div  class="text_etat">
                                                        <p  class="titre_etat">Carte d'étudiant</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                            
                            
                                    </div>
                                </div>
                            </div>

                          

                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="fixed">
        <div class="text-center">
            <p class="text_marron"> Copyright © <strong> CCOS</strong>|
                2024 </p>
        </div>

    </footer>


    <script src="js/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>

    <script src="js/scriptPersonaliser/script.js"></script>

    <script>
        $(document).ready(function () {
            // Attache un gestionnaire d'événements de clic au bouton
            $("#boutonConsultationDossier").click(function () {
                // Redirection vers la page de consultation de dossier
                window.location.href = "dossierEtudiant.html";
            });
        });
    </script>
</body>

</html>
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
    
    <title>Dashbord</title>
</head>

<body>
    <div class="wrapper">

       
        <!-- Sidebar -->
        <aside id="sidebar" class="col-auto col-md-2 min-vh-100 d-md-block compacted" >
            <div class="h-100 ">
               
                <div class="sidebar-logo">
                    <img src="img/logoPSE.png" class="img-fluid rounded me-2"  alt="logo">
                </div>

                <!-- Sidebar Navigation -->

                <ul class="sidebar-nav">
                    


                    <!-- acceuile -->
                    
                    <li class="menu-item  estActive sidebar-item">
                        <a href="dashbord.html" class="nav-link px-3 sidebar-link"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;" title="Accueil">
                            <span class="me-2"><i class="bi bi-house-door-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Accueil</span>
                        </a>
                    </li>
                    
                    
                    
                    <!-- le lien Inscription Administrative -->
                    <li class="menu-item sidebar-item">
                        <a href="{{route('inscrip_admin')}}" class="nav-link px-3 active sidebar-link" title="Inscription Administrative" style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2">
                                <i class="bi bi-archive-fill menu-icon"></i>
                            </span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Inscription Administrative</span>
                        </a>
                        
                    </li>
                    
                    <!-- le lien Inscription Pedagogique -->
                    <li class="menu-item sidebar-item">
                        <a href=" inscriptionPedagogique.html" title="Inscription Pédagogique" class="nav-link px-3 active sidebar-link"
                            style="color: #b25f35 !important; font-size: 18px !important; font: 500 !important;">
                            <span class="me-2"><i class="bi bi-file-earmark-fill menu-icon"></i></span>
                            <span class="menu-title  ms-3 d-none d-sm-inline">Inscription Pedagogique</span>
                        </a>
                    </li>
                    
                    
                    <!-- le lien Consultation de Notes -->
                    <li class="menu-item sidebar-item">
                        <a href="consultationNote.html" class="nav-link px-3 active sidebar-link" title="Consultation de Notes"
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
            
            <!-- Barre de navigation supérieure  -->
            <!-- <nav class="navbar navbar-expand px-3 border-bottom " style="background-color: #B25F35; color: white;">
                Button for sidebar toggle 
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon" style="color: white;"></span>
                </button>
            </nav> -->

            <nav class="navbar navbar-expand px-3 border-bottom " style="background-color: #B25F35; color: white;">
                
                

                <div class="d-flex align-items-center" >

                    <div class="text-left">
                        <button class="btn" type="button" data-bs-theme="dark">
                            <span class="navbar-toggler-icon" style="color: white;"></span>
                        </button>
                    </div>
                
                    <div class="navbar-brand d-flex justify-content-center text-center fw-bold text-uppercase tire_verticale"  style="border-left: 1px solid #ebebeb;">
                       
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-mortarboard-fill"
                            viewBox="0 0 16 16">
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
                                <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                            <!-- LIGNE DES CARTES -->

                            <!-- Debut : les cartes -->

                            <div class="row">

                                <!-- carte de l'inscription administrative -->

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <div class="card h-100 cart_inscription_administrative">
                                        <div
                                            class="card-body py-5 d-flex flex-column justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                fill="currentColor" class="bi bi-person-vcard mb-3" viewBox="0 0 16 16">
                                                <path
                                                    d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
                                                <path
                                                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z" />
                                            </svg>
                                            <div class="text-center">
                                                Inscription Administrative
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- carte de l'inscription pedagogique -->

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <div class="card   h-100 cart_inscription_pedagogique">
                                        <div
                                            class="card-body py-5 d-flex flex-column justify-content-center align-items-center">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                fill="currentColor" class="bi bi-check-circle mb-3" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path
                                                    d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                                            </svg>

                                            <div class="text-center">
                                                Inscription Pedagogique
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <div class="card  h-100 cart_consultation_note">
                                        <div
                                            class="card-body py-5 d-flex flex-column justify-content-center align-items-center">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                fill="currentColor" class="bi bi-eye mb-3" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                                <path
                                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                            </svg>

                                            <div class="text-center">
                                                Consultation Notes
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 mb-3">
                                    <div class="card  h-100 cart_aide">
                                        <div
                                            class="card-body py-5 d-flex flex-column justify-content-center align-items-center">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64"
                                                fill="currentColor" class="bi bi-question-circle mb-3"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path
                                                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                            </svg>

                                            <div class="text-center">
                                                Aide
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- FIN : les cartes -->

                            <!--  CENTRAL -->

                            <div class="row">



                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 py-5">
                                    <div class="border shadow-lg mb-2 bg-white rounded p-3">


                                        <!-- information -->
                                        <div class="menuDroite-section_container  py-5">
                                            <h4 class="menueScrolable_texteInfotmation">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33"
                                                    fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                                                    <path
                                                        d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                                                </svg> Informations
                                            </h4>

                                            <div class="overflow-auto" style="height: 533px;">

                                                <div class="container">

                                                    <div class="">

                                                        <div class="row info_element ">

                                                            <div class="col-lg-3 col-md-3 col-sm-12">
                                                                <img alt="" srcset=""
                                                                    class="w-100 d-none d-md-block img-article "
                                                                    src="img/activation_mail.jpg">
                                                            </div>

                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="menueScrolable-titre_sous_section"> Une
                                                                    délégation de l’Université
                                                                    Nangui Abrogoua de Côte d’Ivoire en visite à l’UGB.
                                                                </div>
                                                                <div class="d-none d-sm-block">
                                                                    <p>
                                                                        Le recteur, Pr Magatte Ndiaye a reçu, ce 22
                                                                        janvier 2024, la visite de
                                                                        l’équipe
                                                                        du
                                                                        Contrat De Performance(CDP) de l’Université
                                                                        Nangui Abrogoua de Côte
                                                                        d’Ivoire
                                                                        avec à
                                                                        sa tête le Pr Hortense T. ATTA D.... <button
                                                                            type="button"
                                                                            class="btn btn-outline-primary btn-sm btn_outline_pse">
                                                                            Lire la
                                                                            suite
                                                                        </button>
                                                                    </p>
                                                                    <div class="share_more mt-3">
                                                                        <div
                                                                            class="d-flex align-content-start flex-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="w-50 mb-2">
                                                        </div>
                                                        <div class="row info_element ">
                                                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt=""
                                                                    srcset=""
                                                                    class="w-100 d-none d-md-block img-article"
                                                                    src="img/consultation@2x (1).png"></div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="menueScrolable-titre_sous_section"> Pour une
                                                                    place de la recherche
                                                                    documentaire dans les établissements d’enseignement
                                                                    supérieur et de
                                                                    recherche.
                                                                </div>
                                                                <div class="d-none d-sm-block">
                                                                    <p>
                                                                        Le Consortium des Bibliothèques de
                                                                        l’Enseignement Supérieur et de la
                                                                        Recherche
                                                                        (COBESS) s’est réuni du 18 au 20 janvier 2024 à
                                                                        l’Université Gaston
                                                                        Berger de
                                                                        Saint-Louis pour réfléchir sur l’élaborati....
                                                                        <button type="button"
                                                                            class="btn btn-outline-primary btn-sm btn_outline_pse">
                                                                            Lire la
                                                                            suite </button></p>
                                                                    <div class="share_more mt-3">
                                                                        <div
                                                                            class="d-flex align-content-start flex-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="w-50 mb-2">
                                                        </div>
                                                        <div class="row info_element ">
                                                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt=""
                                                                    srcset=""
                                                                    class="w-100 d-none d-md-block img-article"
                                                                    src="img/edt@2x.png"></div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="menueScrolable-titre_sous_section"> Visite
                                                                    de courtoisie du Recteur,
                                                                    Président du Conseil académique, Pr Magatte Ndiaye
                                                                    aux nouveaux bacheliers.
                                                                </div>
                                                                <div class="d-none d-sm-block">
                                                                    <p>
                                                                        Le recteur, Pr Magatte NDIAYE a rendu une visite
                                                                        de courtoisie à la
                                                                        Direction de
                                                                        la
                                                                        Scolarité, de l’Orientation et des Statistiques
                                                                        (DSOS) ce mardi 16
                                                                        janvier 2024.
                                                                        Il
                                                                        a été reçu par le Directeur de .... <button
                                                                            type="button"
                                                                            class="btn btn-outline-primary btn-sm btn_outline_pse">
                                                                            Lire la
                                                                            suite
                                                                        </button>
                                                                    </p>
                                                                    <div class="share_more mt-3">
                                                                        <div
                                                                            class="d-flex align-content-start flex-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="w-50 mb-2">
                                                        </div>
                                                        <div class="row info_element ">
                                                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt=""
                                                                    srcset=""
                                                                    class="w-100 d-none d-md-block img-article"
                                                                    src="img/Inscription admin@2x.png">
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="menueScrolable-titre_sous_section">
                                                                    Prévention de la violence
                                                                    électorale
                                                                    : Gorée Institute sensibilise la jeunesse. </div>
                                                                <div class="d-none d-sm-block">
                                                                    <p>
                                                                        L’Université Gaston Berger de Saint Louis a
                                                                        abrité du 08 au 11 Janvier
                                                                        2024, un
                                                                        atelier de formation sur la prévention de la
                                                                        violence électorale
                                                                        organisé par le
                                                                        Gorée Institute : Centre pour la Démoc....
                                                                        <button type="button"
                                                                            class="btn btn-outline-primary btn-sm btn_outline_pse">
                                                                            Lire la
                                                                            suite </button></p>
                                                                    <div class="share_more mt-3">
                                                                        <div
                                                                            class="d-flex align-content-start flex-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="w-50 mb-2">
                                                        </div>
                                                        <div class="row info_element ">
                                                            <div class="col-lg-3 col-md-3 col-sm-12"><img alt=""
                                                                    srcset=""
                                                                    class="w-100 d-none d-md-block img-article"
                                                                    src="img/logo-ugb.jpg"></div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <div class="menueScrolable-titre_sous_section"> Forum
                                                                    sur la ZLECAF : des
                                                                    experts
                                                                    insistent sur l’implication de l’espace
                                                                    universitaire </div>
                                                                <div class="d-none d-sm-block">
                                                                    <p>
                                                                        L’UFR de Sciences Juridique et Politique(SJP) de
                                                                        l’Université Gaston
                                                                        Berger de
                                                                        Saint
                                                                        Louis à travers son Département droit Privé a
                                                                        abrité du 10 au 12 Janvier
                                                                        2024 au
                                                                        CEA
                                                                        MITIC un forum sur les «&nbsp;enje.... <button
                                                                            type="button"
                                                                            class="btn btn-outline-primary btn-sm btn_outline_pse">
                                                                            Lire la
                                                                            suite
                                                                        </button>
                                                                    </p>
                                                                    <div class="share_more mt-3">
                                                                        <div
                                                                            class="d-flex align-content-start flex-wrap">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr class="w-50 mb-2">
                                                        </div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- LE MENUE A droite -->
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 py-5">

                                    <div class="border shadow-lg mb-2 bg-white rounded p-3">

                                        <div class="section_container">

                                            <h4 class="text_bleu_claire font-weight-bold menueScrolable-titre_section"
                                                style="font-size: 20px; color: #3588b2 !important">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                                    <path
                                                        d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a2 2 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139q.323-.119.684-.12h5.396z" />
                                                </svg>
                                                Appel(s) à candidatures
                                            </h4>
                                            <span class="user-title"
                                                style="font-size: 0.75rem; line-height: 1rem; color: #424242; font-family: Roboto, sans-serif; font-weight: 400; color: #3588B2;">
                                                <i style="color: #B25F35;">Liste des
                                                    candidatures en ligne</i>
                                            </span>

                                            <div class="overflow-auto" style="min-height: 100px;">
                                                <div class="container">

                                                    <div class="alert alert-info text-center ">
                                                        Aucune candidature disponible.</div>

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
</body>

</html>
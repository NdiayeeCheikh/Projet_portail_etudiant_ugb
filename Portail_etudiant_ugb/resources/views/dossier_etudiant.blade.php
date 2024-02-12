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

    <title>Dossier Etudiant</title>
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
                                        <div  class="border section_container">

                                            <h4  class="text_bleu_claire font-weight-bolder titre_section">
                                               
                                                <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" fill="currentColor" class="bi bi-person-vcard-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0" />
                                                </svg> Inscription administrative 
                                                </h4>
                                                <br>
                                                
                                            <div  class="dossier-etudiant bg-white">
<!-- 
                                                <ul class="nav justify-content-center">
                                                    

                                                    <li class="nav-item">
                                                        <a href=""  class="tab_link nav-link nav-item " id="ngb-nav-2" role="tab" aria-selected="false"
                                                            aria-disabled="false">
                                                        
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                            </svg>
                                                            Informations personnelles
                                                        </a>
                                                    </li>

                                                    <li class="nav-item tab_link nav-link   active">
                                                        <a href=""  class="tab_link nav-link nav-item  active" id="ngb-nav-3" role="tab" aria-selected="true"
                                                            aria-disabled="false" aria-controls="ngb-nav-3-panel">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                                            </svg> Formations
                                                        </a>
                                                    </li>
                                                   
                                                </ul> -->
                                                
                                                <nav   class="nav-tabs nav" role="tablist">
                                                    <a  href=""
                                                         class="tab_link nav-link nav-item " id="ngb-nav-2" role="tab"
                                                        aria-selected="false" aria-disabled="false">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                                        </svg>
                                                        Informations personnelles
                                                    </a>
                                                        
                                                        <a  href="" 
                                                        class="tab_link nav-link nav-item  active" id="ngb-nav-3" role="tab"
                                                        aria-selected="true" aria-disabled="false" aria-controls="ngb-nav-3-panel">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                                        </svg> Formations
                                                    </a>
                                                        
                                                </nav>

                                                <div class="mt-2 tab-dossier-etudiant tab-content">
                                                    <div class="tab-pane active " id="ngb-nav-3-panel" role="tabpanel" aria-labelledby="ngb-nav-3">
                                                
                                                
                                                        <div class="container">
                                                            <div class="row">
                                                
                                                            </div>
                                                
                                                            <div class="alert alert-danger text-center ">
                                                
                                                                Vous n'avez pas encore déclenché votre inscription!
                                                            </div>
                                                
                                                            <div class="formation_anterieur">
                                                                <span class="titre_history_formation text_marron_claire"> Formation(s) antérieure(s)
                                                                </span>
                                                
                                                                <br><br>
                                                
                                                                <table class="table table-bordered table_formation_anterieur ">
                                                
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" class="text_bleu_claire text-center">UFR
                                                                            </th>
                                                                            <th scope="col" class="text_bleu_claire text-center">
                                                                                Filière</th>
                                                                            <th scope="col" class="text_bleu_claire text-center">
                                                                                Niveau</th>
                                                                            <th scope="col" class="text_bleu_claire text-center">
                                                                                Année académique</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="">
                                                                            <td class="text_bleu text-center">SAT</td>
                                                                            <td class="text_bleu text-center">Gestion de Données et
                                                                                Ingénierie Logicielle</td>
                                                                            <td class="text_bleu text-center">MASTER 1</td>
                                                                            <td class="text_bleu text-center">2022-2023</td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text_bleu text-center">SAT</td>
                                                                            <td class="text_bleu text-center">Informatique</td>
                                                                            <td class="text_bleu text-center">LICENCE 3</td>
                                                                            <td class="text_bleu text-center">2021-2022</td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text_bleu text-center">SAT</td>
                                                                            <td class="text_bleu text-center">Mathématiques Physique
                                                                                et Informatique</td>
                                                                            <td class="text_bleu text-center">LICENCE 2</td>
                                                                            <td class="text_bleu text-center">2020-2021</td>
                                                                        </tr>
                                                                        <tr class="">
                                                                            <td class="text_bleu text-center">SAT</td>
                                                                            <td class="text_bleu text-center">Mathématiques Physique
                                                                                et Informatique</td>
                                                                            <td class="text_bleu text-center">LICENCE 1</td>
                                                                            <td class="text_bleu text-center">2019-2020</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                
                                                            </div>
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

                                        <div class="section_container" style="width: 100%;">

                                            <h4 class="text_bleu_claire font-weight-bolder titre_section">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                    fill="currentColor" class="bi bi-hourglass-split"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
                                                </svg> Etapes
                                            </h4>

                                            <div class="etat_container">

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0.png">

                                                        <div class="text_etat">
                                                            <p class="titre_etat"> Démarrage</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                        <div class="text_etat">
                                                            <p class="titre_etat"> Formation</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                        <div class="text_etat">
                                                            <p class="titre_etat"> Frais d'inscription</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                        <div class="text_etat">
                                                            <p class="titre_etat">Bibliothèque</p><!----><!---->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0.png">
                                                        <div class="text_etat">
                                                            <p class="titre_etat">Visite Médicale</p><!---->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="etat_items">
                                                    <div class="d-flex">
                                                        <img alt="" class="icone_etat" src="img/etats/etat_0_last.png">
                                                        <div class="text_etat">
                                                            <p class="titre_etat">Carte d'étudiant</p>
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
</body>

</html>

<div class="tab-pane active ng-star-inserted" id="ngb-nav-0-panel" role="tabpanel" aria-labelledby="ngb-nav-0">
    <ngx-infos-personnelles   class="ng-star-inserted">
        <div  class="accordions-container">
            <div  class="row">
                <div  class="col-md-12 text-center text_marron_claire message_alert"> 
                    
                Veuillez remplir ce formulaire d'abord.
              </div>

            </div>
            
            <div  class="row">
                <div class="col-md-12 text-center text_bleu message_erreur_champs_status-desactive">

                </div>
                     Les champs grisés ne
                    peuvent pas être modifiés. Les champs precédés de "<span 
                        class="etoile">*</span>" sont <span 
                        class="etoile">obligatoires</span>.<br > Si vous y trouvez des erreurs,
                    veuillez les signaler à la scolarité. 
                </div>
            </div>
            
            <form   class="form_infos_perso ng-untouched ng-pristine ng-valid">
                <nb-accordion ><nb-accordion-item  _nghost-ruy-c80=""
                        class="collapsed"><nb-accordion-item-header  _nghost-ruy-c82=""
                            class="ng-tns-c82-21 accordion-item-header-collapsed ng-star-inserted" aria-expanded="false"
                            tabindex="0" aria-disabled="false"> Etat Civil <nb-icon _ngcontent-ruy-c82=""
                                icon="chevron-down-outline" pack="nebular-essentials"
                                class="expansion-indicator ng-tns-c82-21 ng-trigger ng-trigger-expansionIndicator ng-star-inserted"
                                _nghost-ruy-c45=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    width="100%" height="100%" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <g data-name="chevron-down">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path
                                                d="M12 15.5a1 1 0 0 1-.71-.29l-4-4a1 1 0 1 1 1.42-1.42L12 13.1l3.3-3.18a1 1 0 1 1 1.38 1.44l-4 3.86a1 1 0 0 1-.68.28z">
                                            </path>
                                        </g>
                                    </g>
                                </svg></nb-icon><!----></nb-accordion-item-header><nb-accordion-item-body
                             class="ng-tns-c81-22 ng-star-inserted">
                            <div class="ng-tns-c81-22 ng-trigger ng-trigger-accordionItemBody"
                                style="overflow: hidden; visibility: hidden; height: 0px;">
                                <div class="item-body ng-tns-c81-22">
                                    <div  class="container ng-tns-c81-22">
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Code Etudiant : </label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="codeEtu" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">INE :</label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="ine" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Prénom(s) :</label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="prenomEtu" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Nom :</label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="nomEtu" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Nom de jeune fille :
                                                </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="nomJeuneFilleEtu"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition">
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Date de Naissance :</label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="date" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="dateNaissEtu"
                                                    value="dateNaissEtu | date: 'MM/dd/yyyy'" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Lieu de Naissance :</label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="lieuNaissEtu" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">CNI : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="numDocIdentite" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Sexe : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="sexe" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Situation matrimoniale :
                                                    <span  class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><select
                                                     fullwidth="" activated=""
                                                    formcontrolname="statutMarital" name="statutMarital"
                                                    class="ng-untouched ng-pristine ng-valid">
                                                    <option  value="">Selectionner</option>
                                                    <option  value="0">Célibataire</option>
                                                    <option  value="1">Marié(e)</option>
                                                    <option  value="2">Veuf(ve)</option>
                                                    <option  value="3">Divorcé(e)</option>
                                                </select><!----></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Régime : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="regime" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Nationalité : </label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="pays" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Profession : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="profession"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nb-accordion-item-body></nb-accordion-item><nb-accordion-item 
                        _nghost-ruy-c80="" class="collapsed"><nb-accordion-item-header 
                            _nghost-ruy-c82="" class="ng-tns-c82-23 accordion-item-header-collapsed ng-star-inserted"
                            aria-expanded="false" tabindex="0" aria-disabled="false"> Contacts <nb-icon
                                _ngcontent-ruy-c82="" icon="chevron-down-outline" pack="nebular-essentials"
                                class="expansion-indicator ng-tns-c82-23 ng-trigger ng-trigger-expansionIndicator ng-star-inserted"
                                _nghost-ruy-c45=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    width="100%" height="100%" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <g data-name="chevron-down">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path
                                                d="M12 15.5a1 1 0 0 1-.71-.29l-4-4a1 1 0 1 1 1.42-1.42L12 13.1l3.3-3.18a1 1 0 1 1 1.38 1.44l-4 3.86a1 1 0 0 1-.68.28z">
                                            </path>
                                        </g>
                                    </g>
                                </svg></nb-icon><!----></nb-accordion-item-header><nb-accordion-item-body
                             class="bg-white ng-tns-c81-24 ng-star-inserted">
                            <div class="ng-tns-c81-24 ng-trigger ng-trigger-accordionItemBody"
                                style="overflow: hidden; visibility: hidden; height: 0px;">
                                <div class="item-body ng-tns-c81-24">
                                    <div  class="container ng-tns-c81-24">
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Adresse :</label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="adresseEtu"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition">
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Téléphone : <span
                                                         class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="telEtu"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!----><!---->
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Email personnel : <span
                                                         class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="emailEtu"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!----><!---->
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Email institutionnel :
                                                </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="emailUGB" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nb-accordion-item-body></nb-accordion-item><nb-accordion-item 
                        _nghost-ruy-c80="" class="collapsed"><nb-accordion-item-header 
                            _nghost-ruy-c82="" class="ng-tns-c82-25 accordion-item-header-collapsed ng-star-inserted"
                            aria-expanded="false" tabindex="0" aria-disabled="false"> Personne à contacter en cas
                            d'urgence <nb-icon _ngcontent-ruy-c82="" icon="chevron-down-outline"
                                pack="nebular-essentials"
                                class="expansion-indicator ng-tns-c82-25 ng-trigger ng-trigger-expansionIndicator ng-star-inserted"
                                _nghost-ruy-c45=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    width="100%" height="100%" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <g data-name="chevron-down">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path
                                                d="M12 15.5a1 1 0 0 1-.71-.29l-4-4a1 1 0 1 1 1.42-1.42L12 13.1l3.3-3.18a1 1 0 1 1 1.38 1.44l-4 3.86a1 1 0 0 1-.68.28z">
                                            </path>
                                        </g>
                                    </g>
                                </svg></nb-icon><!----></nb-accordion-item-header><nb-accordion-item-body
                             class="ng-tns-c81-26 ng-star-inserted">
                            <div class="ng-tns-c81-26 ng-trigger ng-trigger-accordionItemBody"
                                style="overflow: hidden; visibility: hidden; height: 0px;">
                                <div class="item-body ng-tns-c81-26">
                                    <div  class="container ng-tns-c81-26">
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Prénom(s) parent : <span
                                                         class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="prenomParent"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!---->
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Nom parent : <span
                                                         class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="nomParent"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!---->
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Adresse parent : </label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="adresseParent"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition">
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Téléphone parent : <span
                                                         class="etoile">*</span></label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="telParent"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!----><!---->
                                            </div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Email parent : </label>
                                            </div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" activated=""
                                                    fullwidth="" fieldsize="small" formcontrolname="emailParent"
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nb-accordion-item-body></nb-accordion-item><nb-accordion-item 
                        _nghost-ruy-c80="" class="collapsed"><nb-accordion-item-header 
                            _nghost-ruy-c82="" class="ng-tns-c82-27 accordion-item-header-collapsed ng-star-inserted"
                            aria-expanded="false" tabindex="0" aria-disabled="false"> Autres informations <nb-icon
                                _ngcontent-ruy-c82="" icon="chevron-down-outline" pack="nebular-essentials"
                                class="expansion-indicator ng-tns-c82-27 ng-trigger ng-trigger-expansionIndicator ng-star-inserted"
                                _nghost-ruy-c45=""><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    width="100%" height="100%" viewBox="0 0 24 24">
                                    <g data-name="Layer 2">
                                        <g data-name="chevron-down">
                                            <rect width="24" height="24" opacity="0"></rect>
                                            <path
                                                d="M12 15.5a1 1 0 0 1-.71-.29l-4-4a1 1 0 1 1 1.42-1.42L12 13.1l3.3-3.18a1 1 0 1 1 1.38 1.44l-4 3.86a1 1 0 0 1-.68.28z">
                                            </path>
                                        </g>
                                    </g>
                                </svg></nb-icon><!----></nb-accordion-item-header><nb-accordion-item-body
                             class="ng-tns-c81-28 ng-star-inserted">
                            <div class="ng-tns-c81-28 ng-trigger ng-trigger-accordionItemBody"
                                style="overflow: hidden; visibility: hidden; height: 0px;">
                                <div class="item-body ng-tns-c81-28">
                                    <div  class="container ng-tns-c81-28">
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Bourse : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="libelleTypeBourse"
                                                    desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Ordinateur Personnel :
                                                </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="ordiPersoYN" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                        <div  class="row form-group">
                                            <div 
                                                class="col-12 col-md-4 text-right text-left-mobile margin-top-15"><label
                                                     class="text_bleu">Souffrez-vous d'un handicap
                                                    ? : </label></div>
                                            <div  class="col-12 col-md-8"><input
                                                     type="text" nbinput="" fullwidth=""
                                                    fieldsize="small" formcontrolname="handicapYN" desactivated=""
                                                    class="form-control input-full-width size-small status-basic shape-rectangle ng-untouched ng-pristine ng-valid nb-transition"
                                                    readonly=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nb-accordion-item-body></nb-accordion-item></nb-accordion>
                <div  class="row">
                    <div  class="text-center col-12 col-sm-12 col-md-12 text-left"><button
                             type="submit" class="btn btn-save">Enregistrer</button></div>
                </div>
            </form>
        </div>
    </ngx-infos-personnelles><!----></div>
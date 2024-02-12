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

    <title>Consultation notes</title>
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
                    <li class="menu-item  sidebar-item">
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
                    <li class="menu-item estActive sidebar-item">
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




                            <!--  CENTRAL -->

                            <div class="row">



                                <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 py-5">
                                    <div class="border shadow-lg mb-2 bg-white rounded p-3">
                                        <!-- image -->

                                        <div class="container justify-content-start section_container   py-5">

                                            <img src="img/note_non_pub.jpg" class="img-fluid" alt="">

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
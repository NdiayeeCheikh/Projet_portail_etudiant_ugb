<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide d'utilisation du Portail des services numériques de l'étudiant</title>
    
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylePersonaliser/style_aide.css">

</head>

<body>
    <!-- Image Header -->
    <section>
        <img class="shadow-sm w-100" src="./img/entete_pse_8.png" alt="Image PSE" srcset="">
    </section>
    <!-- Image Header -->
    <br>

    <div class="container-lg">
        <div class="row">


            <!-- LE MENUE A GAUCHE -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                <div class="border shadow-lg mb-2 bg-white rounded p-3">
                    <h4 class="text_bleu_claire font-weight-bolder mb-4 titre_section ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-list"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg> Menu
                    </h4>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="accueil_img" class="icone_etat" src="img/etats/active.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="accueil_btn" class="titre_etat etat_active">
                                      
                                        Accueil</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="activation_img" class="icone_etat" src="img/etats/not_active.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="activation_btn"
                                        class="titre_etat text_marron">Activation mail UGB</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="auth_img" class="icone_etat" src="img/etats/not_active.png" alt="">
                                <div class="text_etat">
                                    <a href="#auth_accordion" id="auth_btn" class="titre_etat text_marron">
                                        Authentification centrale</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="inscrip_admin_img" class="icone_etat" src="img/etats/not_active.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="inscrip_admin_btn"
                                        class="titre_etat text_marron"> Inscription administrative</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="inscrip_peda_img" class="icone_etat" src="img/etats/not_active.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="inscrip_peda_btn"
                                        class="titre_etat text_marron">Inscription pédagogique</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="consultation_img" class="icone_etat" src="img/etats/not_active.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="consultation_btn"
                                        class="titre_etat text_marron">Consultation des notes</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="etat_container">
                        <div class="etat_items">
                            <div class="d-flex">
                                <img id="faq_img" class="icone_etat_end" src="img/etats/etat_end.png" alt="">
                                <div class="text_etat">
                                    <a href="#" id="faq_btn" class="titre_etat text_marron">Foire aux
                                        questions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- DIV CENTRAL -->


            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
                <div class="border shadow-lg mb-2 bg-white rounded p-3">
                    <div class="accordion accordion-flush" id="accueil_accordion" >
                        <h4 class="text_bleu_claire font-weight-bolder mb-2 titre_section ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-house-door-fill"
                                viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                            </svg> Accueil
                        </h4>
                        <p class="contenu_text p-3">
                            Dans le cadre de sa politique d'informatisation, l'<span
                                class="text_marron fw-bold">Université
                                Gaston Berger (UGB)</span> a mis en place plusieurs plateformes pour dématérialiser ses
                            procédures de gestion.<br><br>
                            <span class="text_marron fw-bold">eUGB</span> est la plateforme utilisée pour
                            gérer le cursus de l'étudiant : de l'inscription administrative à sa sortie de
                            l'université. Aujourd'hui, elle est renforcée avec la mise en place d'un
                            <span class="text_bleu_claire fw-bold">Portail de Services aux Étudiants.</span>
                            <br><br>
                            Ce portail permet à l'étudiant d'accéder facilement à l'information,
                            de pouvoir, en tout lieu (au campus ou ailleurs), effectuer et être informé(e) de l'état
                            d'évolution de ses inscriptions administrative et pédagogique, consulter ses notes et ses
                            emplois du temps, etc. <br><br>
                            Ce guide illustre les différentes étapes, allant de l'activation de l'adresse e-mail UGB à
                            l'utilisation des services
                            du portail.<br><br>
                            <span class="fw-bold">
                                Aussi, si vous rencontrez des difficultés particulières (oubli de mot de passe ou de
                                l'adresse e-mail personnelle, etc.),
                                nous vous invitons à consulter la <a href="javascript: $('#faq_btn').click();"
                                    id="faq_btn"> Foire Aux Questions (FAQ) </a>.
                            </span><br><br>
                            Si vous avez besoin d'assistance, vous pouvez contacter le service de support du Centre de
                            Calcul Ousmane Seck (CCOS) par e-mail à ccos-support@ugb.edu.sn
                        </p>
                    </div>
                    <div class="accordion accordion-flush" id="activation_accordion" style="display: none;"></div>
                    <div class="accordion accordion-flush" id="auth_accordion" style="display: none;"></div>
                    <div class="accordion accordion-flush" id="inscrip_admin_accordion" style="display: none;"></div>
                    <div class="accordion accordion-flush" id="inscrip_peda_accordion" style="display: none;"></div>
                    <div class="accordion accordion-flush" id="consultation_accordion" style="display: none;"></div>
                    <div class="accordion accordion-flush" id="faq_accordion" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="./bootstrap-5/js/bootstrap.min.js"></script>
    <!-- <script src="js/script_aide.js"></script> -->

</body>

</html>

// GENERALE

// BALCULEMENT SIDEBAR
const toggler = document.querySelector(".btn");
toggler.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("collapsed");
});

//  PAGE INSCRIPTION ADMINISTRATIVE

// redirection en cas de clic sur le bouton boutonConsultationDossier

$(document).ready(function () 
{
  //  PAGE INSCRIPTION ADMINISTRATIVE

  $("#boutonConsultationDossier").click(function () {
    // Redirection vers la page de consultation de dossier
    window.location.href = "dossierEtudiant.html";
  });
});
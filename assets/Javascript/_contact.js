const reservationButton = document.querySelector("#reservation");

reservationButton.addEventListener("click", () => {

  const formulaire = document.createElement("form");
  formulaire.setAttribute("action", "/reservation");
  formulaire.setAttribute("method", "post");

  const inputNom = document.createElement("input");
  inputNom.setAttribute("type", "text");
  inputNom.setAttribute("name", "nom");
  const inputPrenom = document.createElement("input");
  inputPrenom.setAttribute("type", "text");
  inputPrenom.setAttribute("name", "prenom");
  const inputHeure = document.createElement("input");
  inputHeure.setAttribute("type", "time");
  inputHeure.setAttribute("name", "heure");

  formulaire.appendChild(inputNom);
  formulaire.appendChild(inputPrenom);
  formulaire.appendChild(inputHeure);

  document.body.appendChild(formulaire);
  
});
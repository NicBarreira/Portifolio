

function selecionarMini(id) {
  // Alterna os botões ativos
  document.getElementById('masc').classList.remove('active');
  document.getElementById('fem').classList.remove('active');
  document.getElementById(id).classList.add('active');

  // Troca a imagem de perfil
  const img = document.getElementById("foto");
  const genderInput = document.getElementById("gender");

  if (id === "masc") {
    img.src = "/Portifolio/assets/masculino.png";
    genderInput.value = "Masculino";
    
  } else {
    img.src = "/Portifolio/assets/feminina.png";
    genderInput.value = "Feminino";
  }
}




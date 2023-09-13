<?php
session_start();
require_once("header.php") ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="margin: 0">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagens/logo.png" class="d-block w-100 imagem_carousel" alt="..."style="height: 100vh;height: 850;object-fit: cover;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Compre agora seus ingressos</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="Imagens/Homem-Aranha-cartaz.jpg" class="d-block w-100 imagem_carousel" alt="..." style="height: 100vh;height: 850;object-fit: cover;object-position: 0 20%;">
      
    </div>
    <div class="carousel-item">
      <img src="Imagens/avatar-Cartaz.jpg" class="d-block w-100 imagem_carousel" alt="..." style="height: 100vh;height: 850;object-fit: cover;object-position: 0 30%;">
      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>
<br><br><br>

<div class="container text-center">
  <div class="container mt-4 mb-4">
    <h1>Conferências em cartaz</h1>
    <h5>Ingressos Disponiveis!!!</h5>
    <p>Exclusivo e com o melhor valor possivel</p>
  </div>
  <br><br>

  <div class="container mb-5">
    <div class="row">

      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/minions2-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">ANGOTIC</h5>
            <p class="card-text">Angola ICT Forum no CCTA, Maior envento das TICs com SPEARKER de alta Nivel. Nivel nacional e isnternacionalmente conhecido.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data: 17/09/2023</li>
            <li class="list-group-item">Orador: Mario Cassela</li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/morbius-cartaz.jpeg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
              <h5 class="card-title">CIÊNCIA E TECNOLOGIAss</h5>
            <p class="card-text">18º Semana nacional de ciência e tecnologia, A transversalidade da ciÊncia, tecnologia, e inovação para o planeta .</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data: 24/09/2023</li>
            <li class="list-group-item">Orador: Edson Livongue</li>
            <li class="list-group-item">Pré-Compra indisponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/Doutor estranho-Cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">AVANÇO DA WEB 3.0</h5>
            <p class="card-text">Um outro modo mode de ver Web , Tecnologias do futuro.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data: 27/09/2023</li>
            <li class="list-group-item">Orador: Paciência Muienga </li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
    </div>

    <br><br>

    <div class="row">
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/avatar-Cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">3CTP</h5>
            <p class="card-text">CONFERêNCIA DE CIêNCIAS DA COMPUTAÇÃO TENDENCIAS DE PARADIGMAS</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data: 05/10/2023</li>
            <li class="list-group-item">Orador: Mario Pereira</li>
            <li class="list-group-item">Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/Homem-Aranha-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">Angola ICT Forum 2023</h5>
            <p class="card-text">Conectividade e Mordenização Tecnológica.</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Estreia: 17/10/2023</li>
            <li class="list-group-item">Orador: Jorge Loureiro</li>
            <li class="list-group-item">Pré-Compra disponivel</li>
          </ul>

        </div>
      </div>
      <div class="col-sm"style="margin-bottom:40px">
        <div class="card largura_card">
          <img src="Imagens/red-cartaz.jpg" class="card-img-top altura_card" alt="...">
          <div class="card-body" style="min-height:170px">
            <h5 class="card-title">FIBEAT: 7ª Conferência de Ciência e Tecnologia</h5>
            <p class="card-text">FIBEAT é um futuro da tecnologia de amadurecimento e da ciência que oferece woekshops sobre a industria 4.0 em Angola.<p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data: 02/12/2023</li>
            <li class="list-group-item">Orador: Abel Zacarias</li>
            <li class="list-group-item">Pré Compra disponivel</li>
          </ul>

        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>



</div>


<?php
require_once("Rodape.php");
?>

</body>

</html>
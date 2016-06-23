<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/default.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/custom.css" media="screen" title="no title" charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Ceg Noticias</title>
  </head>
  <?php
  $img01 = 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSitzwtzfWJk1BQA9INWv0C10tDEgOyVkPnk-tbq-Y3ebISa8mnJA';
  $img02 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMQH08D2kgDwV0TQ_dly2CFNfZKnvUmUl1gCt9Skm1BtxR9m24';
   ?>
  <body>
    <!-- inicio do cabeçalho -->
    <header id="cabecalho">

    </header>
    <header class="fullwidth c-red fixed card" style="height: 5em">
      <h1 class="left text-white padding-top">CEG NOTICIAS</h1>
      <nav class="right padding-top-2">
        <a href="#" class="text-white padding"><i class="material-icons">home</i></a>
        <a href="#" class="text-white padding">ENTRETENIMENTO</a>
        <a href="#" class="text-white padding">DESPORTO</a>
        <a href="#" class="text-white padding ">TECNOLOGIA</a>
        <a href="#" class="text-white padding ">COMUNIDADE</a>
        <a href="#" class="text-white padding "><i class="material-icons">search</i></a>
      </nav>

    </header>

    <!-- seccao principal dos conteudos -->
    <div class="fullwidth border-1" style="height: auto;">
      <section class="fullwidth border-1" style="height: 30em">
        <h1>slider</h1>
      </section>
      <!-- seccao para todos os posts do jornal -->
      <section class="container border-1 fullwidth" style="height: 30em">
        <aside class=" col-l6 left"  style="height: 30em">
          <div class="">

          </div>
        </aside>
        <aside class="col-third left" style="height: 30em">
          <h2 class="t-center border-bottom ft-tiny">Mais lidas</h2>
          <ul class="padding-top c-list">
            <li class=" card">
              <img src="<?php echo $img01 ?>"  width="35%"alt="" class="left" />
              <div class="padding-left">
                <h3 class="ft-bold">A marca do povo</h3>
                  <h5 class="ft-tiny">Adidas tornou-se a marca mais usada a partir dos anos 80 ...</h5><hr>
                <span class="text-grey f-tiny"><i class="material-icons">event</i>23-06-2016</span>
                <span class="text-grey f-tiny"><i class="material-icons">local_offer</i>Moda</span>
              </div>
            </li>
            <li class="margin-bottom card">
              <img src="<?php echo $img02 ?>"  width="35%" height="80em"alt="" class="left" />
              <div class="padding-left">
                <h3 class="ft-normal">O futuro dos Gamers</h3>
                  <h5 class="ft-tiny">Adidas tornou-se a marca mais usada a partir dos anos 80 ...</h5><hr>
                <span class="text-grey f-tiny"><i class="material-icons">event</i>23-06-2016</span>
                <span class="text-grey f-tiny"><i class="material-icons">local_offer</i>Moda</span>
              </div>
          </ul>


        </aside>
      </section>
      <footer class="container padding-2 c-dark-red fullwidth" style="height: 10em">
        <div class="col-third ">
          <h1>Newsletter</h1>
        </div>
        <div class="col-third ">
          <h1>&copy; 2016</h1>
        </div>
        <div class="col-third ">
          <ul class="c-list">
            <li class=""><a href="#" class="text-white margin-top d-block">Políticas e Termos</a></li>
            <li class="margin-left margin-right"><a href="#" class="text-white margin-top d-block"> Recrutamento</a></li>
            <li><a href="#" class="text-white margin-top d-block">Anúncie aqui</a></li>
          </ul>
        </div>
      </footer>
    </div>
  </body>
</html>

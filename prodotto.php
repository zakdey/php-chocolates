<!DOCTYPE html>

<?php

  $str = file_get_contents('data/prodotti.json');
  $json = json_decode($str, true);
  $pSpecs = ['Ingredienti', 'Conservazione', 'Scadenza', 'Dimensioni', 'Peso netto', 'Prezzo'];

  $par = $_GET[p];
?>

<html>
  <head>
    <title>MV chocosite</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">MV chocosite</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="/index.html">Home <span class="sr-only">(current)</span></a></li>
              <li class="active"><a href="/prodotti.html">Prodotti</a></li>
              <li><a href="/dove-siamo.html">La filosofia</a></li>
              <li><a href="/chi-siamo.html">Chi siamo</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/contatti.html">Contatti</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <?php
        echo "<pre>";
        print_r($product);
        echo $par;
        echo "</pre>";
       ?>


<?php
foreach ($json as $val) {
if ($val[codice]== $par) {?>

  <div class="row">
    <div class="col-md-12">
      <h1>MAISON DU CHOCOLAT - GUANA</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo $val[url_immagine]?>">
    </div>
    <div class="col-md-6">

      <h2><?php echo $val[nome]?></h2>
      <h3><?php echo $val[codice]?></h3>
      <div>
        <strong><?=$pSpecs[0]?></strong>: pasta di cacao, zucchero di canna, burro di cacao, vaniglia. Cacao min. 74%. Può contenere tracce di nocciole, mandorle, pistacchi, noci, latte.
      </div>
      <div>
        <strong><?=$pSpecs[1]?></strong>: conservare in luogo fresco e asciutto, max 18°C. Degustare a temperatura ambiente.
      </div>
      <div>
        <strong><?=$pSpecs[2]?></strong>: 14 mesi
      </div>
      <div>
        <strong><?=$pSpecs[3]?></strong>: 9 x 15,5 x 1,2 cm
      </div>
      <div>
        <strong><?=$pSpecs[4]?></strong>: 50 g
      </div>
      <div>
        <strong><?=$pSpecs[5]?></strong>: 5,00 €
      </div>
    </div>
  </div>
<?
}
        }
        ?>



<?php
?>



    </main>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li>
                <a href="/chi-siamo.html">Chi siamo</a>
              </li>
              <li>
                <a href="/dove-siamo.html">Dove siamo</a>
              </li>
              <li>
                <a href="/filosofia.html">La filosofia</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li>
                <a href="/contatti.html">Contatti</a>
              </li>
              <li>
                <a href="/spedizioni.html">Spedizioni</a>
              </li>
              <li>
                <a href="/regolamento.html">Regolamento</a>
              </li>
              </a>
            </ul>
          </div>
          <div class="col-md-4">
            <address>
              <strong>Choco company, Inc.</strong><br>
              Viale delle bontà, 123<br>
              Pordenone, Italy<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</html>

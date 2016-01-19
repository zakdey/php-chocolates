<?php
include 'libs/libreria.php';
?>
<!DOCTYPE html>
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
    <?php include 'include/header.php'; ?>
    <main>
      <div class="row">
        <div class="col-md-12">
          <h1>Carrello acquisti</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Prodotto</th>
                <th>Quantità</th>
                <th>Prezzo unitario</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>GUANA - cioccolato fondente</td>
                <td>2</td>
                <td>10,00 €</td>
                <td><a href="" class="btn btn-link">rimuovi</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Cioccolato al latte</td>
                <td>1</td>
                <td>3,00 €</td>
                <td><a href="" class="btn btn-link">rimuovi</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Mink - cioccolato fondente</td>
                <td>1</td>
                <td>2,99 €</td>
                <td><a href="" class="btn btn-link">rimuovi</a></td>
              </tr>
              <tr class="success" style="font-weight: bold">
                <th scope="row"></th>
                <td>Totale</td>
                <td>4</td>
                <td>25,99 €</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
        </div>
        <div class="col-md-4">
          <a href="" class="btn btn-success btn-lg">Procedi con l'acquisto</a>
        </div>
      </div>
    </main>
    <?php include 'include/footer.php'; ?>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
</html>

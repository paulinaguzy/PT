<?php
    function renderBook($book)
    {
        if ($book == 'index') {
            include sprintf('books/%s.php', $book);
        } else {
            include sprintf('books/book-%d.php', $book);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paulina Guzy</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
  <header class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-header">
          <h1>PAN TADEUSZ<small> Adam Mickiewicz</small></h1>
          <p class="lead">
          czyli<br>
          OSTATNI ZAJAZD NA LITWIE<br>
          HISTORIA SZLACHECKA Z ROKU 1811 i 1812<br>
          WE DWUNASTU KSIĘGACH WIERSZEM
          </p>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3">
            <div class="row">
              <div class="col-lg-12">
            <ul class="nav nav-pills nav-stacked  list-group-item-success">
                <li <?php echo 'index' == $_GET['book'] ? 'class="active"' : '' ?>><a href="?book=index">SPIS KSIAG</a></li>
                <?php for ($i = 1; $i <= 12; $i++) { ?>
                <li <?php echo $i == $_GET['book'] ? 'class="active"' : '' ?>>
                    <a href="<?= sprintf('?book=%d', $i) ?>">Księga <?= $i ?></a>
                </li>
                <?php } ?>
            </ul>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12">
            <?php echo require ('reflection/list.php') ?>
          </div>
        </div>
        </div>
          <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="row">
              <div class="col-lg-12">
              <?php renderBook($_GET['book']) ?>
            </div>
            </div>
          </div>
        </div>
    </div>
    <footer class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="well">Uniwersytet Ekonomiczny w Krakowie</p>
        </div>
      </div>
    </footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed 
    <script src="assets/js/bootstrap.min.js"></script> -->
  </body>
</html>

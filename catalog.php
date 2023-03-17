<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Каталог</title>

       <!-- Bootstrap core CSS -->
       <link href="css/bootstrap.min.css" rel="stylesheet"> 
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="js/bootstrap.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     
         <link href="css/styles.css" rel="stylesheet">

    
  </head>
  <body>
    
<header>

<?php include "index_navbar.php";?>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">КАТАЛОГ</h1>
        <p class="lead text-muted">Бажаємо приємних покупок</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Кнопка</a>
          <a href="#" class="btn btn-secondary my-2">Кнопка</a>
        </p>
      </div>
    </div>
  </section>

  <div class='album py-5 bg-light'>
        <div class='container'>
            <div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>
                <?php include "product_template_factory.php";
                    foreach($temp as $key=>$item)
                    {
                    $product = new Product($item["ProductName"], $item["Price"], $item["Description"]);
                    echo $product->render(new AlbumTemplateFactory());
                    }
                ?>

             </div>
        </div>
</div>

<?php               
                foreach($temp as $key=>$item)
                    {
                    $product = new Product($item["ProductName"], $item["Price"], $item["Description"]);
                    echo $product->render(new ListTemplateFactory());
                    }
                    ?>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#"></a>
    </p>
    <p class="mb-1"></p>
    <p class="mb-0"><a href="/"></a><a href="../getting-started/introduction/ "></a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

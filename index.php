<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&family=Inconsolata:wght@200&display=swap"
    rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Excuse generator</title>
</head>
<body>
    <header><h1>Excuse generator</h1></header>

    <section class="buttons">
        <button class="addExcuse" onclick="loadForm()">Add Excuse</button>
        <button class="genereteExcuse" onclick="generateExcuse()">Generate Excuse</button>
    </section>
 
      <section class="ajax"><div id="change">
        <?php
          if(isset($_GET["info"])){
            echo "Excuse added successfully";
          }
        ?>
      </div> </section>  
        

</body>
</html>
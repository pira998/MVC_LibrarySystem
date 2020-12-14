<html>
<head>
    <meta charset="UTF-8">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Library"; ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/card.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


<div id="section-landing">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>

    <div class="wrapper-landing">
        
<main class="page-content">
  <?php foreach($data['books']  as $book):?>
<div class="card" style="background-image: url('/public/assets/img/<?php echo $book->bookImg; ?>'); background-size: cover;" >
    <div class="content">
      <h2 class="title"><?php echo $book->title; ?></h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="btn">Show Details</button>
    </div>
  </div>
  <?php endforeach ?>
</main>
       
    </div>
</div>

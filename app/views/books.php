<?php
   require APPROOT . '/views/includes/head.php';
?>
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

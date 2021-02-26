<?php

$faqs = [
  [
    'domanda' => 'domanda',
    'risposta' => 'risposta1'
  ],
  [
    'domanda' => 'domanda',
    'risposta' => 'risposta2'
  ],
  [
    'domanda' => 'domanda',
    'risposta' => 'risposta3'
  ],
  [
    'domanda' => 'domanda',
    'risposta' => 'risposta4'
  ],
  [
    'domanda' => 'domanda',
    'risposta' => 'risposta5'
  ]


];


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
 </head>
 <body>
   <header>

   </header>



   <main>
     <?php
      foreach ($faqs as $faq) {
        $domanda = $faq['domanda'];
        $risposta = $faq['risposta'];

    ?>

    <h2> <?= $domanda ?> </h2>
    <p> <?= $risposta ?> </p>

      <?php }  ?>

   </main>






 </body>
 </html>

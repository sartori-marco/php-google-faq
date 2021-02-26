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
   <link rel="stylesheet" href="css/style.css">
   <title>Document</title>
 </head>
 <body>
   <header>
     <div class="header-top">
       <img src="https://lh3.googleusercontent.com/proxy/D8FoYxD0a3zL9AJju3QSdo-nENQPocN3_1vqb1zKoVljcXOMLGKnERW7O9-rhYQhGTTiiDIDYmuhClCviy8wwDn7sDc" alt="logo">
       <h1> <a href="#">Privacy e termini</a>  </h1>

     </div>

     <div class="header-bottom">
       <ul>
         <li> <a href="#">Introduzione</a> </li>
         <li> <a href="#">Norme sulla privacy</a></li>
         <li><a href="#">Termini di servizio</a></li>
         <li><a href="#">Tecnologie</a></li>
         <li><a href="#">Domande frequenti</a></li>
       </ul>

     </div>


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

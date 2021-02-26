<?php

$faqs = [
  [
    'domanda' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
    'risposta' => '
    <br>
    La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.
    <br>
    <br>
    <br>
    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.
    <br>
    <br>
    <br>
    Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.
    <br>
    <br>
    <br>
    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.
    <br>
    <br>
    <br>
    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.
    '
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



   <main class="container">
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

<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI4 National Parks Adventure</title>
    <meta name="description" content="CI4 National Parks Adventure.">
    <link rel="shortcut icon" href="https://picocss.com/favicon.ico">
    <link rel="canonical" href="https://picocss.com/examples/company/">

    <!-- Pico.css -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">

    <!-- Custom styles for this example -->
    <link rel="stylesheet" href="/css/custom.css">
  </head>

  <body>

    <!-- Hero -->
    <div class="hero" data-theme="dark" style="background-image: url(/images/compass2.jpg)">
      <nav class="container-fluid">
        <ul>
    <li><strong>National Parks Explorer</strong></li>
  </ul>
  <ul>
    <li><a href="#" class ="contrast">Trips</a></li>
    <li><a href="#"class ="contrast" >Parks</a></li>
    <li><a href="#" class ="contrast">About</a></li>
    <li><a href="#"class ="contrast" >Contact</a></li>
    
   
  </ul>
</nav>

      <header class="container">
        <hgroup>
          <h1>Discover Your National Parks</h1>
          <><strong>Plan your trip<br>
          Mark highlights along the way<br>
         Share your adventure with friends and family<br>
         sabrina khairunnisa 2270211007</strong></h2>

        </hgroup>
        <p><a href="#" role="button" onclick="event.preventDefault()">Join Today</a></p>
      </header>
    </div><!-- ./ Hero -->

    <!-- Main -->
    <main class="container">
    <div class="container">
                <article>
                        <div>
                                <h5><?= $trip->title ?></h5>
                                <p><?= $trip->body ?></p>
                        </div>
                </article>
            <div style= "text-align:center">
               <a href="<?= base_url() ?>/trips">Return to Trips</a>
            </div>
        </div>
    

    
    </main><!-- ./ Main -->

   

    <!-- Footer -->
    <footer class="container">
      <small>Built with <a href="https://picocss.com">Pico</a> • <a href="https://github.com/picocss/examples/tree/master/company/">Source code</a></small>
    </footer><!-- ./ Footer -->



  </body>

</html>
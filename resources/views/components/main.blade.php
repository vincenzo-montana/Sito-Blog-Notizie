<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aulab post Ombre dell'intelletto</title>
    @VITE(['resources/css/app.css', 'resources/js/app.js']);
    
  </head>

  <body >
    <div class="spaziocontenutosalvo">

   
      <main>

      <x-navbar />

        {{$slot}}

      </main>
    </div>
      <x-footer />
    
  </body>
    
</html>
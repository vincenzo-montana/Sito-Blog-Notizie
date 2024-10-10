<!DOCTYPE html>
<html lang="en" class="htmlwelcome">
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
  <script src="https://matthew.wagerfield.com/parallax/deploy/jquery.parallax.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet"></link>
  
  
@vite(['resources/css/app.css', 'resources/js/app.js']);

</head>
<body class="bodywelcome">
  
  

<!-- Starbackground -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>

<!-- parallax text/java -->
<div id="parallax">
  <div class="layer" data-depth="0.6">
  
<!-- text -->
    <div class="some-space">
      <h1 class="h1welcome"> Welcome to The AulabPost</h1>
    </div>
  
  </div>
  <div class="layer" data-depth="0.4">
    <div id="particles-js"></div>
  </div>

<!-- Button -->
  <div class="layer" data-depth="0.3">
    <div class="some-more-space1"><a class="awelcome" href="{{route('homepage')}}">Continue to website</a></div>
  </div>
</div>

</body>

</html>
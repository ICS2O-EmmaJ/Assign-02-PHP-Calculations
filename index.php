<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="Surface Area and Volume of a Sphere">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Surface Area and Volume of a Sphere</title>
    <!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep-purple-pink.min.css" /> 
  </head>
  <center>
  <body>
    <?php echo "<h1>Surface Area and Volume of a Sphere in PHP</h1>"; ?>
    <!-- MDL Button to give pop-up text -->
    <button id="show-dialog" type="button" class="mdl-button mdl-button--colored mdl-color--red-300"><font face="Palatino">What Is A Sphere?</button>
      <dialog class="mdl-dialog">
        <h4 class="mdl-dialog__title"><font face="Palatino">Before we begin...</h4>
        <div class="mdl-dialog__content">
          <p>
            A sphere is a round, geometrical object; basically the 3-dimensional version of a circle. It is special because,
            <br>
            unlike other 3D shapes, a sphere has no corners, edges or faces, and it is perfectly symmetrical. 
          </p>
        </div>
        <div class="mdl-dialog__actions">
          <button type="button" class="mdl-button"><font face="Palatino">Ok</button>
          <button type="button" class="mdl-button close"><font face="Palatino">Exit Out</button>
        </div>
      </dialog>
      <script>
        var dialog = document.querySelector('dialog');
        var showDialogButton = document.querySelector('#show-dialog');
        if (! dialog.showModal) {
          dialogPolyfill.registerDialog(dialog);
        }
        showDialogButton.addEventListener('click', function() {
          dialog.showModal();
        });
        dialog.querySelector('.close').addEventListener('click', function() {
          dialog.close();
        });
      </script>
      <br>
      <br>
    <!-- Formula of Sphere and Calculations -->    
    <center><img src="./images/sphereformula.png" width="700"></center>
    <?php echo "<h3>Please enter the length of the radius of the sphere below:</h3>" ?>
      <form action="./results.php" method="post" target="results">
      <label for="Radius">Length of Radius of Sphere:</label>
      <input type="number" step="any" name="radius" placeholder="Radius"><br><br>
      <input type="submit" value="Calculate">
      </form>
      <br>
    <!-- Create a space where the user information will be displayed -->
		<iframe id="results" name="results">
    </iframe>
  	<!-- Create a space where the user information will be displayed -->
  	<div id="display-results">
    	<div id="surface-area"></div>
  		<div id="volume"></div>
  	</div>
    <center><img src="./images/sphere.gif" width="200"></center>
    <!-- Slider with Starting Value -->
    <?php echo "<h3>Use the slider below to indicate how many examples of 
    <br>
    spheres you can think of in your day-to-day life:</h3>" ?>
    <p style="width:1000px">
    <input class="mdl-slider mdl-js-slider" type="range" id="s1" min="0" max="10" value="4" step="2">
    </p>
    <!-- Pictures of some examples of spheres -->
    <?php echo "<h3>Here are a few. Recognize any?</h3>" ?>
    <img src="./images/earth.jpg" height="325"><img src="./images/bubbles.jpg" height="325"><img src="./images/light.webp" height="325"><img src="./images/marbles.jpg" height="325"><img src="./images/planets.jpg" height="300"><img src="./images/globe.webp" height="300"><img src="./images/ornaments.jpg" height="300"><img src="./images/poolballs.jpeg" height="300">
    <br>
    <br>
    <br>
  </body>
  </center>
</html>

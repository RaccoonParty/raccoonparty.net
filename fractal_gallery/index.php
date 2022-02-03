<!DOCTYPE html>
<html>
  <head>
    <title>Fractal Gallery</title>
    <link rel = "stylesheet" type = "text/css" href = "../basic_html/basic_style.css">
    <script type="text/javascript" src="../lib/jquery-2.1.4.js"></script>
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
    </script>
    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS_CHTML"></script>
				<!-- Matomo -->
				<script>
					var _paq = window._paq = window._paq || [];
					/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
					_paq.push(['trackPageView']);
					_paq.push(['enableLinkTracking']);
					(function() {
						var u="//raccoonparty.net/matomo/";
						_paq.push(['setTrackerUrl', u+'matomo.php']);
						_paq.push(['setSiteId', '1']);
						var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
						g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
					})();
				</script>
				<!-- End Matomo Code -->


  </head>
  <body>
    <div id = "main_container">
      <?php include("../basic_html/topbar.html") ?>

      <div id = "title">
        <div id = "banner" style = "background-image: url('gallery.jpg');">

        </div>
        <div id = "gradient">

        </div>
        <h1>Fractal Gallery</h1>
        <h2>Pictures Generated Using the THREE.js Fractal Generator</h2>
      </div>
      <div id = "content">
        <p>
            Explore the Mandelbrot and the Julia set <a href = "../fractal" target="_blank">here</a>.
        </p>
        <br>
        <h4>Gallery</h4>

        <img  src = "photos/fractal (19).jpg"/>
        <img  src = "photos/fractal (1).jpg"/>
        <img  src = "photos/fractal (2).jpg"/>
        <img  src = "photos/fractal (3).jpg"/>
        <img  src = "photos/fractal (4).jpg"/>
        <img  src = "photos/fractal (5).jpg"/>
        <img  src = "photos/fractal (6).jpg"/>
        <img  src = "photos/fractal (7).jpg"/>
        <img  src = "photos/fractal (8).jpg"/>
        <img  src = "photos/fractal (9).jpg"/>
        <img  src = "photos/fractal (10).jpg"/>
        <img  src = "photos/fractal (11).jpg"/>
        <img  src = "photos/fractal (12).jpg"/>
        <img  src = "photos/fractal (13).jpg"/>
        <img  src = "photos/fractal (14).jpg"/>
        <img  src = "photos/fractal (15).jpg"/>
        <img  src = "photos/fractal (16).jpg"/>
        <img  src = "photos/fractal (17).jpg"/>
        <img  src = "photos/fractal (18).jpg"/>
        <img  src = "photos/fractal (20).jpg"/>
        <img  src = "photos/fractal (21).jpg"/>
        <img  src = "photos/fractal (22).jpg"/>
        <img  src = "photos/fractal (23).jpg"/>
        <p></p><p></p><p></p>
        <p>
          Download the uncompressed images <a href = "photos/fractal.zip">here</a>.

        </p>
      </div>
      <?php include("../basic_html/bottom_bar.html"); ?>
    </div>
  </body>
</html>

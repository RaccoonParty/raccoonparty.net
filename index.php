<!DOCTYPE html>
<html>
  <head>
    <meta property ='og:title' content="Raccoon Party">
    <meta property ='og:image' content="https://raccoonparty.net/res/og_image.jpg"/>
    <meta property="og:image:secure_url" content="https://raccoonparty.net/res/og_image.jpg" />
    <meta property ='og:description' content="Amazing website with amazing raccoons"/>
  <!--  <meta property ="viewport" content="width=1000px"/> -->


      <title>Raccoon Party</title>
      <link rel="stylesheet" type="text/css" href="stylesheet.css" />
      <link rel="stylesheet" type="text/css" href="news_style.css" />

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

  <body itemscope itemtype="http://schema.org/Product">
    <img itemprop="image" src = "../res/solar_system.jpg" style = "display: none;"/>

    <div id = "container">
      <?php include('basic_html/topbar.html'); ?>


      <div id = "title">
        <div id = "banner"></div>


  		<img src="../res/dumpster1.png" id = "dumpster1">
  		<img src="../res/dumpster2.png" id = "dumpster2">
  		<img src="../res/racoon2.png" id = "raccoon2">
  		<img src="../res/racoon3.png" id = "raccoon3">

    </div>



<!--      <div class = "cat" onmouseenter="var audio = new Audio('../res/long_cat/meow.mp3'); audio.play();">
        <img id="head"src="../res/long_cat/head.png" />
        <div id = "body">

        </div>
        <img id="legs" src="../res/long_cat/legs.png" />
      </div> -->

    <?php include('news.html'); ?>

    <br class = 'clear_both'/>
    <br>
    <div id="main_pages">
      <h1>The Finest Garbage</h1>
      <hr>
	<!-- <a href = "../doomer" class="music">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/doomer.jpg)">
              <div class = "ribbon">
                <h2>Music</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Doomer Playlist</h3>
                  <h2>Sad Songs to Cry Your Eyes Out When You Are Having a Mental Breakdown in Public</h2>
                </div>
              </div>
            </div>
          </div>
        </a>
-->

<a href = "../fractal_gallery"  class="photo_gallery">
       <div class = "page">
         <div class = "cropper" style="background: url(../res/fractal_gallery.jpg); background-position: right;">

         <div class = "ribbon">
             <h2>Photo Gallery</h2>
           </div>
           <div class = "info">
             <div class = "text">
               <h3>Fractal Gallery</h3>
               <h2>Generated using the Fractal Generator</h2>
             </div>
           </div>
          </div>
       </div>
</a>


        <a href = "../bread" class="article">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/bread.jpg)">
              <div class = "ribbon">
                <h2>Article</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Baking Stuff</h3>
                  <h2>Let's get this bread!</h2>
                </div>
              </div>
            </div>
          </div>
        </a>

      <!--  <a href = "../dust" target="_blank" class="interactive">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/dust.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>

              <div class = "info">
                <div class = "text">
                  <h3>Dust Sensor</h3>
                  <h2>Readings from the dust sensor</h2>
                </div>
              </div>
            </div>
          </div>
        </a>
-->


        <a href = "../fractal" target="_blank" class="interactive">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/fractal_gen.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>

              <div class = "info">
                <div class = "text">
                  <h3>Fractal Generator</h3>
                  <h2>Tool for generating Mandelbrot and Julia sets with different coloring schemes programmed in JavaScript and WebGL</h2>
                </div>
              </div>
            </div>
          </div>
        </a>

        <a href = "../skychart" target="_blank" class="interactive">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/starmap.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>

              <div class = "info">
                <div class = "text">
                  <h3>Sky Chart</h3>
                  <h2>Tool for generating maps of the sky for any time and for every location on Earth</h2>
                </div>
              </div>
            </div>

            </div>
        </a>

  			<a href = "../solar_system" target="_blank" class="interactive">
  				<div class = "page">
            <div class = "cropper" style="background: url(../res/solar_system.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Solar System</h3>
                  <h2>WebGL solar system with all the small bodies (comets and asteroids) from JPL Small-Body Database</h2>
                </div>
              </div>
            </div>
  				</div>
        </a>

        <a href = "../sundial" class="interactive">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/sundial.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Sundial Generator</h3>
                  <h2>A tool with instructions for creating a horizontal sundial programmed in Python</h2>
                </div>
              </div>
            </div>
          </div>
        </a>

        <a href = "../skychart_info" class="article">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/coding.jpg)">
              <div class = "ribbon">
                <h2>Article</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Coding the Skymap</h3>
                  <h2>A quick overview of the formulas, algorthims and databases used for generating the sky charts</h2>
                </div>
              </div>
            </div>
          </div>
        </a>

        <a href = "../nbody" target="_blank" class="interactive">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/nbody.jpg)">
              <div class = "ribbon">
                <h2>Interactive</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>N-Body Simulator</h3>
                  <h2>2D WebGL N-Body gravitational simulation, with Eulerian integration </h2>
                </div>    <br>

              </div>
            </div>
          </div>
        </a>

        <a href = "../downloads/JavaFractal1.1.jar" target="_blank" class="software">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/fractal.jpg)">
              <div class = "ribbon">
                <h2>Software</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Java Fractal</h3>
                  <h2>An old tool for generating Mandelbrot and Julia sets with different coloring schemes, programmed in Java</h2>
                </div>
              </div>
            </div>
          </div>
        </a>

        <a href = "../downloads/FunctionPlotter.jar" target="_blank" class="software">
          <div class = "page">
            <div class = "cropper" style="background: url(../res/function.png)">
              <div class = "ribbon">
                <h2>Software</h2>
              </div>
              <div class = "info">
                <div class = "text">
                  <h3>Function Plotter</h3>
                  <h2>An old tool for plotting functions (explicit and parametric), programmed in Java</h2>
                </div>
              </div>
            </div>

          </div>
        </a>

  	</div>
    <br class = 'clear_both'/>
    <?php include('old_garbage.html'); ?>

 </div>

 <?php include('basic_html/bottom_bar.html'); ?>


  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact</title>
    <link rel = "stylesheet" type = "text/css" href = "../basic_html/basic_style.css">

    <script type="text/javascript" src="../lib/jquery-2.1.4.js"></script>

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
       <div id = "banner" style = "background-image: url('doggo.jpg');">

       </div>
        <div id = "gradient">

        </div>
        <h1>Contact</h1>
        <h2>Contact Information</h2>
      </div>

      <div id = "content">
        <h4>Email Adress</h4>
        <p>For any questions or sugestions, send me an email to: </p>
      <!--  <a href="mailto:ratonescu@raccoonparty.com">ratonescu@raccoonparty.com</a>-->
				<a href="mailto:ratonescu@raccoonparty.com">raccoonparty@protonmail.com</a>

        <br>
      </div>
      <?php include("../basic_html/bottom_bar.html"); ?>
    </div>
  </body>
</html>

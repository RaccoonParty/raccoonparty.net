<!DOCTYPE html>
<html>
  <head>
    <title>Uppsala Photo Gallery</title>
    <meta property ='og:title' content="Uppsala Photo Gallery">
    <meta property ='og:image' content="https://raccoonparty.net/res/uppsala_1.jpg"/>
    <meta property="og:image:secure_url" content="https://raccoonparty.net/res/uppsala.jpg" />
    <meta property ='og:description' content="Pictures from Uppsala, Sweden"/>

    <link rel = "stylesheet" type = "text/css" href = "../basic_html/basic_style.css">
    <link rel="stylesheet" href="path/to/photoswipe.css">
    <script src="https://kit.fontawesome.com/626c9186e4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../lib/jquery-2.1.4.js"></script>
    <script type="text/x-mathjax-config">
    MathJax.Hub.Config({
      tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
    });
    </script>

  </head>
  <body>
    <div id = "main_container">
      <?php include("../basic_html/topbar.html") ?>

      <div id = "title">
        <div id = "banner" style = "background-image: url('img/IMG-20200913-WA0003.jpg');">

        </div>
        <div id = "gradient">

        </div>
        <h1>Uppsala Photo Gallery</h1>
        <h2>Pictures from Uppsala, Sweden</h2>
      </div>

      <div id = "big_photo_div" onclick="hide();event.stopPropagation();">
        <button id="big_photo_close" onclick="hide()"><i class="fas fa-times"></i></button>

        <img id="big_photo"  src = "img/IMG-20200827-WA0029.jpg"/>
        <button id="big_photo_previous" onclick="nextPrevImg(-1);event.stopPropagation();"><i class="fas fa-arrow-left"></i></button>

        <button id="big_photo_next" onclick="nextPrevImg(1);event.stopPropagation();"><i class="fas fa-arrow-right"></i></button>

      </div>

      <div id = "content">
      <!--  <h4>Photos</h4> -->
        <div id = "gallery">
        <div class="gallery_row">
          <div class='gallery_column'>
          <img  src ="img/IMG-20200827-WA0029_rot.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200827-WA0037.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200906-WA0014.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200913-WA0003.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200913-WA0005.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200924-WA0008.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210329-WA0007.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210329-WA0010.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210602-WA0013.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210602-WA0015.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210606-WA0004.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0005.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0016.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0018.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0021.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210624-WA0016.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20210830_181905.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20210915_165302.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211118_134021.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211211_195952.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211227_130434.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211221_132331.jpg" onClick="make_img_full(this)"/>

        </div>

          <div class='gallery_column'>
          <img  src ="img/IMG-20200827-WA0032.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200827-WA0042.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200909-WA0005.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200913-WA0004.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200913-WA0008.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20200924-WA0009.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210329-WA0009.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210401-WA0006.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210602-WA0014.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210606-WA0003.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0004.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0006.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0017.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210608-WA0019.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/IMG-20210612-WA0011.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20210825_124938.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20210908_121815(0).jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211007_153621.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211118_134536.jpg" onClick="make_img_full(this)"/>
          <img  src ="img/20211227_131113.jpg" onClick="make_img_full(this)"/>
        </div>
      </div>
    </div>
        <script>
          var imageArrayOrdered = [
            "img/IMG-20200827-WA0029_rot.jpg",
            "img/IMG-20200827-WA0032.jpg",
            "img/IMG-20200827-WA0037.jpg",
            "img/IMG-20200827-WA0042.jpg",
            "img/IMG-20200906-WA0014.jpg",
            "img/IMG-20200909-WA0005.jpg",
            "img/IMG-20200913-WA0003.jpg",
            "img/IMG-20200913-WA0004.jpg",
            "img/IMG-20200913-WA0005.jpg",
            "img/IMG-20200913-WA0008.jpg",
            "img/IMG-20200924-WA0008.jpg",
            "img/IMG-20200924-WA0009.jpg",
            "img/IMG-20210329-WA0007.jpg",
            "img/IMG-20210329-WA0009.jpg",
            "img/IMG-20210329-WA0010.jpg",
            "img/IMG-20210401-WA0006.jpg",
            "img/IMG-20210602-WA0013.jpg",
            "img/IMG-20210602-WA0014.jpg",
            "img/IMG-20210602-WA0015.jpg",
            "img/IMG-20210606-WA0003.jpg",
            "img/IMG-20210606-WA0004.jpg",
            "img/IMG-20210608-WA0004.jpg",
            "img/IMG-20210608-WA0005.jpg",
            "img/IMG-20210608-WA0006.jpg",
            "img/IMG-20210608-WA0016.jpg",
            "img/IMG-20210608-WA0017.jpg",
            "img/IMG-20210608-WA0018.jpg",
            "img/IMG-20210608-WA0019.jpg",
            "img/IMG-20210608-WA0021.jpg",
            "img/IMG-20210612-WA0011.jpg",
            "img/IMG-20210624-WA0016.jpg",
            "img/20210825_124938.jpg",
            "img/20210830_181905.jpg",
            "img/20210908_121815(0).jpg",
            "img/20210915_165302.jpg",
            "img/20211007_153621.jpg",
            "img/20211118_134021.jpg",
            "img/20211118_134536.jpg",
            "img/20211211_195952.jpg",
            "img/20211221_132331.jpg",
            "img/20211227_130434.jpg",
            "img/20211227_131113.jpg",
          ];

        </script>
        <script src="../basic_html/gallery.js"></script>

        <p></p><p></p><p></p>
      </div>
      <?php include("../basic_html/bottom_bar.html"); ?>
    </div>
  </body>
</html>

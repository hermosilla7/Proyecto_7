<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Cambiar contraseña </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
  </head>
  <body onload="changePagination('0','first')">
    <div>
      <p>

<!-- Place this tag after the last badge tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></div>
      </p>
      <script type="text/javascript"><!--
google_ad_client = "ca-pub-6883622550208397";
/* PHPGang */
google_ad_slot = "4910595708";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21769945-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

      <hr />
      <?php if(isset($extra)) { // EXTRA WORDS in Theme?>
      <div>
        <?php echo $extra; ?>
      </div>
      <?php }?>
 
  <p>
        <?php if(!isset($pre)) {?>
      <pre>
        <?php print_r($content); ?>
      </pre>
      <?php }else{ ?>
       <?php print_r($content); ?>
      <?php } ?>
    </p>
     
    

  </body>
</html>

<title>jQuery picEyes Plugin Demo</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
.demo { margin: 30px auto; max-width:960px;}
.demo > li {float:left;}
.demo > li img { width:220px; margin:10px; cursor:pointer;}
</style>
<h1 style="margin-top:30px; text-align:center; font-size:32px;">jQuery picEyes Plugin Demo</h1>

<ul class="clearfix demo">
	<li><img src="https://unsplash.it/600/400?image=984"/></li>
	<li><img src="https://unsplash.it/600/400?image=983"/></li>
	<li><img src="https://unsplash.it/600/400?image=982"/></li>
	<li><img src="https://unsplash.it/600/400?image=981"/></li>
	<li><img src="https://unsplash.it/600/400?image=980"/></li>
	<li><img src="https://unsplash.it/600/400?image=979"/></li>
	<li><img src="https://unsplash.it/600/400?image=978"/></li>
	<li><img src="https://unsplash.it/600/400?image=977"/></li>
	<li><img src="https://unsplash.it/600/400?image=975"/></li>
	<li><img src="https://unsplash.it/600/400?image=974"/></li>
</ul>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="jquery.picEyes.js"></script>
<script>
$(function(){
	//picturesEyes($('li'));
	$('li').picEyes();
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

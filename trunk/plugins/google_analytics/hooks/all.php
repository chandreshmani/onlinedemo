<?php function HookGoogle_analyticsAllFootertop()
{

global $google_analytics_key;

?> 

<!-- Google Analytics -->
<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', '<?php echo $google_analytics_key[0];?>', 'auto');  // Replace with your property ID.
ga('send','pageview');

</script>
<!-- End Google Analytics -->



<?php
}
	

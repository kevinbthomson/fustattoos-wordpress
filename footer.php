<footer id="footer" class="source-org vcard copyright" role="contentinfo">
	<div class="wrapper">
			
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')) : else : ?>
		
			<!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
			
		<?php endif; ?>

		<p class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>

	</div>
</footer>

<?php wp_footer(); ?>

<!-- jQuery, lightbox & functions.js are called via the WordPress-friendly way via functions.php -->


<!-- google analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-927389-9', 'auto');
  ga('send', 'pageview');

</script>

<div class="mobile-menu-overlay"></div>
</body>

</html>

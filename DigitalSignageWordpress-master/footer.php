<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>
		<div class="content-dock"></div>
            </div> <!-- /.content -->


	<div class="row dock">

		<?php dynamic_sidebar("Dock"); ?>
	</div>
	<?php wp_footer(); ?>
	
	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js' type='text/javascript' charset='utf-8'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/slick/slick.min.js"></script>
<script type="text/javascript">

        $(document).ready(function(){
            $('.fade').slick({
  autoplay: true,
  arrows:true,
  autoplaySpeed: 15000,
  infinite: true,
  speed: 2000,
  fade: true,
  slide: 'div',
  cssEase: 'ease',
  draggable: false,
  focusOnSelect: true,
  slidesToShow:1
});

        });
    </script>
    <script type="text/javascript">

        function onInit {
  event.target.playVideo();
}
    </script>
    <script src="<?php bloginfo('template_url'); ?>/javascripts/vendor/app.js"></script>
 </body>
</html>

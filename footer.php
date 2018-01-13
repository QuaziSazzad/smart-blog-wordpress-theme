
<footer>
	<div class="zerogrid">
	   <div class="col-1-3">
			<div class="copyright">
				<p style="color:<?php echo cs_get_customize_option('ft_color'); ?>;font-size:<?php echo cs_get_customize_option('f_size'); ?>px"><?php echo cs_get_customize_option('f_text'); ?></p>
			</div>
	   </div>
	   <div class="col-1-3">
			<div class="back-to-top">
				<a href="#">Back to top</a>
			</div>
	   </div>
	   <div class="col-1-3">
			<div class="row">
				<div class="footer-social" >
			   <?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			</div>
	   </div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>
</body></html>
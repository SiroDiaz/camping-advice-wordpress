<!-- footer-->
    <?php
$footer_nav_options = array(
  'theme_location'    => 'Secondary',
  'depth'             => 1,
  'container'         => '',
  'container_class'   => '',
  'container_id'      => 'menu-secondary',
  'menu_class'        => '',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>

<footer id="site-footer">

<?php wp_nav_menu( $footer_nav_options); ?>



</footer> 
 <br/>
 
<p id="copyr" > &copy; 2016 - Raymond Thompson - UK : 

    	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raythompwebdesign-com' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'CampingAdviceWordpress' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'CampingAdviceWordpress' ), 'CampingAdviceWordpress', '<a href="http://lynda.com/mor10" rel="designer">Raymond Thompson</a>' ); ?>
<br/>
<?php
$page = "Page was last updated : ";
$dt = time();
    $mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
    echo $page . $mysql_datetime;
?>

</p>
</div>



<?php wp_footer(); ?> 

</body>

</html>


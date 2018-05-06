<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package camping-advice
 */

?>

<!-- footer-->

<div class="row">
	<footer id="site-footer">
  <?php
    if (has_nav_menu('Secondary') ) {

        wp_nav_menu(array(
          'menu' => 'Secondary', 
          'container' => 'ul', 
        ));
    }
    ?>
    </footer>
    <br/>
<br/>
<p id="copyr" > &copy; 2016 - Raymond Thompson - UK :

<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'camping-advice-wordpress' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'camping-advice-wordpress' ), 'WordPress' ); ?></a>
	<span class="sep"> | </span>
	<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'camping-advice-wordpress' ), 'camping-advice-wordpress', '<a href="" rel="designer">Raymond Thompson</a>' ); ?>
<br/>
<?php
$page = "Page was last updated : ";
$dt = time();
$mysql_datetime = strftime("%Y-%m-%d %H:%M:%S", $dt);
echo $page . $mysql_datetime;
?></p><!-- .site-info -->

</div>
</div>



</div> <!--row end-->

</div><!--container fluid end-->

<?php wp_footer(); ?>
</body>
</html>

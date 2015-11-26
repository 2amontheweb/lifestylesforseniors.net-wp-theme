<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lifestyles_For_Seniors
 */

?>

      <footer id="footer-main" class="site-footer" role="contentinfo">
        <div class="row footer-row text-center">
          <span class="strong">
            <span class="info-item">
              <a href="tel:18005183644">
                Phone: 1.800.518.3644
              </a>
            </span>
            <span class="info-item">
              <span class="text">
                Fax: 1.866.847.5508
              </span>
            </span>
            <span class="info-item">
              <a href="http://www.lifestylesforseniors.net">
                www.lifestylesforseniors.net
              </a>
            </span>
          </span>
        </div>
        <div class="row footer-row text-center">
          <span class="strong italic text">
            For advertising opportunities or become a distribution point please call us or email at <a href="mailto:info@gcpublications.com">info@gcpublications.com</a></span>
          </span>
        </div>
        <div class="row footer-row text-center">
          <span class="text">
            Copyright <i class="fa fa-copyright"></i> <?php echo date("Y"); ?> GC Publications, LLC. All Rights Reserved. Designed by Shweiki Design &amp; Marketing
          </span>
        </div>
      </footer><!-- #main-footer -->
    </div><!-- #page -->

    <?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory') ?>/js/bundled.js"></script>

  </body>
</html>

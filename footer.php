</div><!--.container -->

<footer role="footer">
  <div class="container">
    <div class="col-sm-4">
      <div class="headline">
        <h3>Contact Us</h3>
      </div>
      <div id="bvcps-vcard" class="vcard">
        <div class="org">Buena Vista City Public Schools</div>
        <div class="adr">
          <div class="street-address">2329 Chestnut Avenue</div>
          <span class="locality">Buena Vista</span>,
          <span class="region">VA</span>
          <span class="postal-code">24416</span>
        </div>
        <div class="tel">
          <abbr class="type" title="work">T:</abbr>
          <span class="value">540.261.2129</span>
        </div>
        <div class="tel">
          <abbr class="type" title="fax">F:</abbr>
          <span class="value">540.261.2129</span>
        </div>
        <div class="email">
          Email: <a class="value" href="mailto:todo">need an email address</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="headline">
        <h3>Go Social</h3>
      </div>
      <div class="content social">
        <p>Stay up to date with us:</p>
<?php
$socialMedia = array(
  'twitter' => '',
  'facebook' => 'https://m.facebook.com/profile.php?id=145021112207748',
  'google-plus' => '',
  'pinterest' => '',
  'youtube' => '',
  'vimeo-square' => '',
  'tumblr' => ''
);
?>
        <ul>
          <?php foreach($socialMedia as $k => $v): ?>
          <li><a href="<?php echo $v ?>"><i class="fa fa-<?php echo $k; ?>"></i></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="headline">
        <h3>One more block</h3>
      </div>
      <div class="content">
        <p>More information could go here.</p>
      </div>
    </div>
  </div>
</footer>

<div class="legal">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>


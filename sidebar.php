





<aside id="sidebar-container">
  <ul id="sidebar">
  <?php 
    // If the sidebar is empty, output the static content
    if ( ! dynamic_sidebar('right-column') ) : ?>
    <li>Please add some widgets to the <em>Right column</em> widget area!</li>
    <?php endif; ?>
  </ul>  
</aside><!-- #sidebar-container ends -->

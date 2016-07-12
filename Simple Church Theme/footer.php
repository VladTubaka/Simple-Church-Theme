    <footer>
      <div class='bottom-row' role='navigation'>
        <a href='http://pentecostalsofcrosby.worthyofpraise.org/about-us/'>
          <div class='pic_one'>
            <div class='caption'>
              <h3>Learn About Us!</h3>
            </div>
          </div>
        </a>
        <a href='http://pentecostalsofcrosby.worthyofpraise.org/visit-us/'>
          <div class='pic_two'>
            <div class='caption'>
              <h3>Come Visit Us!</h3>
            </div>
          </div>
        </a>
        <a href='http://pentecostalsofcrosby.worthyofpraise.org/pastors-blog/'>
          <div class='pic_three'>
            <div class='caption'>
              <h3>Read Our Blog!</h3>
            </div>
          </div>
        </a>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <div id="footer-sidebar" class="secondary">
      <div id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
          dynamic_sidebar('footer-sidebar-1');
        }
        ?>
      </div>
      <div id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
          dynamic_sidebar('footer-sidebar-2');
        }
        ?>
      </div>
      <div id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
          dynamic_sidebar('footer-sidebar-3');
        }
        ?>
      </div>
      <div id="footer-sidebar4">
        <?php
        if(is_active_sidebar('footer-sidebar-4')){
          dynamic_sidebar('footer-sidebar-4');
        }
        ?>
      </div>
    </div>
  </body>
</html>

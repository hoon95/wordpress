<?php get_header(); ?>

</header>
    <hr>
    <main class="content">
      <div class="container about_content shadow">
          <div class="contact">
              <h3 class="heading6">Let’s Get in Touch</h3>
              <p>
              You can call me, email me directly or connect with me through my social networks.
              </p>
              <p>
                  (+40) 744122222<br/>
                  <a href="mailto:hello@adipurdila.com">hello@adipurdila.com</a>               
              </p>
              <ul class="social_links">
                  <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter"></a></li>
                  <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook"></a></li>
                  <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/dribble.png" alt="dribble"></a></li>
              </ul>                                
          </div>
          <hr class="double">
          <div class="form">
              <h3 class="heading6">Need a Quote?</h3>
              <p>
                  Use the form below. All fields are required.
              </p>
              <div class="contact_form">
                <!-- <div class="wpcf7 js" id="wpcf7-f82-o1" lang="ko-KR" dir="ltr">
                  <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p> 
                    <ul></ul>
                  </div>
                  <form action="/wp/minimal/contact/#wpcf7-f82-o1" method="post" class="wpcf7-form sent" aria-label="문의 양식" novalidate="novalidate" data-status="sent">
                    <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="82">
                    <input type="hidden" name="_wpcf7_version" value="5.8.1">
                    <input type="hidden" name="_wpcf7_locale" value="ko_KR">
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f82-o1">
                    <input type="hidden" name="_wpcf7_container_post" value="0">
                    <input type="hidden" name="_wpcf7_posted_data_hash" value="dcb84aca4ba156d86d9d1764294efd3a">
                    </div>
                    <p class="field">
                        <label for="username">Full Name:</label>
                        <input type="text" name="Name" id="username" placeholder="Your Name">
                    </p>
                    <p class="field">
                        <label for="useremail">Email Address:</label>
                        <input type="text" name="Email" id="useremail" placeholder="Your Email">
                    </p>
                    <p class="field">
                        <label for="userphone">Phone Number:</label>
                        <input type="text" name="PhoneNumber" id="userphone" placeholder="Your Phone number">
                    </p>
                    <p class="field">
                        <label for="project-type">Project Type:</label>
                        <select name="Projecttype" id="project-type">
                            <option value="" readonly>- Select Value -</option>
                            <option value="Web">Web</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Print">Print</option>
                        </select>
                    </p>
                    <p class="field">
                        <label for="project-desc">Project Description:</label>
                        <textarea name="ProjectDescription" id="project-desc" cols="30" rows="10" placeholder="project description"></textarea>
                    </p>
                    <p class="field">
                        <label for="budget">Available Budget:</label>
                        <input type="number" name="Budget" id="budget" placeholder="$0.00">
                    </p>
                    <p class="submit">
                        <input type="submit" class="primary-btn" value="give me a quote">
                    </p>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                  </form>
                </div>     -->
                <?php echo do_shortcode( '[contact-form-7 id="878d7c5" title="quote"]' ); ?>
              </div>
          </div>
      </div>

<!-- <script src="http://localhost/wp/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1" id="swv-js"></script>

<script src="http://localhost/wp/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1" id="contact-form-7-js"></script> -->

<?php get_footer();?>
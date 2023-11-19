<?php include_once("header.php")?>
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-39">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contact Us</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg-breadcrumbs.jpg);"></div>
        </div>
      </section>
      <!-- Contact information-->
      <section class="section section-md section-first bg-default">
        <div class="container">
          <div class="row row-30 justify-content-center">
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="tel:#">+1 323-913-4688</a></p>
                  <p class="box-contacts-link"><a href="tel:#">+1 323-888-4554</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></p>
                </div>
              </article>
            </div>
            <div class="col-sm-8 col-md-6 col-lg-4">
              <article class="box-contacts">
                <div class="box-contacts-body">
                  <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                  <div class="box-contacts-decor"></div>
                  <p class="box-contacts-link"><a href="mailto:#">mail@demolink.org</a></p>
                  <p class="box-contacts-link"><a href="mailto:#">info@demolink.org</a></p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Form and Gmap-->
      <section class="section section-md section-last bg-default text-md-left">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-6 section-map-small">
              <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
                <div class="google-map"></div>
                <ul class="google-map-markers">
                  <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <h4 class="text-spacing-50">Contact Form</h4>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-first-name">First Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-last-name">Last Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">E-mail</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message">Message</label>
                      <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>
<a class="section section-banner" href="https://www.templatemonster.com/intense-multipurpose-html-template.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )"><img src="images/banner/foreground-03-1600x310.png" srcset="images/banner/foreground-03-1600x310.png 1x, images/banner/foreground-03-3200x620.png 2x" alt="" width="1600" height="310"></a>
      <!-- Page Footer-->
      <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
        <div class="footer-variant-2-content">
          <div class="container">
            <div class="row row-40 justify-content-between">
              <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="oh-desktop">
                  <div class="wow slideInRight" data-wow-delay="0s">
                    <div class="footer-brand"><a href="index.html"><img src="images/logo-inverse-196x42.png" alt="" width="196" height="42"/></a></div>
                    <p>Herber is an organic farm located in California. We offer healthy foods and products to our clients.</p>
                    <ul class="footer-contacts d-inline-block d-md-block">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                          <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                          <div class="unit-body">
                            <p>Mon-Sat: 07:00AM - 05:00PM</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                          <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="oh-desktop">
                  <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
                    <h5>Newsletter</h5>
                    <p>Join our email newsletter for news and tips.</p>
                    <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-5-email" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-5-email">Enter Your E-mail</label>
                      </div>
                      <button class="button button-block button-white" type="submit">Subscribe</button>
                    </form>
                    <div class="group-lg group-middle">
                      <p class="text-white">Follow Us</p>
                      <div>
                        <ul class="list-inline list-inline-sm footer-social-list-2">
                          <li><a class="icon fa fa-facebook" href="#"></a></li>
                          <li><a class="icon fa fa-twitter" href="#"></a></li>
                          <li><a class="icon fa fa-google-plus" href="#"></a></li>
                          <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-xl-3">
                <div class="oh-desktop">
                  <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
                    <h5>Gallery</h5>
                    <div class="row row-10 gutters-10" data-lightgallery="group">
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-1-129x120.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-7-800x1200.jpg" data-lightgallery="item"><img src="images/gallery-image-1-129x120.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-2-129x120.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-8-1200x800.jpg" data-lightgallery="item"><img src="images/gallery-image-2-129x120.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-3-129x120.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-9-800x1200.jpg" data-lightgallery="item"><img src="images/gallery-image-3-129x120.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                      <div class="col-6 col-sm-3 col-lg-6">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail thumbnail-mary">
                          <div class="thumbnail-mary-figure"><img src="images/gallery-image-4-129x120.jpg" alt="" width="129" height="120"/>
                          </div>
                          <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/gallery-original-10-1200x800.jpg" data-lightgallery="item"><img src="images/gallery-image-4-129x120.jpg" alt="" width="129" height="120"/></a>
                          </div>
                        </article>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-variant-2-bottom-panel">
          <div class="container">
            <!-- Rights-->
            <div class="group-sm group-sm-justify">
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>Herber</span>. All rights reserved
              </p>
              <p class="rights">Design&nbsp;by&nbsp;<a href="https://www.templatemonster.com/">Templatemonster</a></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
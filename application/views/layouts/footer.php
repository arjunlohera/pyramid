</body>
 <!-- START: FOOTER -->
  <footer class="footer mt-3">
      <div class="container" id="contact">
        <div class="row">
          <div class="col-12 col-md-6">
            <h3>Our Mission</h3>
            <p>Our mission is to provide customer-centric, result-oriented, cost-competitive innovative & functional IT Solutions to our valuable global clients. We understand needs and requirements of our customer and make technology to resolve the needs. We believe to explore new opportunities that maximizes the business value, consistent growth and sustainability.</p>
            <p>We ensure the best relationship with our clients, both during and after their goals have been met. We help you grow your businesses and look big until you are big!</p>
          </div>
          <div class="col-12 col-md">
            <h3>Address</h3>
            <address>
              Saroop Nagar, Salem Tabri, <br />
              Ludhiana, Punjab, India.<br />
              <i class="fa fa-phone"> +91-8427047669</i></a><br />
              <i class="fa fa-phone"> +91-7009116745</i><br />
              <i class="fa fa-envelope"> info@pyramidinfotech.com</i>
            </address>
            <div class="btn-group text-center" role="group">
              <a class="btn btn-primary" href="tel:+918427047669"><i class="fa fa-phone"></i></a>
              <a class="btn btn-success" href="tel:+918427047669"><i class="fab fa-whatsapp"></i></a>
              <a class="btn btn-info" href="mailto:loheraarjun@gmail.com"><i class="fa fa-envelope"></i></a>
            </div>
          </div>
          <div class="col col-md align-self-center pt-5" id="social_button">
            <div class="text-center">
              <a class="btn btn-social-icon btn-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-social-icon btn-google" href="#"><i class="fab fa-google-plus"></i></a>
              <a class="btn btn-social-icon btn-twitter" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-social-icon btn-linkedin" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-center" id="copyrigt_row">
          <div class="col-auto text-center">
            <p>Copyrigt @ <?=date('Y')?></p>
            <p>Designed and develop with <i class="fas fa-heart"></i></p>
          </div>
        </div>
      </div>
    </footer>
  <!-- END: FOOTER -->
<?php foreach ($js as $j) {?>
    <script src="<?=$j?>"></script>
<?php }?>
</html>
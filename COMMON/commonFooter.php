<!-- footer -->
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="widget widget-info">
          <h3 class="title">About Us</h3>
          <p class="content">The probability of someone needing your services or wLorem ipsum dolor sit amet,
            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
          <div class="social-icon">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter-alt"></i></a>
            <a href="#"><i class="ti-google"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-pinterest"></i></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="widget widget-info">
          <h3 class="title">Useful Links</h3>
          <div class="footer-list">
            <ul>
              <li><a href="#">All properties</a></li>
              <li><a href="#">FAQ’S</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Sign up</a></li>
              <li><a href="#">Articles</a></li>
              <li><a href="#">Popular tags</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="widget widget-info">
          <h3 class="title">Why buy from us</h3>
          <div class="footer-list">
            <ul>
              <li><a href="#">Odor Eliminators</a></li>
              <li><a href="#">Medical Containers</a></li>
              <li><a href="#">Eye & Ear Care</a></li>
              <li><a href="#">Food & Beverage</a></li>
              <li><a href="#">Face Masks</a></li>
              <li><a href="#">Medication Aids</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6">
        <div class="widget widget-info">
          <h3 class="title">Get in touch</h3>
          <div class="contact">
            <p class="content">Contact Us</p>
            <span>678-473-1667</span>
            <span>Yourname@mail.com</span>
          </div>
          <div class="Address">
            <p class="content">Our Address</p>
            <span>4959 Adonais Way Duluth,</span>
            <span>GA 30136</span>
          </div>

        </div>
      </div>
      <div class="col-md-12">
        <div class="footer-bottom">
          <div class="row">
            <div class="col-lg-6 col-md-12 order-lg-first">
              <div class="footer-copyright">
                <p>&copy;2020 CopyRight Example <a href="#"> ThemeLayer</a>. All rights reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 order-first">
              <div class="footer-nav">
                <ul>
                  <li><a href="#">home</a></li>
                  <li><a href="#">about</a></li>
                  <li><a href="#">blog</a></li>
                  <li><a href="#">contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- footer end -->




<!-- script -->

<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
  $(function () {
    $("button[type='submit']").click(function (event) {
      var $fileUpload = $("input[type='file']");
      if (parseInt($fileUpload.get(0).files.length) === 0) {
        alert("Please select an Image");
        event.preventDefault(); // Prevent form submission
      }
    });

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $("#img").attr("src", e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
      }
    }
    $("#file-input").on("change", function () {
      readURL(this);
    });
  });
</script>

</body>

<!-- Mirrored from themelayer.net/html/MEDXSTORE/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 06:02:47 GMT -->

</html>
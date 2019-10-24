<?php 
/** 
 * Content for displaying Footer 
 * 
 * @package cad-wp-theme 
 * @author marcelbadua
 */ 
?>

<?php 
  $logo = get_field('logo');
?>


<footer id="footer" class="site-footer" role="contentinfo">

    <div class="container">

        <div class="row">
          <div class="col-sm-3 text-center">
            <img src="<?php echo $logo ?>" width="150" />
          </div>
          <div class="col-sm-3">
            <h6 class="footer-title">ADDRESS</h6>
            <p class="footer-body">3 First Road, Calle Uno</p>
            <p class="footer-body">Quezon Hill</p>
          </div>
          <div class="col-sm-3">
            <h6 class="footer-title">OPENING HOURS</h6>
            <p class="footer-body">Monday - Sunday</p>
            <p class="footer-body">10AM - 8PM</p>
          </div>
          <div class="col-sm-3 contact">
            <h6 class="footer-title">CONTACT</h6>
            <div class="phone">
             <i class="fas fa-phone"></i>
              <p class="footer-body" style="margin-left: 10px;"><a href="tel:123-456-789">123-456-789</a></p>
            </div>
            <div class="mail">
              <i class="far fa-envelope"></i>
              <p class="footer-body" style="margin-left: 10px;"><a href="mailto:info@tacozilla.com">info@tacozilla.com</a></p>
            </div>
          </div>
        </div>

    </div>

</footer> <!-- #footer -->

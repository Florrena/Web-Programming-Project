<?php
include ("header.php");

?>
    <div class="cat-header">
        <img src="images/paw.webp">
        <h1>Meow that's what I call a great order! Your feline friend will be 'feline' fine in no time!</h1>
        <img src="images/paw.webp">
    </div>


<div class="article">
      <h4>Your cart</h4>
      <p>Product 1 <span class="price">$15</span></p>
      <p>Product 2 <span class="price">$5</span></p>
      <p>Product 3 <span class="price">$8</span></p>
      <p>Product 4 <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>





    <div class="adoption-container">
        <div class="center">
            <form action="thanks.php" method="get" class="adoption-form">
                <h4>PAYMENT INFO</h4>
                <div class="input-box">
                    <input type="text" class="input-field" id="fname" name="fname" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="tel" class="input-field" id="phone" name="phone" placeholder="Phone" required>
                </div>
                <div class="input-box">
                    <textarea class="input-field" id="address" name="address" rows="4" placeholder="Delivery Address" required></textarea>
                </div>
                <div class="input-box">
                    <label for="experience">Choose your payment method:</label>
                    <select id="experience" name="experience" class="input-field" required>
                        <option class ="option" value="VISA">VISA</option>
                        <option class ="option" value="AMERICAN EXPRESS">AMERICAN EXPRESS</option>
                        <option class ="option" value="MASTERCARD">MASTERCARD</option>
                        <option class ="option" value="PAYPAL">PAYPAL</option>
                    </select>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="cname" name="cardname" placeholder="Name on Card" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="cnum" name="cardnumber" placeholder="Credit Card Number" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="expmonth" name="expmonth" placeholder="Exp Month" required>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" id="CVV" name="CVV" placeholder="CVV" required>
                </div>
                <div class="input-submit">
                    <button class="submit-btn" type="submit">Proceed to checkout</button>
                </div>
            </form>
        </div>
    </div>
    

<?php

include ("footer.php");

?>
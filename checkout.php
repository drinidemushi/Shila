<?php
include 'header.php';
?>
<section>
    <div class="container">
    <div class="row jeans">
            <div class="textc-jeans">
                <h2 class="jeans1">Checkout</h2>
           </div>
       </div>

       <div class="row">
         <div class="col-md-8">
          <div class="row ">
            <div class="col-md-6">
            <label for="fname" class="form-label">E-mail*</label>
             <input type="text" class="form-control" placeholder="Example 1">
            </div>
            <div class="col-md-6">
             <label for="fname" class="form-label">Phone*</label>
             <input type="phone" class="form-control" placeholder="">
            </div>
           </div>
           <h3 class=sh-ad>Shipping Address</h3>
           <div class="row">
            <div class="col-md-6">
            <label for="fname" class="form-label">First name*</label>
             <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-6">
             <label for="fname" class="form-label">Last name*</label>
             <input type="phone" class="form-control" placeholder="">
            </div>
           </div>

           <div class="row">
            <div class="col-md-8">
            <label for="fname" class="form-label">Address*</label>
             <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-4">
             <label for="fname" class="form-label">Atp, suite, etc*</label>
             <input type="phone" class="form-control" placeholder="">
            </div>
           </div>
 
           <div class="row">
            <div class="col-md-6">
            <label for="fname" class="form-label">First name*</label>
             <input type="text" class="form-control" placeholder="">
            </div>
            <div class="col-md-6">
            <label for="fname" class="form-label">Country*</label>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color: black; width:100%;">
                  United Kingdom
                </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
              </div>
            </div>
           </div>
           
           <div class="row">
           <div class="col-md-6">
             <label for="fname" class="form-label">Postalcode*</label>
             <input type="phone" class="form-control" placeholder="">
            </div>
           </div>

           <h3 class=sh-ad>Payment method</h3>
           <div class="row">
            <div class="col-md-6">
                <div class="pay">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">Visa / Mastercard</label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="pay">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1"> Paypal</label>
            </div>
           </div>
           </div>

             
           <div class="row">
           <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <button class="btn-payment">Proceed To Payment</button>
              </div>
            </div>
         </div>
         <div class="col-md-4">
             <p>Your order</p>
             <div class="row">
                <div class="col-md-6">
                 <img src="images/pic11.png"  class="pic11_check" alt="">
                </div>
                <div class="col-md-6">
                <h6>Jeans with seqiuns</h6>
			    <p><span class="size">Size</span> <span class="xl">XL</span>  <span class="size">Color</span> <span class="xl">Blue</span></p>
                <p>$32.00 x 2</p>
                </div>
             </div>
             <hr>
             <div class="row">
                <div class="col-md-6">
                 <img src="images/pic11.png" class="pic11_check" alt="">
                </div>
                <div class="col-md-6">
                <h6>Mini wooden tote bag</h6>
                <p>$29.00 x 2</p>
                </div>
             </div>
             <hr>
             <div class="row">
                <div class="col-md-4">
                 <p>Delivery</p>
                </div>
                <div class="col-md-8">
                <p>$20.00(Experss Delivery)</p>
                </div>
                <div class="row">
                <div class="col-md-4">
                 <p>Discount</p>
                </div>
                <div class="col-md-8">
                <p>-$10.00</p>
                </div>
                <hr>
                <div class="row">
                <div class="col-md-4">
                 <p>Total</p>
                </div>
                <div class="col-md-8">
                <p class="txt-t">$117.00</p>
                </div>
         </div>
       </div>
    </div>
</section>



<?php
 include 'footer1.php';
?>
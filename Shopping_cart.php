<?php
include 'header.php';
?>

<section>
    <div class="container">
    <div class="row jeans">
            <div class="textc-jeans">
                <h2 class="jeans1">Shopping Cart</h2>
           </div>
       </div>

       <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%">Product</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							<th style="width:22%" class="text-center">Subtotal</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="images/pic11.png" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="txt-shop">Jeans with seqiuns</h4>
										<p><span class="size">Size</span> <span class="xl">XL</span>  <span class="size">Color</span> <span class="xl">Blue</span></p>
									</div>
								</div>
							</td>
							<td data-th="Price">$39.00</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="2">
							</td>
							<td data-th="Subtotal" class="text-centersh">$78.00</td>
							<td class="actions" data-th="">
								<button class="btn buttonX">x</button>								
							</td>
						</tr>
					</tbody>
              </table>
              <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:50%"></th>
							<th style="width:10%"></th>
							<th style="width:8%"></th>
							<th style="width:22%" class="text-center"></th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
							<td data-th="">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="images/pic11.png" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="txt-shop">Miniooden tote bag</h4>
									</div>
								</div>
							</td>
							<td data-th="Price">$29.00</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="2">
							</td>
							<td data-th="Subtotal" class="text-centersh">$29.00</td>
							<td class="actions" data-th="">
								<button class="btn buttonX">x</button>								
							</td>
					</tbody>
              </table>
              <div class="row">
                <div class="buttons-sh">
                <div class="search-sh">
                <p>Do you have a discount?</p>
                <input type="text" class="serch-inputsh" placeholder="Cupon code">
                <button type="button" class="button-sh">&#8594</button>
                   </div>
                <div class="b-dr">
                <p>Shipping</p>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle bg-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Expres delivery -$20
                </button>
               <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
              </div>
              </div>
              </div>
              </div>
              <hr>
              <div class="row">
                <div class="button-checkout">
                 <p>Discount  <span>-$10</span></p>
                 <h5>Total  <span class="total">$117.00</span></h5>
                <button class="buttonch">Proceed to Checkout</button>
                </div>
              </div>
              <hr>
    </div>
</section>



<?php
 include 'footer1.php';
?>
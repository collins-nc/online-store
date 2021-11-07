<?php
    require "head.php"
?>
<body>

<div id="site">
	<header id="masthead">
		<h1></h1>
	</header>
	<div id="content">
		<h1>Your Shopping Cart</h1>
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item</th>
					<th scope="col">Desciption</th>
					<th scope="col" colspan="2">Price</th>
				</tr>
				<?php
					include "includes/checkout.view.php";

				?>

			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
	
			<ul id="shopping-cart-actions">
				<li>
					<a href="content.page.html" class="btn">Continue Shopping</a>
				</li>
				<li>
					<a href="buy.page.php" class="btn">Go To Checkout</a>
				</li>
			</ul>
		<img style="position:absolute;Top:-225px;left:-120px"src="images/Removal-53.png" alt="order">
	</div>
	
	

</div>


</body>
</html>	

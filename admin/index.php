<?php

// This is the adminstrative home page.
// This script is created in Chapter 11.

// Require the configuration before any PHP code as configuration controls error reporting.
require ('../includes/config.inc.php');

// Set the page title and include the header:
$page_title = 'CoolGuitars - Administration';
include ('./includes/header.html');
// The header file begins the session.
?>
<h3>Links</h3>
<ul>
<li><a href="add_specific_coffees.php">Add Guitars</a></li>
<li><a href="add_other_products.php">Add Amps & Accessories</a></li>
<li><a href="add_inventory.php">Add Inventory</a></li>
</ul>
<p>Welcome to the administrative page! Here you are able to add additional stock to the online inventory when product is delivered. You are able to verify and ship out orders here as well. Please be careful and confrim all order details are proper or problems may arise..</p>

<p>Keep rocking on fellow employees!</p>

<?php include ('./includes/footer.html'); ?>

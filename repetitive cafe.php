
<?php 
# Reptitive Cafe 
# Define an array of drinks and prices and an array of pastries. 
 $drinks = [
   "Tea" => 1.50, 
  "Coffee" => 2.50,
 "Hot Chocolate" => 3.00
 ];

$pastries = ["Croissant", "Pain au chocolate", "Cinnamon swirl"];

?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
    
<!--Use a foreach loop to print the drinks and prices.-->
    <?php foreach ($drinks as $drink => $price ):?>

    <li><?= "$drink = £$price" ?></li>

    <?php endforeach; ?>

</ul>
<h3>Pastries! ($2 each)</h3>
<ul>

  <!--Use a for loop to print the pastries menu.-->
    <?php for ($i=0; $i< count($pastries); $i++): ?>

    <li><?= $pastries[$i] ?></li>

    <?php endfor; ?>

</ul>

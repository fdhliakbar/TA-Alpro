<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user input from the form
    $input_name = $_POST["name-product"];
    $input_id = $_POST["id-product"];
    $input_price = $_POST["price-product"];
    $input_stock = $_POST["stock-product"];

    $i = count($gudang);
    
    $gudang[$i]['nama'] = $input_name;
    $gudang[$i]['id'] = $input_id;
    $gudang[$i]['harga'] = $input_price;
    $gudang[$i]['stok'] = $input_stock;  

  // Split the input by commas
//   $values = explode(",", $input);

    //$values[100][100];

  // Determine the number of columns
//   $count = count($values);
//   $columns = ($count > 0) ? ceil(sqrt($count)) : 0;

//   // Initialize an empty 2D array
//   $array2D = array();

  // Populate the 2D array with values
//   for ($i = 0; $i < $count; $i += $columns) {
//     $row = array_slice($values, $i, $columns);
//     $array2D[] = $row;
//   }



  // Display the 2D array
  echo "<pre>";
  print_r($gudang);
  echo "</pre>";
}
?>
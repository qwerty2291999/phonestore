<?php
//fetch.php
require_once 'connection.php';
$output = '';
$query = "SELECT * FROM item ORDER BY item_id DESC";
$result = mysqli_query($conn, $query);
$output = '
<br />
<h3 align="center">Item Data</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="30%">Item Name</th>
  <th width="10%">Item Code</th>
  <th width="50%">Description</th>
  <th width="10%">Price</th>
  <th width="10%">Name</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["item_name"].'</td>
  <td>'.$row["item_code"].'</td>
  <td>'.$row["item_description"].'</td>
  <td>'.$row["item_price"].'</td>
  <td>'.$row["name"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
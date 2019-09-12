<?php
echo "<table border='2'>";
    echo "<tr><td>Name</td><td>MFG Name</td><td>UOM</td><td>Price</td><td>Edit/Delete</td></tr>";
foreach ($products->result_array() as $row){
	echo form_open("product/edit_product");
	echo "<tr>";
		echo "<td><input type='text' name='txtName' value='$row[name]'></td>";
		echo "<td>$row[mfg_name]</td>";
		echo "<td>$row[uom]</td>";
		echo "<td>$row[price]</td>";
		echo "<td>";
		echo "<input type='hidden' name='hdnId' value='$row[id]'>";
		echo "<input type='submit' name='btnEdit' value='Edit'>";
		echo "<input type='submit' name='btnDelete' value='Delete'>";
		echo "</td>";
	echo "</tr>";
	echo "</form>";
}
echo "</table>";
?>
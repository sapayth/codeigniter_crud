<?php
echo "<table border='2'>";
    echo "<tr><td>Name</td><td>MFG Name</td><td>UOM</td><td>Price</td><td>Edit/Delete</td></tr>";
foreach ($products->result_array() as $row){	
	echo "<tr>";
		echo "<td>$row[name]</td>";
		echo "<td>$row[mfg_name]</td>";
		echo "<td>$row[uom]</td>";
		echo "<td>$row[price]</td>";
		echo "<td>";
		echo form_open("product/edit_form/$row[id]");
			echo "<input type='submit' name='btnEdit' value='Edit'>";
		echo "</form>";
		echo form_open("product/delete/$row[id]");
			echo "<input type='submit' name='btnDelete' value='Delete'>";
		echo "</form>";
		echo "</td>";
	echo "</tr>";
	
}
echo "</table>";
?>
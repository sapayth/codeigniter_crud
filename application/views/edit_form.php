<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php echo form_open('Product/update/'); ?>

<?php foreach ($row->result_array() as $item) {

echo "<div>
	 Name:<br>
	 <input type='text' name='txtName' value='$item[name]' />
	 </div>
	 
	 <div>
	 Mfg<br>
	 <input type='text' name='txtMfgName' value='$item[mfg_name]' />
	 </div>
	 
	 <div>
	 UoM<br>
	 <input type='text' name='txtUom' value='$item[uom]' />
	 </div>
	 <div>
	 Price<br>
	 <input type='text' name='txtPrice' value='$item[price]' />
	 </div>
	 <input type='hidden' value='$item[id]' name='hdnId'>
	 <input type='submit' value='Submit' name='btnSubmit'>";
	}
?>
</form>
</body>
</html>
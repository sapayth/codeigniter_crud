<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php echo form_open('Product/save'); ?>

<div>
 Name:<br>
 <input type="text" name="txtName" />
 </div>
 
 <div>
 Mfg<br>
 <input type="text" name="txtMfgName" />
 </div>
 
 <div>
 UoM<br>
 <input type="text" name="txtUom" />
 </div>
 <div>
 Price<br>
 <input type="text" name="txtPrice" />
 </div>
 <input type="submit" value="Submit" name="btnSubmit">

</form>
</body>
</html>
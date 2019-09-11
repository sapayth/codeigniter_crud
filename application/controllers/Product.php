<?php
class Product extends CI_Controller {

    public function index() {			
		$this->load->view("product_form");
		$this->display_product();
	}
	
	public function save() {
		
		$name = $this->input->post("txtName");
		$mfg = $this->input->post("txtMfgName");
		$uom = $this->input->post("txtUom");
		$price = $this->input->post("txtPrice");
	    //echo $name,$mfg,$uom,$price;
		
	   $this->db->query("insert into product(name,mfg_name,uom,price)values('$name','$mfg','$uom','$price')");	
	   redirect("Product");
	}
	
	public function display_product() {
		$query = $this->db->query("select id, name,mfg_name,uom,price from product");
		$this->load->view("view_product",array("products"=>$query));
    }

    public function edit_product($id) {
    	if(isset($_POST["btnEdit"])) {
    		echo "Edit";
    	}

    	if(isset($_POST["btnDelete"])) {
    		// echo "Delete";
    		$this->db->query("delete from product where id = '$id'");
    		redirect("Product");
    	}
    }
	
}


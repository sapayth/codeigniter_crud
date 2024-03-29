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
		$query = $this->db->query("select id, name, mfg_name, uom, price from product");
		$this->load->view("view_product",array("products" => $query));
    }

    public function edit_form($item_id) {
    	$rs = $this->db->query("select id, name, mfg_name, uom, price from product where id = '$item_id'");
    	$this->load->view("edit_form", array("row" => $rs));
    }

    public function delete($item_id) {
    	$this->db->query("delete from product where id = '$item_id'");
    	redirect("Product");
    }

    public function update() {
		$id = $this->input->post("hdnId");
		$name = $this->input->post("txtName");
		$mfg = $this->input->post("txtMfgName");
		$uom = $this->input->post("txtUom");
		$price = $this->input->post("txtPrice");
		$this->db->query("update product set name = '$name', mfg_name = '$mfg', uom = '$uom', price = '$price' where id = '$id'");
		redirect("Product");
    }

    public function edit_product() {
    	$id = $this->input->post("hdnId");
    	if(isset($_POST["btnEdit"])) {
    		$name = $this->input->post("txtName");
			$mfg = $this->input->post("txtMfgName");
			$uom = $this->input->post("txtUom");
			$price = $this->input->post("txtPrice");
    		// $this->db->query("update product set name = '$name', mfg_name = '$mfg', uom = '$uom', price = '$price' where id = '$id'");
    		redirect("Product");
    	}

    	if(isset($_POST["btnDelete"])) {
    		// echo "Delete";
    		$this->db->query("delete from product where id = '$id'");
    		redirect("Product");
    	}
    }
	
}


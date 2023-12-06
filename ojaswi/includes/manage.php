<?php

class Manage {
	private $conn;
	function __construct()
	{
		include_once('C:\xampp\htdocs\ojaswi\database\db.php');
		$db=new database();
		$this->conn=$db->connect();	
	}
	public function deleteRecord($table,$pk,$id)
	{
		if($table=="categories")
		{
			$pre_stmt=$this->conn->prepare("DELETE FROM ".$table." WHERE ".$pk."=?") ;
			$pre_stmt->bind_param("i", $id);
			$result=$pre_stmt->execute() or die($this->conn->error);
			if($result)
			{
				return "CATEGORY_DELETED"; 

			}
			else
			{
			return 1;
			}
		}
		if($table=="brands")
		{
			$pre_stmt=$this->conn->prepare("DELETE FROM ".$table." WHERE ".$pk."=?") ;
			$pre_stmt->bind_param("i", $id);
			$result=$pre_stmt->execute() or die($this->conn->error);
			if($result)
			{
				return "BRAND_DELETED"; 

			}
			else
			{
			return 1;
			}
		}
		if($table=="supplier")
		{
			$pre_stmt=$this->conn->prepare("DELETE FROM ".$table." WHERE ".$pk."=?") ;
			$pre_stmt->bind_param("i", $id);
			$result=$pre_stmt->execute() or die($this->conn->error);
			if($result)
			{
				return "SUPPLIER_DELETED"; 

			}
			else
			{
			return 1;
			}
		}
		if($table=="products")
		{
			$pre_stmt=$this->conn->prepare("DELETE FROM ".$table." WHERE ".$pk."=?") ;
			$pre_stmt->bind_param("i", $id);
			$result=$pre_stmt->execute() or die($this->conn->error);
			if($result){
				return "PRODUCT_DELETED"; 

			}
			else
			{
			return 1;
			}
		}
		if($table=="customer")
		{
			$pre_stmt=$this->conn->prepare("DELETE FROM ".$table." WHERE ".$pk."=?") ;
			$pre_stmt->bind_param("i", $id);
			$result=$pre_stmt->execute() or die($this->conn->error);
			if($result)
			{
				return "CUSTOMER_DELETED"; 

			}
			else
			{
			return 1;
			}
		}
	}

	public function getSingleRecord($table,$pk,$id){
		$pre_stmt=$this->conn->prepare("SELECT * FROM ".$table." WHERE ".$pk."=? LIMIT 1") ;
			$pre_stmt->bind_param("i", $id);
			$pre_stmt->execute() or die($this->conn->error);
			$result=$pre_stmt->get_result();

			if($result->num_rows==1)
			{
				$row=$result->fetch_assoc();
			}

			return $row;
	}	
	public function update_record($table,$where,$fields)
	{
		$sql ="";
		$condition ="";
		foreach($where as $key => $value)
		{
			$condition .= $key . "='" . $value . "' AND ";

		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value){
			 $sql .= $key . "='".$value."',";
		}

		$sql = substr($sql, 0,-2);
		$sql = "UPDATE ".$table." SET ".$sql."' WHERE ".$condition;
		if(mysqli_query($this->conn,$sql)){
			return "UPDATED";
		}
	}
	 public function storeCustomerSalesInvoice($sales_date,$select_customer,$ar_tqty,$ar_qty,$ar_price,$ar_product_name,$sub_total,$discount,$net_total,$paid,$due)
	 {
	
		$pre_stmt=$this->conn->prepare("INSERT INTO `invoice`(`customer_name`,`sales_date`,`sub_total`, `discount`, `net_total`, `paid`, `due`) VALUES (?,?,?,?,?,?,?)") ;
		$pre_stmt->bind_param("ssddddd", $select_customer,$sales_date,$sub_total, $discount,$net_total,$paid,$due);
			$pre_stmt->execute() or die($this->conn->error);
		//$result=$pre_stmt->get_result();	
		$invoice_no = $pre_stmt->insert_id;
		if($invoice_no != null)
		{
			for($i=0; $i < count($ar_price) ; $i++)
			{
				//Here we are finding remaining quantity after giving to customer
				$rem_qty = $ar_tqty[$i] - $ar_qty[$i];
				if ($rem_qty < 0) 
				{
					return "Order_Fail";

				}
				
				else
				{
					$this->conn->query("UPDATE products SET product_stock='$rem_qty' WHERE product_name='".$ar_product_name[$i]."'")or die($this->conn->error);
				}

				$insert_product = $this->conn->prepare("INSERT INTO `sales_details`(`invoice_no`, `product_name`, `price`, `qty`) VALUES (?,?,?,?)");
				$insert_product->bind_param("isdd",$invoice_no,$ar_product_name[$i],$ar_price[$i],$ar_qty[$i]);
				$insert_product->execute() or die($this->conn->error);
			}

			return json_decode($invoice_no);
		}

	}
	public function storeCustomerPurchaseInvoice($purchase_date,$select_supplier,$ar_tqty,$ar_qty,$ar_price,$ar_product_name,$sub_total,$discount,$net_total,$paid,$due)
	{
		$pre_stm=$this->conn->prepare(" INSERT INTO `purchase`(`supplier_name`, `purchase_date`, `sub_total`, `discount`, `net_total`, `paid`, `due`) VALUES(?,?,?,?,?,?,?)");
			$pre_stm->bind_param("ssddddd", $select_supplier,$purchase_date,$sub_total,$discount,$net_total,$paid,$due);
			$pre_stm->execute() or die($this->conn->error);
			
			$bill_no= $pre_stm->insert_id;
			if($bill_no != null)
			{
				for ($i=0; $i < count($ar_price) ; $i++)
				{
					$rem_qty = $ar_tqty[$i] + $ar_qty[$i];
				
					$this->conn->query("UPDATE products SET product_stock='$rem_qty' WHERE product_name='".$ar_product_name[$i]."'")or die($this->conn->error);
					$insert_product = $this->conn->prepare("INSERT INTO `purchase_details`(`bill_no`, `product_name`, `price`, `qty`) VALUES (?,?,?,?)");
	
					$insert_product->bind_param("isdi",$bill_no,$ar_product_name[$i],$ar_price[$i],$ar_qty[$i]);
					$insert_product->execute() or die($this->conn->error);
				}
					

			}
				return $bill_no;
	}
			
	


  
	public function storeCustomerSalesReturnInvoice($sales_datereturn,$customer_name,$ar_tqty,$ar_qty,$ar_price,$ar_product_name){
		$pre_stmt=$this->conn->prepare("INSERT INTO `sales_return`(`invoice_no`, `customer_name`, `qty`, `price`, `date`) VALUES") ;
		$pre_stmt->bind_param("isiis",$invoice_no, $customer_name,$ar_qty,$ar_price,$sales_datereturn);

		$pre_stmt->execute() or die($this->conn->error);
		//$result=$pre_stmt->get_result();
		
		$salesreturn_id = $pre_stmt->insert_id;
		if($salesreturn_id != null)
		{
			for($i=0; $i < count($ar_price) ; $i++)
			{
				
				$rem_qty=$ar_tqty[$i]+$ar_qty[$i];
				
					//Update Product  Table
					$this->conn->query("UPDATE products SET product_stock='$rem_qty' WHERE product_name='".$ar_product_name[$i]."'")or die($this->conn->error);
				
				$insert_product = $this->conn->prepare("INSERT INTO salesreturn_details`(CreditNote_no`, product_name, price, qty) VALUES (?,?,?,?)");
				$insert_product->bind_param("isdd",$salesreturn_id,$ar_product_name[$i],$ar_price[$i],$ar_qty[$i]);
				$insert_product->execute() or die($this->conn->error);
			}
			return $salesreturn_id;
		}
		
	}



/*$objs=new Manage();
// echo $objs->deleteRecord("categories","cat_id",7);
// print_r($objs->getSingleRecord("categories","cat_id",1));
echo $objs->update_record("categories",["cat_id"=>2],["cat_status"=>1,"cat_name"=>"mama"]);*/

}
?>
	





















	
	


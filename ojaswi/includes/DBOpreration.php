
<?php
 
class DBOpreration
{
	private $conn;
	function __construct()
	{
		include_once('C:\xampp\htdocs\ojaswi\database\db.php');
		$db=new database();
		$this->conn=$db->connect();	
	}
	public function addCategory($cat_name){
		$pre_stmt=$this->conn->prepare("INSERT INTO `categories`( `cat_name`) VALUES (?)");
		//$cat_status=1;
		$pre_stmt->bind_param("s", $cat_name);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if($result){
			return "CATEGORY_ADDED";
		}
		else{
			return 0;
		}
	}
	public function getAllRecords($table){
		if($table=="products"){
			$pre_stmt=$this->conn->prepare("SELECT p.product_id,p.`product_name`,c.cat_name,b.brand_name,s.supplier_name,p.`product_stock`,p.`product_price`,p.`product_date`,p.`product_status` FROM products p,brands b,categories c,supplier s WHERE p.brand_id=b.brand_id AND p.cat_id=c.cat_id AND p.supplier_id=s.supplier_id");
			$pre_stmt->execute() or die($this->conn->error);
			$result=$pre_stmt->get_result();
			$rows=array();
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$rows[]=$row;                       
				}
				return $rows;
			}
			return "NO_DATA";


		}

		else{
			$pre_stmt=$this->conn->prepare("SELECT * FROM ".$table." WHERE 1");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}
		return "NO_DATA";

		}
	}
	
	public function getAllProducts(){
		$pre_stmt=$this->conn->prepare("SELECT * FROM products");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}
		return "NO_DATA";

	}
	
	public function getAllCustomers(){
		$pre_stmt=$this->conn->prepare("SELECT * FROM customer");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}
		return "NO_DATA";

	}
	
	public function getAllSuppliers(){
		$pre_stmt=$this->conn->prepare("SELECT * FROM supplier");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}
		return "NO_DATA";

	}
	
	public function getAllSales(){
		$pre_stmt=$this->conn->prepare("SELECT * FROM sales_details");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}
		return "NO_DATA";

	}
	
	public function getAllPurchase(){
		$pre_stmt=$this->conn->prepare("SELECT * FROM purchase");
		$pre_stmt->execute() or die($this->conn->error);
		$result=$pre_stmt->get_result();
		$rows=array();
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$rows[]=$row;                       
			}
			return $rows;
		}

	}

	public function addBrand($brand_name){
		$pre_stmt=$this->conn->prepare("INSERT INTO `brands`( `brand_name`) VALUES (?)");
		$brand_status=1;
		$pre_stmt->bind_param("s", $brand_name);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if($result){
			return "BRAND_ADDED";
		}
		else{
			return 0;
		}
	}
	public function addProduct($cat_id,$brand_id,$supplier_id,$product_name,$product_price,$product_stock,$product_date){
		$pre_stmt=$this->conn->prepare("INSERT INTO `products`(`cat_id`, `brand_id`, `supplier_id`, `product_name`, `product_price`, `product_stock`, `product_date`, `product_status`) VALUES (?,?,?,?,?,?,?,?)");
		$product_status=1;
		$pre_stmt->bind_param("iiisdisi", $cat_id,$brand_id,$supplier_id,$product_name,$product_price,$product_stock,$product_date,$product_status);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if($result){
			return "PRODUCT_ADDED";
		}
		else{
			return 0;
		}
	}
	
	public function addSupplier($supplier_name,$supplier_address,$supplier_contact,$supplier_pan){
		$pre_stmt=$this->conn->prepare("INSERT INTO `supplier`( `supplier_name`, `supplier_address`, `supplier_contact`,supplier_pan) VALUES (?,?,?,?)");
		$pre_stmt->bind_param("ssss", $supplier_name, $supplier_address,$supplier_contact,$supplier_pan);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if($result){
			return "SUPPLIER_ADDED";
		}
		else{
			return 0;
		}
	}
	//addcustomer
public function addCustomer($customer_name,$customer_address,$customer_contact,$customer_pan){
		$pre_stmt=$this->conn->prepare("INSERT INTO `customer`(`customer_name`, `customer_address`, `customer_contact`, `customer_pan`) VALUES (?,?,?,?)");
		$pre_stmt->bind_param("ssss", $customer_name, $customer_address,$customer_contact,$customer_pan);
		$result=$pre_stmt->execute() or die($this->conn->error);
		if($result){
			return "CUSTOMER_ADDED";
		}
		else{
			return 0;
		}
	}
}

/*$opr=new DBOpreration();
 echo $opr->addBrand("Loreal");*/
//echo "<pre>";
//print_r($opr->getAllRecords("categories"));



?>
 
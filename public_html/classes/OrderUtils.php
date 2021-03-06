<?php

include_once $root . '/classes/DBUtils.php';
class OrderUtils{

	/**
	 * This method returns the Items correlated to each Reseller, for use in the Item Order Form and Order Insert
	 *
	 * @param $spcode
	 * @return bool|mysqli_result
	 */
	function getResellerItems($spcode){
		$sql = "select USOC, Description, One_Time_Charge, Recurring_Price
		from Products P where Serv_Prov_CD =\"" . $spcode . "\"";

		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ( $sql);
	}
	
	function getOrderHistory(){
		$sql = "select p.USOC, p.Description, p.One_Time_Charge, p.Recurring_Price, o.USOC, o.Quantity
		FROM 'Products' p join orderitems o on o.Serv_Prov_CD = p.Serv_Prov_CD 
				where Serv_Prov_CD=\"" . $spcode . "\"";
		
		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ( $sql);
	}
	function getResellerDetails(){
		$sql = "select Address1, Address2, City, State, Zip, Phone, Company_Name
				from Resellers p where Serv_Prov_CD=\"" . $spcode . "\"";
		
		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);
	}
	function getNumberDetails($ordernumber){
		$sql = "select Ported_Number, IsBT, Is911
		from PortedNumbers where Order_No =\"" . $ordernumber . "\"";
		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);
	}
	/**
	 * This function returns the top level order details used by the Order History Page.
	 *
	 * @param $user
	 * @return bool|mysqli_result
	 */
	function getOrdersByAccountNo($acctNo){

		$sql = "SELECT o.Order_No, c.End_User_Name, c.Address_1, c.Address_2, c.City, c.State, c.Zip, o.Request_Built, o.Request_Service
				FROM `Orders` o
				join Customers c on o.Customer_ID = c.Customer_ID
				where o.AccountNumber = $acctNo
				Order by o.Order_no";

		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);

	}
  
	function getAdminOrders($ordernumber){
		$sql = "SELECT o.Order_No, c.End_User_Name, c.Address_1, c.Address_2, c.City, c.State, c.Zip, o.Request_Built, o.Request_Service, o.Status
				FROM `Orders` o join Customers c on o.Customer_ID = c.Customer_ID ;";
		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);
	}

	function getDisplayDetails($ordernumber){
		/*$sql = "select Ported_Number, IsBT, Is911
		from PortedNumbers where Order_No =\"" . $ordernumber . "\""; */
		$sql = "SELECT o.Emerg_Prov_Req, o.Order_Details, o.Or_Sooner, o.Request_Built, o.Request_Service, o. Reseller_Ref_ID, o. Serv_Prov_CD,
				o. Reseller_Ref_ID, o. Request_Built, o. Request_Service, o.RequiresPN, o. New_Number_Qty, o.New_Number_AC, o. Emerg_New_Number, o. VTN_Quantity,
				o.Status, c.End_User_Name, c.Address_1, c.Address_2, c.City, c.Customer_ID, c.Customer_Time_Zone, c.Cust_Telephone, c.Emerg_Address_1, c.Emerg_Address_2,
				c.Emerg_City, c.Emerg_Phone, c.Emerg_State, c.Emerg_Zip, c.End_User_Name, c.State, c.Zip
				FROM Orders o
				join Customers c on o.Customer_ID = c.Customer_ID WHERE Order_No =\"" . $ordernumber . "\"" ;

		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);
	}

	/**
	 * Attempts to return a user friendly address Stamp.
	 *
	 * @param $address1
	 * @param $address2
	 * @param $city
	 * @param $state
	 * @param $zip
	 * @return string
	 */
	function generateAddressString($address1,$address2,$city,$state,$zip){
		$string = $address1 . "<br>"
				. $address2 . "<br>"
				. $city . "," . $state . "," . $zip;
		return $string;
	}
	function getOrderDetails($orderNumber){
		$sql = "SELECT o.Emerg_Prov_Req, o.Order_Details, o.Or_Sooner, o.Request_Built, o.Request_Service, o. Reseller_Ref_ID, o. Serv_Prov_CD,
					   o.Add_Exist_Cust, c.Address_1, c.Address_2, c.City, c.Customer_ID, c.Customer_Time_Zone, c.Cust_Telephone, c.Emerg_Address_1, c.Emerg_Address_2, 
					   c.Emerg_City, c.Emerg_Phone, c.Emerg_State, c.Emerg_Zip, c.End_User_Name, c.State, c.Zip
				FROM Orders o 
				join Customers c on o.Customer_ID = c.Customer_ID
				where o.Order_No = " . $orderNumber;

		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);

	}

	function getAllOrders(){
		$sql = "SELECT o.Order_No, c.End_User_Name, c.Address_1, c.Address_2, c.City, c.State, c.Zip, o.Request_Built, o.Request_Service, o.Status
				FROM `Orders` o join Customers c on o.Customer_ID = c.Customer_ID ;";
		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);
	}


	function getOrderItems($orderNumber, $spcode){

        $sql = "Select p.USOC, Description, One_Time_Charge, Recurring_Price, Quantity
        from OrderItems oi join Products p on oi.USOC = p.USOC and p.Serv_Prov_CD = \"" . $spcode . "\""
        . " where oi.Order_No = " . $orderNumber;

		$dbutils = new DBUtils();
		$conn = $dbutils->getDBConnection();
		return $conn->query ($sql);

		/*
		while($row  = $result->fetch_array()){

			$itemName = $row["USOC"];
			$quantity = $row["Quantity"];
			$description = $row["Description"] ;
			$monthly = $row["Recurring_Price"];
			$nonRecurring = $row["One_Time_Charge"];
			$rowDetails  = [
				"itemName" = $itemName,
				"quantity" = $quantity,
				"description" = $description,
				"monthly" = $monthly,
				"nonRecurring" = $nonRecurring,
			];
		}
		*/
	}
	function parseItemCostString($str){
		if ($str === "Included") {
			return 0;
		} else {
			preg_match("/\\d+\\.\\d+/", $str, $matches);
			return $matches[0];
		}
	}

}

<?php
	// This class is for manipulating data relating to Contacts
	class Contact {
		// Variable to hold a DB instance
		private $db;
		
		// All variables for when all contacts are searched
		public $all = null; // Variable used to hold all contacts
		
		// All variables which are relating to when a user searches for a particular ID
		public $found = false, // Used to check if a contact could be found or not
			   $full_address = null; // Variable used to hold the full address of the contact
			   
		// Constructor
		public function __construct($id = null) {
			// Set the $db with an instance of the database
			$this->db = DB::get_instance();
			
			// If an $id is sent through then return the contact associated with the ID
			// Check if an $id has been sent
			if($id) {
				// $id has been sent, find only that contact
				$this->find_id($id);
			} else {
				// No $id has been sent, find all contacts
				$this->find_all();
			}
		}
		
		// Method to find all contacts in the database
		public function find_all() {
			// Return all 
			return $this->all = $this->db->query('SELECT * FROM invoice ORDER BY id', PDO::FETCH_ASSOC);
		}
		
		// Method to find specific contact in the database
		public function find_id($id = null) {
			// Check if $id has been sent
			if($id) {
				// Begin prepared statement to find single ID in database
				$sql = '
					SELECT * FROM invoice 
					WHERE id = :contact_id
				';
				$stmt = $this->db->prepare($sql);
				
				// Pass in the $id into the prepared statement and execute
				$stmt->bindParam(':contact_id', $id);
				$stmt->execute();
				
				// Fetch the results from the prepared statement
				$result = $stmt->fetch();
				
				// Check if a contact could be found
				if($result) {
					// Contact found
					$this->found = true; // Specify that a contact could be found
					// Set the properties of the class as per the users details
					$this->contact_id = htmlentities($this->contact_id($result['id']));
					$this->name = htmlentities($this->name($result['name']));
					$this->country = htmlentities($this->country($result['country']));
					$this->state = htmlentities($this->state($result['state']));
					$this->city = htmlentities($this->city($result['city']));
					$this->zip = htmlentities($this->zip($result['zip']));
					$this->email = htmlentities($this->email($result['email']));
					$this->phone = htmlentities($this->phone($result['phone']));
					$this->address1 = htmlentities($this->address1($result['address1']));
					$this->address2 = htmlentities($this->address2($result['address2']));

					$this->product1 = htmlentities($this->product1($result['product1']));
					$this->product2 = htmlentities($this->product2($result['product2']));
					$this->product3 = htmlentities($this->product3($result['product3']));
					$this->product4 = htmlentities($this->product4($result['product4']));
					$this->product5 = htmlentities($this->product5($result['product5']));

					$this->quantity1 = htmlentities($this->quantity1($result['quantity1']));
					$this->quantity2 = htmlentities($this->quantity2($result['quantity2']));
					$this->quantity3 = htmlentities($this->quantity3($result['quantity3']));
					$this->quantity4 = htmlentities($this->quantity4($result['quantity4']));
					$this->quantity5 = htmlentities($this->quantity5($result['quantity5']));

					$this->cost1 = htmlentities($this->cost1($result['cost1']));
					$this->cost2 = htmlentities($this->cost1($result['cost2']));
					$this->cost3 = htmlentities($this->cost3($result['cost3']));
					$this->cost4 = htmlentities($this->cost4($result['cost4']));
					$this->cost5 = htmlentities($this->cost5($result['cost5']));

					$this->total1 = htmlentities($this->total1($result['total1']));
					$this->total2 = htmlentities($this->total2($result['total2']));
					$this->total3 = htmlentities($this->total3($result['total3']));
					$this->total4 = htmlentities($this->total4($result['total4']));
					$this->total5 = htmlentities($this->total5($result['total5']));

					$this->subtotal = htmlentities($this->subtotal($result['subtotal']));
					$this->alltotal = htmlentities($this->alltotal($result['alltotal']));
					$this->discount = htmlentities($this->discount($result['discount']));

					$this->date = htmlentities($this->cosmetic_mysqldate($result["date"]));
					$this->signature = htmlentities($this->signature($result['signature']));

					// Return all of the details of the contact
					return $this->single = $result;
				} else {
					// Contact not found, return false
					return false;
				}
			} else {
				// $id not sent, return false
				return false;
			}
		}
		
		


		
		public function remove_white_space($string) {
			// Remove all white space within the string
			return preg_replace('/\s+/', '', $string);
		}
		

		
		public function name($name){
			if($name != null ) {
				return $name;
			} else {
				return $name;
			}
		}

		public function country($country){
			if($country != null ) {
				return $country;
			} else {
				return $country;
			}
		}
		public function state($state){
			if($state != null ) {
				return $state;
			} else {
				return $state;
			}
		}
		public function city($city){
			if($city != null ) {
				return $city;
			} else {
				return $city;
			}
		}
				public function zip($zip){
			if($zip != null ) {
				return $zip;
			} else {
				return $zip;
			}
		}
		
				public function email($email){
			if($email != null ) {
				return $email;
			} else {
				return $email;
			}
		}
		
				public function phone($phone){
			if($phone != null ) {
				return $phone;
			} else {
				return $phone;
			}
		}
		
				public function address1($address1){
			if($address1 != null ) {
				return $address1;
			} else {
				return $address1;
			}
		}
		
				public function contact_id($contact_id){
			if($contact_id != null ) {
				return $contact_id;
			} else {
				return $contact_id;
			}
		}
				public function address2($address2){
			if($address2 != null ) {
				return $address2;
			} else {
				return $address2;
			}
		}

		public function product1($product1){
			if($product1 != null ) {
				return $product1;
			} else {
				return $product1;
			}
		}
		public function product2($product2){
			if($product2 != null ) {
				return $product2;
			} else {
				return $product2;
			}
		}
		public function product3($product3){
			if($product3 != null ) {
				return $product3;
			} else {
				return $product3;
			}
		}
		public function product4($product4){
			if($product4 != null ) {
				return $product4;
			} else {
				return $product4;
			}
		}
		public function product5($product5){
			if($product5 != null ) {
				return $product5;
			} else {
				return $product5;
			}
		}

		public function quantity1($quantity1){
			if($quantity1 != null ) {
				return $quantity1;
			} else {
				return $quantity1;
			}
		}
		public function quantity2($quantity2){
			if($quantity2 != null ) {
				return $quantity2;
			} else {
				return $quantity2;
			}
		}
		public function quantity3($quantity3){
			if($quantity3 != null ) {
				return $quantity3;
			} else {
				return $quantity3;
			}
		}
		public function quantity4($quantity4){
			if($quantity4 != null ) {
				return $quantity4;
			} else {
				return $quantity4;
			}
		}
		public function quantity5($quantity5){
			if($quantity5 != null ) {
				return $quantity5;
			} else {
				return $quantity5;
			}
		}
		public function cost1($cost1){
			if($cost1 != null ) {
				return $cost1;
			} else {
				return $cost1;
			}
		}
		public function cost2($cost2){
			if($cost2 != null ) {
				return $cost2;
			} else {
				return $cost2;
			}
		}
		public function cost3($cost3){
			if($cost3 != null ) {
				return $cost3;
			} else {
				return $cost3;
			}
		}
		public function cost4($cost4){
			if($cost4 != null ) {
				return $cost4;
			} else {
				return $cost4;
			}
		}
		public function cost5($cost5){
			if($cost5 != null ) {
				return $cost5;
			} else {
				return $cost5;
			}
		}
		public function total1($total1){
			if($total1 != null ) {
				return $total1;
			} else {
				return $total1;
			}
		}
		public function total2($total2){
			if($total2 != null ) {
				return $total2;
			} else {
				return $total2;
			}
		}
		public function total3($total3){
			if($total3 != null ) {
				return $total3;
			} else {
				return $total3;
			}
		}
		public function total4($total4){
			if($total4 != null ) {
				return $total4;
			} else {
				return $total4;
			}
		}
		public function total5($total5){
			if($total5 != null ) {
				return $total5;
			} else {
				return $total5;
			}
		}
		public function subtotal($subtotal){
			if($subtotal != null ) {
				return $subtotal;
			} else {
				return $subtotal;
			}
		}
		public function alltotal($alltotal){
			if($alltotal != null ) {
				return $alltotal;
			} else {
				return $alltotal;
			}
		}
		public function discount($discount){
			if($discount != null ) {
				return $discount;
			} else {
				return $discount;
			}
		}
		public function date($date){
			if($date != null ) {
				return $date;
			} else {
				return $date;
			}
		}
		public function signature($signature){
			if($signature != null ) {
				return $signature;
			} else {
				return $signature;
			}
		}

		
		private function cosmetic_mysqldate($mysql_date = null) {
			if($mysql_date) {
				// Convert MySQL date to a UNIX time stamp
				$unix_date = strtotime($mysql_date);
				
				// Format date into correct string, example: Saturday 1st May 1993
				$cosmetic_date = date('d.m.Y', $unix_date);
				return $cosmetic_date;
			} else {
				return false;
			}
		}
		
		private function cosmetic_mysqldate2($mysql_date = null) {
			if($mysql_date) {
				// Convert MySQL date to a UNIX time stamp
				$unix_date = strtotime($mysql_date);
				
				// Format date into correct string, example: Saturday 1st May 1993
				$cosmetic_date2 = date('d.m.Y H:i', $unix_date);
				return $cosmetic_date2;
			} else {
				return false;
			}
		}
					
		
	}; // Close class Contact
	
// EOF
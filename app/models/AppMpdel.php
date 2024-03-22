
<?php
class AppMpdel {

    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function getCustomerID(){
        return $guid = bin2hex(openssl_random_pseudo_bytes(16));
    } 

      //function to fetch Dashboard Stats
      public function loadDashboardStats() {

        //Prepared statement
        $this->db->query("SELECT (SELECT SUM(TOTAL_AMOUNT) FROM Delush_ORDERS WHERE ORDER_STATUS IN (0,1))TOTAL_SALES,
                        (SELECT COUNT(*) FROM Delush_ORDERS WHERE ORDER_STATUS IN (0,1))TOTAL_ORDER,
                        (SELECT COUNT(*) FROM Delush_ORDERS WHERE ORDER_STATUS = 0)PENDING_ORDERS;");

        $row = $this->db->single();

        return $row;
        }

        //function to complete customer order
        public function completeCustomerOrder($data) {

            try{

                $this->db->query("UPDATE Delush_ORDERS SET ORDER_STATUS = 1, DATE_PROCESSED = :dateProcessed, DELIVERY_CONTACT_NAME = :deliveryName,
                                DELIVERY_CONTACT_PHONE = :deliveryPhone,
                                PROCESSED_BY = :processBy, COMMENT = :comment WHERE ORDER_ID = :orderid;");
        
                $date =  date('Y-m-d H:i:s');
            
                //Bind values
                $this->db->bind(':orderid', $data['orderid']);
                $this->db->bind(':comment', $data['comment']);
                $this->db->bind(':deliveryName', $data['deliveryName']);
                $this->db->bind(':deliveryPhone', $data['deliveryPhone']);
                $this->db->bind(':dateProcessed', $date);
                $this->db->bind(':processBy', $data['userid']);
            
                    //Execute function
                    if ($this->db->execute()) {

                        //complete order items
                        $this->completeCustomerOrderItems($data['orderid'], $data['userid']);

                        return true;
                    } else {

                        return false;
                    }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }   


        }// end of function


         //function to complete customer order
         public function completeCustomerOrderItems($orderID, $userid) {

            try {

        
                $this->db->query("UPDATE Delush_ORDER_ITEMS SET ORDER_STATUS = 1, 
                                DATE_PROCESSED = :dateProcessed, PROCESSED_BY = :processBy WHERE ORDER_ID = :orderid");
        
                $date =  date('Y-m-d H:i:s');
            
                //Bind values
                $this->db->bind(':orderid', $orderID);
                $this->db->bind(':dateProcessed', $date);
                $this->db->bind(':processBy', $userid);
            
                    //Execute function
                    if ($this->db->execute()) {

                        return true;
                    } else {

                        return false;

                    }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }   


        }// end of function

        //function to load customer order
        public function loadCustomerOrder() {

            //Prepared statement
            $this->db->query("SELECT R.ORDER_STATUS, R.ORDER_ID, R.ORDER_NUMBER, E.FIRST_NAME, E.LAST_NAME, E.MOBILE_PHONE, 
                              R.TOTAL_AMOUNT, R.ORDER_ITEMS_COUNT, R.DATE_CREATED FROM Delush_ORDERS R LEFT JOIN 
                              Delush_ENTRY E ON R.CUSTOMER_ID = E.CUSTOMER_ID WHERE R.ORDER_STATUS IN (0,1) ORDER BY 
                              R.DATE_CREATED DESC;");
    
            $results = $this->db->resultSet();
    
            return $results;
    }

    //function to load managed funds
    public function loadCustomerOrderItems($orderid) {

        //Prepared statement
        $this->db->query("SELECT (SELECT MOBILE_PHONE FROM Delush_ENTRY WHERE CUSTOMER_ID = R.CUSTOMER_ID)PHONE,
                         (SELECT CONCAT(FIRST_NAME,' ',LAST_NAME) FROM Delush_ENTRY WHERE CUSTOMER_ID = R.CUSTOMER_ID)CUSTOMER_NAME,
                         R.ORDER_NUMBER, R.TOTAL_AMOUNT, R.ORDER_ITEMS_COUNT, 
                         (SELECT FOOD_NAME FROM Delush_FOOD_MENU WHERE FOOD_MENU_ID = O.FOOD_MENU_ID)FOOD_NAME, 
                         O.AMOUNT, O.QUANTITY, O.BULK_ORDER FROM Delush_ORDER_ITEMS O LEFT JOIN Delush_ORDERS R ON 
                         O.ORDER_ID = R.ORDER_ID WHERE O.ORDER_ID = :orderid;");
        
         //Bind value
         $this->db->bind(':orderid', $orderid);

        $results = $this->db->resultSet();

        return $results;
    }


    //function to load managed funds
    public function loadCustomerCompletedOrderItems($orderid) {

        //Prepared statement
        $this->db->query("SELECT (SELECT MOBILE_PHONE FROM Delush_ENTRY WHERE CUSTOMER_ID = R.CUSTOMER_ID)PHONE,
                         (SELECT CONCAT(FIRST_NAME,' ',LAST_NAME) FROM Delush_ENTRY WHERE CUSTOMER_ID = R.CUSTOMER_ID)CUSTOMER_NAME,
                         R.ORDER_NUMBER, R.TOTAL_AMOUNT, R.ORDER_ITEMS_COUNT, R.COMMENT, 
                         (SELECT CONCAT(FIRST_NAME, ' ', LAST_NAME) FROM Delush_USER_ENTRY WHERE ENTRY_ID = R.PROCESSED_BY)PROCESSED_BY,
                         R.DATE_PROCESSED, 
                         (SELECT FOOD_NAME FROM Delush_FOOD_MENU WHERE FOOD_MENU_ID = O.FOOD_MENU_ID)FOOD_NAME, 
                         O.AMOUNT, O.QUANTITY, O.BULK_ORDER FROM Delush_ORDER_ITEMS O LEFT JOIN Delush_ORDERS R ON 
                         O.ORDER_ID = R.ORDER_ID WHERE O.ORDER_ID = :orderid;");
        
         //Bind value
         $this->db->bind(':orderid', $orderid);

        $results = $this->db->resultSet();

        return $results;
    }

        //function to load managed funds
        public function loadFoodMenu() {

            //Prepared statement
            $this->db->query("SELECT * FROM Delush_FOOD_MENU WHERE STATUS IN (0,1,2) ORDER BY DATE_CREATED DESC");
    
            $results = $this->db->resultSet();
    
            return $results;
    }

        //function to fetch Dashboard Stats
        public function loadStoreSetup() {

            //Prepared statement
            $this->db->query("SELECT * FROM `Delush_STORE_SETUP` WHERE SETUP_NAME = 'BULK DISCOUNT';");
    
            $row = $this->db->single();
    
            return $row;
        }

     //function to fetch Dashboard Stats
     public function loadFoodMenuData($menuid) {

        //Prepared statement
        $this->db->query("SELECT * FROM Delush_FOOD_MENU WHERE FOOD_MENU_ID = :foodMenuId");

        $this->db->bind(':foodMenuId', $menuid);

        $row = $this->db->single();

        return $row;
    }
             //function to fetch Dashboard Stats
             public function updateDisableMenuID($menuid, $userid) {

                try{
            
                    $this->db->query("UPDATE Delush_FOOD_MENU SET STATUS = 2, DATE_UPDATED = :dateUpdated, UPDATED_BY = :updatedBy 
                                      WHERE FOOD_MENU_ID = :menuid");
            
                    $date =  date('Y-m-d H:i:s');

                    //Bind values
                    $this->db->bind(':menuid', $menuid);
                    $this->db->bind(':dateUpdated', $date);
                    $this->db->bind(':updatedBy', $userid);
                
                        //Execute function
                        if ($this->db->execute()) {
                        return true;
                        } else {
                        return false;
                        }
            
                    }catch(PDOException $e){
                        echo 'ERROR!';
                        print_r( $e );
                    }   
            }
    
     // function to create user role
     public function updateFoodMenu($data) {
        
        try{
            
            $this->db->query("UPDATE Delush_FOOD_MENU SET CATEGORY_ID = @categoryid, FOOD_NAME = :foodname, DESCRIPTION = :foodDesc, 
                              AMOUNT = :foodamount, QUANTITY = :quantity, FOOD_MENU_IMG = :img_data, DATE_UPDATED = :datecreated, UPDATED_BY = :createdBy 
                              WHERE FOOD_MENU_ID = :menu_id");
    
            $date =  date('Y-m-d H:i:s');
            
            //Bind values
            $this->db->bind(':menu_id', $data['menu_id']);
            $this->db->bind(':categoryid', $data['foodCategory']);
            $this->db->bind(':foodname', $data['foodname']);
            $this->db->bind(':foodDesc', $data['fooddesc']);
            $this->db->bind(':foodamount', $data['foodamount']);
            $this->db->bind(':quantity', $data['foodquant']);
            $this->db->bind(':img_data', $data['imageblob']);
            $this->db->bind(':datecreated', $date);
            $this->db->bind(':createdBy', $data['userid']);
        
                //Execute function
                if ($this->db->execute()) {
                return true;
                } else {
                return false;
                }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }   

    }    
    
    
      // function to update
      public function saveStoreSetup($value, $type, $userid) {
        
        try{

               //Prepared statement
               $this->db->query("SELECT * FROM Delush_STORE_SETUP WHERE SETUP_NAME = :setupname");

               $this->db->bind(':setupname', $type);

               $row = $this->db->single();

               if($row) {

                        //update value
                         $this->db->query("UPDATE Delush_STORE_SETUP SET SETUP_VALUE = :setupvalue, DATE_UPDATED = :dateUpdated, 
                                          UPDATED_BY = :updatedBy WHERE SETUP_NAME = :setupname");

                        $date =  date('Y-m-d H:i:s');
                        
                        //Bind values
                        $this->db->bind(':setupname', $type);
                        $this->db->bind(':setupvalue',$value);
                        $this->db->bind(':dateUpdated', $date);
                        $this->db->bind(':updatedBy', $userid);

                        //Execute function
                        if ($this->db->execute()) {
                            return true;
                        } else {
                            return false;
                        }

               }else {

                      // create new value
                      $this->db->query("INSERT INTO Delush_STORE_SETUP (SETUP_ID, SETUP_NAME, SETUP_VALUE, DATE_CREATED, CREATED_BY)
                                        VALUES (:setupid, :setupname, :setupvalue, :dateCreated, :createdBy)");

                        $date =  date('Y-m-d H:i:s');
                        $setupid = $this->getCustomerID();
                        
                        //Bind values
                        $this->db->bind(':setupid', $setupid);
                        $this->db->bind(':setupname', $type);
                        $this->db->bind(':setupvalue',$value);
                        $this->db->bind(':dateCreated', $date);
                        $this->db->bind(':createdBy', $userid);

                        //Execute function
                        if ($this->db->execute()) {
                            return true;
                        } else {
                            return false;
                        }
               }

            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }   

    }    

     // function to create user role
     public function createFoodMenu($data) {
        
        try{
            
            $this->db->query("INSERT INTO Delush_FOOD_MENU (FOOD_MENU_ID, CATEGORY_ID, FOOD_NAME, DESCRIPTION, AMOUNT, 
                            QUANTITY, FOOD_MENU_IMG, DATE_CREATED, CREATED_BY)
                            VALUES(:foodid, :categoryid, :foodname, :foodDesc, :foodamount, :quantity, :img_data, :datecreated, :createdBy)");
    
            $date =  date('Y-m-d H:i:s');
            $foodid = $this->getCustomerID();
            
            //Bind values
            $this->db->bind(':foodid', $foodid);
            $this->db->bind(':categoryid', $data['foodCategory']);
            $this->db->bind(':foodname', $data['foodname']);
            $this->db->bind(':foodDesc', $data['fooddesc']);
            $this->db->bind(':foodamount', $data['foodamount']);
            $this->db->bind(':quantity', $data['foodquant']);
            $this->db->bind(':img_data', $data['imageblob']);
            $this->db->bind(':datecreated', $date);
            $this->db->bind(':createdBy', $data['userid']);
        
                //Execute function
                if ($this->db->execute()) {
                return true;
                } else {
                return false;
                }
    
            }catch(PDOException $e){
                echo 'ERROR!';
                print_r( $e );
            }   

    }

}
?>
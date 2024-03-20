<?php

class Dashboard extends Controller {

    public function __construct(){

        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        $this->userModel = $this->model('AppMpdel');
    }

    // ************** HOME DASHBOARD ******************* //
    public function createFoodMenu() {

        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'foodCategory' => trim($_POST['foodCategory']),
                'foodname' => trim($_POST['foodName']),
                'fooddesc' => trim($_POST['foodDesc']),
                'foodamount' => trim($_POST['foodAmount']),
                'foodquant' => trim($_POST['foodQuant']),
                'userid' => $userid,
                'fieldError' => '',
                'active' => 'home',
            ];

            $path = $_SERVER['DOCUMENT_ROOT'].'/delushAdmin/public/uploads/';

            $tmp = $_FILES['file']['tmp_name'];

            $img = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            $final_image = rand(1000, 1000000) . $img;

            $path = $path.strtolower($final_image); 

            if (move_uploaded_file($tmp, $path)) {

                $img_data = file_get_contents($path);
                $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($img_data);

                $data['imageblob'] = $base64;
            }

            //validate error and post 
            if ($data['fieldError'] == '') {

                // create
                $create = $this->userModel->createFoodMenu($data);

                // create
                if($create) {

                    echo '1';
                  
                }else{
                    echo '2';
                }
            }
        }
    }
    // ************* END OF FUNCTION ****************** //


     // ************** HOME DASHBOARD ******************* //
     public function updateFoodMenu() {

        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'menu_id' => trim($_POST['foodMenuid']),
                'foodCategory' => trim($_POST['foodCategory']),
                'foodname' => trim($_POST['foodName']),
                'fooddesc' => trim($_POST['foodDesc']),
                'foodamount' => trim($_POST['foodAmount']),
                'foodquant' => trim($_POST['foodQuant']),
                'userid' => $userid,
                'fieldError' => '',
                'active' => 'home',
            ];

            $path = $_SERVER['DOCUMENT_ROOT'].'/delushAdmin/public/uploads/';

            $tmp = $_FILES['file']['tmp_name'];

            $img = $_FILES['file']['name'];

            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            $final_image = rand(1000, 1000000) . $img;

            $path = $path.strtolower($final_image); 

            if (move_uploaded_file($tmp, $path)) {

                $img_data = file_get_contents($path);
                $base64 = 'data:image/' . $ext . ';base64,' . base64_encode($img_data);

                $data['imageblob'] = $base64;
            }

            //validate error and post 
            if ($data['fieldError'] == '') {

                // create
                $create = $this->userModel->createFoodMenu($data);

                // create
                if($create) {

                    echo '1';
                  
                }else{
                    echo '2';
                }
            }
        }
    }
    // ************* END OF FUNCTION ****************** //


     // ************** complete order function ******************* //
     public function completeCustomerOrder() {

        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "homehome?isLogged=0");
        }

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'orderid' => trim($_POST['orderID']),
                'comment' => trim($_POST['comment']),
                'deliveryName' => trim($_POST['delName']),
                'deliveryPhone' => trim($_POST['delPhone']),
                'userid' => $userid,
                'fieldError' => '',
            ];

            //validate error and post 
            if ($data['fieldError'] == '') {

                // create
                $create = $this->userModel->completeCustomerOrder($data);

                // create
                if($create) {

                    echo '1';
                  
                }else{
                    echo '2';
                }
            }
        }
    }
    // ************* END OF FUNCTION ****************** //

    // function to load order break down items
    public function loadOrderItems() {

        if(isLoggedIn()){
            
            $customerid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }
           //Check for post
           if($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $orderid = $_POST['orderID'];

                // create
                $orderList = $this->userModel->loadCustomerOrderItems($orderid);

                echo json_encode($orderList);
           }

    }// end of function


    // function to load order break down items
    public function fetchCustomerCompletedOrder() {

        if(isLoggedIn()){
            
            $customerid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }
           //Check for post
           if($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $orderid = $_POST['orderID'];

                // create
                $orderList = $this->userModel->loadCustomerCompletedOrderItems($orderid);

                echo json_encode($orderList);
           }

    }// end of function


    // ************** HOME MANAGE MENU ******************* //
      public function manageOrder() {

        if(isLoggedIn()){
            
            $customerid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }

        $orderList = $this->userModel->loadCustomerOrder();

        $data = [
            'event' => '',
            'title' => 'Manage Food Orders',
            'active' => 'manageOrder',
            'parent' => 'order',
            'orders' => $orderList
        ];

        $this->view('order/manageOrder', $data);
    }

    // ************* END OF FUNCTION ****************** //

    // **************** FUNCTION TO DISABLE FOOD MENU ID ****************** //
    public function disableFoodMenu() {


        if(isLoggedIn()){
                
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }


       //Check for post
       if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $menu_food_id = $_POST['menu_food_id'];

            // create
            $foodMenu = $this->userModel->updateDisableMenuID($menu_food_id, $userid);

            if($foodMenu) {
                echo '1';
            }else{
                echo '2';
            }
        
        }

    }

    // **************** END OF FUNCTION ***************//

           // ************** HOME MANAGE MENU ******************* //
           public function manageMenu() {

            if(isLoggedIn()){
                
                $customerid = $_SESSION['user_id'];
                
            }else{
    
                header("Location: " . URLROOT . "home?isLogged=0");
            }

            $foodMenu = $this->userModel->loadFoodMenu();

            $data = [
            'event' => '',
            'title' => 'Manage Food Menu',
            'active' => 'manageFood',
            'parent' => 'food',
            'menus' => $foodMenu
            ];
    
            $this->view('dashboard/manageMenu', $data);
        }
        // ************* END OF FUNCTION ****************** //


           // ************** HOME MANAGE MENU ******************* //
           public function loadMenuDetails() {

            if(isLoggedIn()){
                
                $customerid = $_SESSION['user_id'];
                
            }else{
    
                header("Location: " . URLROOT . "home?isLogged=0");
            }


           //Check for post
           if($_SERVER['REQUEST_METHOD'] == 'POST') {

                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $menuid = $_POST['menuid'];

                // create
                $foodMenu = $this->userModel->loadFoodMenuData($menuid);

                echo json_encode($foodMenu);
            
            }
  
        }
        // ************* END OF FUNCTION ****************** //

        // ************** HOME DASHBOARD ******************* //
        public function home() {

            if(isLoggedIn()){
                
                $customerid = $_SESSION['user_id'];
                
            }else{
    
                header("Location: " . URLROOT . "home?isLogged=0");
            }

            $orderList = $this->userModel->loadCustomerOrder();

            $dashStats = $this->userModel->loadDashboardStats();

            $data = [
                'title' => 'Dashboard',
                'active' => 'Dashboard',
                'parent' => 'dashboard',
                'orders' => $orderList,
                'dashStats' => $dashStats,
            ];
   
            $this->view('dashboard/dashboard', $data);
        }
        // ************* END OF FUNCTION ****************** //

}
?>
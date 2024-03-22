<?php

class Account extends Controller {

    public function __construct(){

        error_reporting(E_ALL);
        ini_set('display_errors', 'On');

        $this->userModel = $this->model('UserAccount');
    }


    // function to create role
    public function createUserRole() {


        $data = [
            'roleName' => 'Administrator',
            'roleDesc' => "Administrative functionalities and features",
            'userid' => "System",
            'remoteIP' => $this->getRealIPAddr(),
            'status' => 'false'
        ];

        $create = $this->userModel->createUserRole($data);

        if($create) {
            echo 'Role has been created successfully!';
        }else {
            echo 'Unable to create role';
        }

    }

    // function to create user
    public function createNewUser() {


        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }


        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'firstname' => trim($_POST['userFirstname']),
                'lastname' => trim($_POST['userLastname']),
                'email' => trim($_POST['userEmail']),
                'mobile' => trim($_POST['userPhone']),
                'roleid' => trim($_POST['userRole']),
                'userid' => $userid,
                'password' => '',
                'errorMessage' => '',
                'remoteIP' => $this->getRealIPAddr(),
                'status' => 'false'
            ]; 
      
           // Hash password
           $data['password'] = password_hash('1234567', PASSWORD_DEFAULT);

           //Register user from model function
           if ($this->userModel->register($data)) { 

               echo '1';
               exit();

           } else {

               echo '2';
               exit();
           }

        }
    }

    public function getRealIPAddr()
    {
        //check ip from share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //to check ip is pass from proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function createUserSession($user) {

        //set session values
        $_SESSION['user_id'] = $user->ENTRY_ID;
        $_SESSION['username'] = $user->USERNAME;
        $_SESSION['firstname'] = $user->FIRST_NAME;
        $_SESSION['mobile'] = $user->MOBILE_PHONE;
        $_SESSION['email'] = $user->EMAIL_ADDRESS;
        $_SESSION['role'] = $user->ROLE_ID;

        //redirect to home page
        header('location:' . URLROOT . 'dashboard/home');

    }

    public function manageUsers() {

        if(isLoggedIn()){
            
            $userid = $_SESSION['user_id'];
            
        }else{

            header("Location: " . URLROOT . "home?isLogged=0");
        }

      
        $userList = $this->userModel->loadActiveUser();

        $data = [
            'event' => '',
            'title' => 'Manage Users',
            'active' => 'manageUser',
            'parent' => 'system',
            'users' => $userList
        ];

        $this->view('dashboard/manageUsers', $data);
        
    }

    public function logoutUser() {

        $userid = $_SESSION['user_id'];

        $logoutUser = $this->userModel->logoutUser($userid);

        if($logoutUser) {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['firstname']);
            unset($_SESSION['mobile']);
            unset($_SESSION['email']);
            unset($_SESSION['role']);
        }

          //redirect to home page
          header('location:' . URLROOT . '/signin');

    }

    public function authenticateUser() {

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['entry']),
                'fieldError' => '',
                'remoteIP' => $this->getRealIPAddr(),
                'active' => 'home',
            ];

            //Validate username
            if (empty($data['username'])) {
                $data['fieldError'] = 'Username or password cannot be empty!';
            }

            //Validate username
            if (empty($data['entry'])) {
                $data['fieldError'] = 'Username or password cannot be empty!';
            }

            //Check if all errors are empty
            if ($data['fieldError'] != '') {

                $loggedInUser = $this->userModel->login($data['username'], $data['password'], $data['remoteIP']);

        
                if ($loggedInUser) {

                    $this->createUserSession($loggedInUser);

                } else {

                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('index', $data);
                }

                exit();

            }else {

                $this->view('index', $data);
            }

        }

        $data = [
            'event' => '',
            'title' => 'Account Login',
            'active' => 'home',
        ];

        $this->view('index', $data);
        
    }

}

?>
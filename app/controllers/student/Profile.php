<?php
class Profile extends Controller {
    public function __construct() {
        $this->studentModel = $this->model('Student');
    }

    // student(controller)/profile(file)/index(method)/14(params)
    //public function index(14){}
    public function index($id) {
        $info = $this->studentModel->getInfo($id);
        $data = [
            'title' => 'Home page',
            'info' => $info,
        ];

        $this->view('student/profile/index', $data);
    }

    public function register() {
        $data = [
            'username' => '',
            'email' => '',
            'firstname' => '',
            'lastname' => '',
            'nic' => '',
            'address' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'nic' => trim($_POST['nic']),
                'address' => trim($_POST['address']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }
            if ($this->studentModel->findUserByUsername($data['username'])) {
            $data['usernameError'] = 'username is already taken.';
            
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->studentModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }

           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->studentModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/student/profile/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/register', $data);
    }

    
    public function login() {
        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->studentModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('users/login', $data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = "student";
        header('location:' . URLROOT . '/student/index');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/student/profile/login');
    }
    public function update($id){

        $info = $this->studentModel->getInfo($id);

        $data = [
            'info' => $info,
            'id' => '',
            'firstname'=> '',
            'lastname'=> '',
            'username'=> '',
            'email'=> '',
           
            'address'=> '',
        
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'info' => $info,
                'firstname'=> ($_POST["firstname"]),
                'lastname'=> ($_POST["lastname"]),
                'email'=> ($_POST["email"]),
                'address'=> ($_POST["address"]),
               
                
                
            ];

           
            if ($this->studentModel->updateProfile($data)) {
                    $this->index($id);
            } else {
                die("Something went wrong, please try again!");
            }
        }

        

    }
    

    public function about() {
        $this->view('about');
    }
}

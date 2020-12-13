<?php
class Students extends Controller {
    public function __construct() {
        $this->studentModel = $this->model('Student');
    }

    public function index() {
        $students = $this->studentModel->findAllStudents();
        if(!isLoggedIn()) {
            header("Location: " . URLROOT . "/librarian/users/login");
        }
        $data = [
            'title' => 'Students page',
            'students' => $students
        ];

        $this->view('librarian/students/index', $data);
    }
    public function create(){
        $data = [
            'id' => '',
            'regis_num' => '',
            'firstname' => '',        
            'firstname' => '',
            'lastname' => '',            
            'username' => '',            
            'grade' => '',         
            'address' => '',           
            'email' => '',         
            'nic' => '',       
            'password' => '',        
            'active' => "Yes",
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => '',
                'regis_num' => trim($_POST['regis_num']),
                'firstname' => trim($_POST['firstname']),
                'lastname' => trim($_POST['lastname']),
                'username' => trim($_POST['username']),
                'grade' => trim($_POST['grade']),
                'address' => trim($_POST['address']),
                'email' => trim($_POST['email']),
                'nic' => trim($_POST['nic']),
                'password' => trim($_POST['pass']),
                'active' => "Yes",

            ];
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT); 
            if ($this->studentModel->addStudent($data)) {
                    $this->index();
                } else {
                    die("Something went wrong, please try again!");
                }
            
        }

        
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
                $info = $this->studentModel->getInfo($id);
                $data = [
                    'info' => $info,                   
                ];
                $this->view('librarian/students/update',$data);
                
            } else {
                die("Something went wrong, please try again!");
            }
        }

        $this->view('librarian/students/update', $data);;
        

    }

   


    public function approve($id){
        $this->studentModel->approve($id);
        $this->index();


    } 
    public function notApprove($id){
        $this->studentModel->notApprove($id);
        $this->index();

    }
    public function delete($id){
        if($this->studentModel->deleteStudentById($id)){
            $this->index();
        }else{
            die('Something went wrong!');
        }
        
    }
    
   

   
}

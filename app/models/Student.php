<?php
class Student {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getInfo($id){
        $this->db->query('SELECT * FROM student_info WHERE id= :id ');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;

    }
    public function findAllStudents() {
        $this->db->query('SELECT * FROM student_info ORDER BY id DESC');

        $results = $this->db->resultSet();

        return $results;
    }
    public function approve($id){
        $this->db->query('UPDATE student_info SET active = :active  WHERE id = :id');

        $this->db->bind(':id', (int)$id);
        $this->db->bind(':active', "Yes");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function notApprove($id){
        $this->db->query('UPDATE student_info SET active = :active  WHERE id = :id');

        $this->db->bind(':id', (int)$id);
        $this->db->bind(':active', "No");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteStudentById($id){
        
        $this->db->query('DELETE FROM student_info WHERE id = :id');

        $this->db->bind(':id', (int)$id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }


    public function addStudent($data) {
        $this->db->query('INSERT INTO student_info (id, firstname, lastname, username, address, email, nic, password,active) VALUES (:id,:firstname,:lastname,:username,:address,:email,:nic,:password,:active)');

        $this->db->bind(':id', '');
     
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':username', $data['username']);

        $this->db->bind(':address', $data['address']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':active', $data['active']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProfile($data){
        $this->db->query('UPDATE student_info SET firstname=:firstname,lastname=:lastname,email=:email,address=:address WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':address', $data['address']);
       

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }



    }
    public function getTotalStudentsCount(){

         $this->db->query('SELECT * FROM student_info');

         $results = $this->db->rowCount();
         
         return $results;

    }
    public function register($data) {
        $this->db->query('INSERT INTO student_info (username, email, firstname,lastname,nic,active,address,password) VALUES(:username, :email,:firstname,:lastname,:nic,:active,:address, :password)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':nic', $data['nic']);
        $this->db->bind(':active', "No");
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':password', $data['password']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($username, $password) {
        $this->db->query('SELECT * FROM student_info WHERE username = :username');

        //Bind value
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM student_info WHERE email = :email');
        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);
        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function findUserByUsername($username) {
        //Prepared statement
        $this->db->query('SELECT * FROM student_info WHERE username = :username');
        //Email param will be binded with the email variable
        $this->db->bind(':username', $username);
        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }


    
}

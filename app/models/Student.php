<?php
class Student {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function findAllStudents() {
        $this->db->query('SELECT * FROM student_info');

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
        $this->db->query('INSERT INTO student_info (id, regis_num, firstname, lastname, username, grade, address, email, nic, password,active) VALUES (:id,:regis_num,:firstname,:lastname,:username,:grade,:address,:email,:nic,:password,:active)');

        $this->db->bind(':id', '');
        $this->db->bind(':regis_num', $data['regis_num']);
        $this->db->bind(':firstname', $data['firstname']);
        $this->db->bind(':lastname', $data['lastname']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':grade', $data['grade']);
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
    public function getTotalStudentsCount(){

         $this->db->query('SELECT * FROM student_info');

         $results = $this->db->rowCount();
         
         return $results;

    }

    
}

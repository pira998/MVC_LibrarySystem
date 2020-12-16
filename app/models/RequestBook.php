<?php
class RequestBook {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
    
    }
    public function findAllRequestedBooks(){
        $this->db->query('SELECT * FROM requested_books WHERE isIssued = :isIssued');

        
        $this->db->bind(':isIssued',"No");

        $results = $this->db->resultSet();

        return $results;
    }
    public function findAllRequestedBooksByStudentId($id){
        $this->db->query('SELECT * FROM requested_books WHERE isIssued = :isIssued AND user_id=:id');

        $this->db->bind(':id',$id);
        $this->db->bind(':isIssued',"No");

        $results = $this->db->resultSet();

        return $results;
    }
    public function getInfo($id){
        $this->db->query('SELECT * FROM requested_books WHERE id= :id');
        $this->db->bind(':id', $id);

     
        $row = $this->db->single();

        return $row;

    }

    public function request($data){
        $this->db->query('INSERT INTO requested_books (id,book_id,user_id,requested_time, isIssued) VALUES (:id,:book_id,:user_id,:requested_time, :isIssued)');

        $this->db->bind(':id','');
        $this->db->bind(':book_id',$data['book_id']);
        $this->db->bind(':user_id',$data['user_id']);
        $this->db->bind(':requested_time', $data['requested_time']);
        $this->db->bind(':isIssued','No');
        
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function cancel($id){
        $this->db->query('DELETE FROM requested_books WHERE id = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function updateIssue($id){
        $this->db->query('UPDATE requested_books SET isIssued = :isIssued  WHERE id = :id');

        $this->db->bind(':id', (int)$id);
        $this->db->bind(':isIssued', "Yes");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
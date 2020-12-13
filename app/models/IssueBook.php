<?php
class IssueBook {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function findAllNotReturnBooks(){
        $this->db->query('SELECT * FROM borrowed_books WHERE isReturned = :isReturned');

        $this->db->bind(':isReturned',"No");

        $results = $this->db->resultSet();

        return $results;
    }
    public function returnBook($id){
        $this->db->query('UPDATE borrowed_books SET isReturned=:isReturned WHERE id=:id' );
        
        $this->db->bind(':id',$id);
        $this->db->bind(':isReturned',"Yes");

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
            
    }
    public function issueBook($data){
        $this->db->query('INSERT INTO borrowed_books (id,book_id,user_id,borrowed_date, due_date, isReturned) VALUES (:id,:book_id,:user_id,:borrowed_date, :due_date, :isReturned)');

        $this->db->bind(':id','');
        $this->db->bind(':book_id',$data['book_id']);
        $this->db->bind(':user_id',$data['user_id']);
        $this->db->bind(':borrowed_date', $data['borrowed_date']);
        $this->db->bind(':due_date',$data['due_date']);
        $this->db->bind(':isReturned',$data['isReturned']);
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }


    }

    public function getInfo($id){
        $this->db->query('SELECT * FROM books_details WHERE id= :id');
        $this->db->bind(':id', $id);

      

        $row = $this->db->single();

        return $row;

    }

    public function getBookId($id){
        $this->db->query('SELECT * FROM borrowed_books WHERE id= :id');
   

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;

    }

}
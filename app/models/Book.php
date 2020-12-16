<?php
class Book {
    private $db;
    public function __construct() {
        $this->db = Database::getInstance();
    }
  
    public function getInfo($id){
        $this->db->query('SELECT * FROM books_details WHERE id= :id');
        $this->db->bind(':id', $id);

     
        $row = $this->db->single();

        return $row;

    }
    public function findAllBooks(){
        $this->db->query('SELECT * FROM books_details');

        $results = $this->db->resultSet();

        return $results;
    }

    public function addBook($data){
        $this->db->query('INSERT INTO books_details (id,ISBN,title,subject,bookImg,publisher,language,price,author,numOfPages,purchaseDate,publicationDate,quantity,available,librarian) VALUES (:id,:ISBN,:title,:subject,:bookImg,:publisher,:language,:price,:author,:numOfPages,:purchaseDate,:publicationDate,:quantity,:available,:librarian)');

        $this->db->bind(':id', '');
        $this->db->bind(':ISBN', $data['ISBN']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':bookImg', $data['bookImg']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':language', $data['language']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':numOfPages', $data['numOfPages']);
        $this->db->bind(':purchaseDate', $data['purchaseDate']);
        $this->db->bind(':publicationDate', $data['publicationDate']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':available', $data['available']);
        $this->db->bind(':librarian', $data['librarian']);


        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }        

    }
    

    public function updateBook($data){
        $this->db->query('UPDATE books_details SET title=:title,subject=:subject,publisher=:publisher,language=:language,price=:price,author=:author,numOfPages=:numOfPages,purchaseDate=:purchaseDate,publicationDate=:publicationDate,quantity=:quantity,available=:available,librarian=:librarian WHERE id = :id');

        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':publisher', $data['publisher']);
        $this->db->bind(':language', $data['language']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind(':author', $data['author']);
        $this->db->bind(':numOfPages', $data['numOfPages']);
        $this->db->bind(':purchaseDate', $data['purchaseDate']);
        $this->db->bind(':publicationDate', $data['publicationDate']);
        $this->db->bind(':quantity', $data['quantity']);
        $this->db->bind(':available', $data['available']);
        $this->db->bind(':librarian', $data['librarian']);


        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function deleteBookByID($id){
        $this->db->query('DELETE FROM books_details WHERE id = :id');

        $this->db->bind(':id', (int)$id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function reduceCount($id){
        $this->db->query('UPDATE books_details SET available=available-1 WHERE id = :id');

        $this->db->bind(':id',$id);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function increaseCount($id){
        $this->db->query('UPDATE books_details SET available=available+1 WHERE id = :id');

        $this->db->bind(':id',$id);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
    public function totalCount(){

    }

    
    
    
}

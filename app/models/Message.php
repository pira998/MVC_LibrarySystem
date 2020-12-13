<?php
class Message {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function findAllMessages(){
        $this->db->query('SELECT * FROM messages ORDER BY created_time DESC');

        $results = $this->db->resultSet();

        return $results;
    }
    public function create($data){

        $this->db->query('INSERT INTO messages (id,subject,body,created_time, sender) VALUES (:id,:subject,:body,:created_time, :sender)');

        $this->db->bind(':id','');
        $this->db->bind(':subject',$data['subject']);
        $this->db->bind(':body',$data['body']);
        $this->db->bind(':created_time', $data['created_time']);
        $this->db->bind(':sender',$data['sender']);
        
        

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }

}
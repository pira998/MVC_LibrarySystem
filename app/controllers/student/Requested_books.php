<?php
class Requested_books extends Controller {
    public function __construct() {
        $this->requestBookModel = $this->model('RequestBook');
    }

    public function index() {
         $data = [
            
            'user_id' => $_SESSION['user_id'],
         
        ];

        $requestedBooks = $this->requestBookModel-> findAllRequestedBooksByStudentId($data['user_id']); 
        $data = [
            'title' => 'Home page',
            'requestedBooks' => $requestedBooks,
        ];

        $this->view('student/requested_books/index', $data);
    }
   

    public function request($id){

        $data = [
            'book_id' => $id,
            'user_id' => $_SESSION['user_id'],
            'requested_time'=> time(),
        ];

        $this->requestBookModel->request($data);
       header('location: ' . URLROOT . '/student/requested_books/index');
        


    }

    public function cancel($id){
        $this->requestBookModel->cancel($id);
        $this->index();
    }
}

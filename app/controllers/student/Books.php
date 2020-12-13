<?php
class Books extends Controller {
    public function __construct() {
        $this->bookModel = $this->model('Book');
    }

    public function index() {
        $books = $this->bookModel->findAllBooks();
        $data = [
            'title' => 'Home page',
            'books'=> $books,
        ];

        $this->view('student/books/index', $data);
    }
   
    

    
}

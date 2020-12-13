<?php
class Pages extends Controller {
    public function __construct() {
        
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('/index', $data);
    }
    

    public function about() {
        $this->view('/about');
    }

    public function books(){
        $this->bookModel = $this->model('Book');
        $books = $this->bookModel->findAllBooks();
        $data = [
            'title' => 'Book page',
            'books' => $books,

        ];
        $this->view('/books',$data);
    }
}

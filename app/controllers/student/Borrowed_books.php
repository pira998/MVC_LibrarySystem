<?php
class Borrowed_books extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('student/borrowed_books/index', $data);
    }
   

    
}
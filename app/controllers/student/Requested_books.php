<?php
class Requested_books extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('student/requested_books/index', $data);
    }
   

    
}

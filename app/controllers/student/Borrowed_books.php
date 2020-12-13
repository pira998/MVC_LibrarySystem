<?php
class Borrowed_books extends Controller {
    public function __construct() {
        $this->issueBookModel = $this->model('IssueBook');
    }

    public function index($id) {
        $borrowedBooks = $this->issueBookModel->findAllBorrowedBooksByStudentId($id);
        $data = [
            'title' => 'issueBook page',
            'borrowedBooks' => $borrowedBooks,
        ];

        $this->view('student/borrowed_books/index', $data);
    }
   

    
}

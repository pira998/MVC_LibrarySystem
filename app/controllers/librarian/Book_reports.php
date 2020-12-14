<?php
class Book_reports extends Controller {
    public function __construct() {
        $this->issueBookModel = $this->model('IssueBook');
    }

    public function index() {
        $borrowedBooks = $this->issueBookModel->findAllReturnedBooks();
        $data = [
            'title' => 'Book page',
            'borrowedBooks' => $borrowedBooks,

        ];

        $this->view('librarian/book_reports/index', $data);
    }

}
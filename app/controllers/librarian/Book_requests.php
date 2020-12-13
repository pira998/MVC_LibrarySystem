<?php
class Book_requests extends Controller {
    public function __construct() {
        $this->requestBookModel = $this->model('RequestBook');
    }

    public function index() {
        $requests = $this->requestBookModel->findAllRequestedBooks();
        $data = [
            'title' => 'Book page',
            'requests' => $requests,

        ];

        $this->view('librarian/book_requests/index', $data);
    }
     public function issueByRequest($id){
        $request = $this->requestBookModel->getInfo($id);

        $data = [
                'id' => '',
                'book_id' => $request->book_id,
                'user_id' => $request->user_id,        
                'borrowed_date' => time(),
                'due_date' => time()+(7 * 24 * 60 * 60),            
                'isReturned' => 'No',  

            ];
        
        $this->issueBookModel = $this->model('IssueBook');
        if ($this->issueBookModel->issueBook($data)) {
                    $this->bookModel = $this->model('Book');
                    $this->bookModel->reduceCount($data['book_id']);
                    $this->requestBookModel->updateIssue($id);
                    $this->index();
                } else {
                    die("Something went wrong, please try again!");
                }
    }
}
<?php
class Issue_Books extends Controller {
    public function __construct() {
        $this->issueBookModel = $this->model('IssueBook');
        
    }

    public function index() {
        $issueBooks = $this-> issueBookModel->findAllNotReturnBooks();
        $data = [
            'title' => 'Issued Book page',
            'issueBooks' => $issueBooks,
        ];

        $this->view('librarian/issue_books/index', $data);
    }
    public function return($id){

        $this->issueBookModel->returnBook($id);

        $issuedBook = $this->issueBookModel->getBookId($id);

        $this->bookModel->increaseCount($issuedBook->book_id);
        
        $this->index();

    }
    public function issue(){
        $data = [
            'id' => '',
            'book_id' => '',
            'user_id' => '',        
            'borrowed_date' => '',
            'due_date' => '',            
            'isReturned' => 'No',            
                    
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
            $data = [
                'id' => '',
                'book_id' => trim($_POST['book_id']),
                'user_id' => trim($_POST['user_id']),        
                'borrowed_date' => time(),
                'due_date' => time()+(7 * 24 * 60 * 60),            
                'isReturned' => 'No',  

            ];

            

            
            if ($this->issueBookModel->issueBook($data)) {
                    $this->bookModel = $this->model('Book');
                    $this->bookModel->reduceCount($data['book_id']);
                    $this->index();
                } else {
                    die("Something went wrong, please try again!");
                }
            
        }
        
    }


    
}

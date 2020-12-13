<?php
class Pages extends Controller {
    public function __construct() {
        $this->bookModel = $this->model('Book');
        $this->studentModel = $this->model('Student');


    }

    public function index() {
        $studentCount = $this->studentModel->getTotalStudentsCount();
        $booksInfo = $this->bookModel->findAllBooks();
        $totalBook = 0;
        $availableBook = 0;
        foreach ($booksInfo as $bookInfo){
            $totalBook = (int)$totalBook+ (int)$bookInfo->quantity;
        $availableBook =(int)$availableBook+ (int)$bookInfo->available;
        }

        $data = [
            'title' => 'Home page',
            'studentCount' => $studentCount,
            'totalBook' => $totalBook,
            'availableBook' => $availableBook,

        ];

        $this->view('librarian/index', $data);
    }
    

    public function about() {
        $this->view('about');
    }
}

<?php
class Books extends Controller {
    public function __construct() {
        $this->bookModel = $this->model('Book');
    }

    public function index() {
        $books = $this->bookModel->findAllBooks();
        $data = [
            'title' => 'Book page',
            'books' => $books,

        ];

        $this->view('librarian/books/index', $data);
    }

    public function create(){
        $data = [
            'id' => '',
            'ISBN' => '',
            'title' => '',        
            'subject' => '',
            'bookImg' => '',            
            'publisher' => '',            
            'language' => '',         
            'price' => '',           
            'author' => '',         
            'numOfPages' => '',       
            'purchaseDate' => '',        
            'publicationDate' => "",
            'quantity' => '',
            'available' => '',
            'librarian' => '',

            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'ISBN' =>trim($_POST['ISBN']),
            'title' =>trim($_POST['title']),        
            'subject' =>trim($_POST['subject']),   
            'publisher' =>trim($_POST['publisher']),            
            'language' =>trim($_POST['language']),         
            'price' =>trim($_POST['price']),           
            'author' =>trim($_POST['author']),         
            'numOfPages' =>trim($_POST['numOfPages']),       
            'purchaseDate' =>trim($_POST['purchaseDate']),        
            'publicationDate' => trim($_POST['publicationDate']),
            'quantity' =>trim($_POST['quantity']),
            'available' =>trim($_POST['available']),
            'librarian' =>trim($_SESSION['username']),
            ];
            $tm = md5(time());
            $fnm = $_FILES['bb']['name'];
            $dst = dirname(dirname(dirname(dirname(__FILE__))))."\public\assets\img\book_images\\" . $tm . $fnm;
            $dst1 = "book_images/" . $tm . $fnm;

            move_uploaded_file($_FILES['bb']['tmp_name'], $dst);

            $data['bookImg'] = $dst1;
            if ($this->bookModel->addBook($data)) {
                    $this->index();
                } else {
                    die("Something went wrong, please try again!");
                }
            
        }
    }
    public function bookInfo($id){
        $info = $this->bookModel->getInfo($id);
        $data = [
            'title' => 'Home page',
            'info' => $info,
        ];

        $this->view('librarian/books/update', $data);


    }
    public function delete($id){
        if($this->bookModel->deleteBookById($id)){
            $this->index();
        }else{
            die('Something went wrong!');
        }
    }

    public function update($id){
        $info = $this->bookModel->getInfo($id);

     

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'info' => $info,
                'title' =>trim($_POST['title']),        
                'subject' =>trim($_POST['subject']),   
                'publisher' =>trim($_POST['publisher']),            
                'language' =>trim($_POST['language']),         
                'price' =>trim($_POST['price']),           
                'author' =>trim($_POST['author']),         
                'numOfPages' =>trim($_POST['numOfPages']),       
                'purchaseDate' =>trim($_POST['purchaseDate']),        
                'publicationDate' => trim($_POST['publicationDate']),
                'quantity' =>trim($_POST['quantity']),
                'available' =>trim($_POST['available']),
                'librarian' =>trim($_SESSION['username']),
                
                
            ];

           
            if ($this->bookModel->updateBook($data)) {
                    $this->index($id);
            } else {
                die("Something went wrong, please try again!");
            }
        }

    }
    

    
}

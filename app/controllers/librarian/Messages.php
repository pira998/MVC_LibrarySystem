<?php
class Messages extends Controller {
    public function __construct() {
        $this->messageModel = $this->model('Message');
    }

    public function index() {
        $messages = $this->messageModel->findAllMessages();
        $data = [
            'title' => 'Message page',
            'messages' => $messages
        ];

        $this->view('librarian/messages/index', $data);
    }

    public function create(){

        $data = [
            'subject' => '',
            'body' => '',
            'created_time' => '',
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'sender' => $_SESSION['username'],
                'subject' => trim($_POST['subject']),
                'body' => trim($_POST['body']),
                'created_time' => time(),
                
            ];

            if ($this->messageModel->create($data)) {
                    $this->index();
                } else {
                    die("Something went wrong, please try again!");
                }
        
        }

    }
    

   
}

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

        $this->view('student/messages/index', $data);
    }
   

    
}

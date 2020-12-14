<?php
  /*
   * App Core Class
   * Creates URL & loads core controller
   * URL FORMAT - Folder/controller/method/params
   */
  class Core {
    protected $currentFolder = '/';
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
      //print_r($this->getUrl());

      $url = $this->getUrl();
      
      // url ---- student/profile/index
      //[student,profile,index]
      // Look in BLL for first value
      if($url[0]== 'student'){
        unset($url[0]);
        //[null,profile,index]
        if(file_exists('../app/controllers/student/' . ucwords($url[1]). '.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[1]);
        // Unset 0 Index
        unset($url[1]);
        //[null,null,index]
        
      }

      // Require the controller
      require_once '../app/controllers/student/'. $this->currentController . '.php';

      // Instantiate controller class
      $this->currentController = new $this->currentController;

      // Check for second part of url
      if(isset($url[2])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[2])){
          $this->currentMethod = $url[2];
          // Unset 1 index
          unset($url[2]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : [];

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    else if($url[0]=="librarian"){
      unset($url[0]);
      if(file_exists('../app/controllers/librarian/' . ucwords($url[1]). '.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[1]);
        // Unset 0 Index
        unset($url[1]);
        
      }

      // Require the controller
      require_once '../app/controllers/librarian/'. $this->currentController . '.php';

      // Instantiate controller class
      $this->currentController = new $this->currentController;

      // Check for second part of url
      if(isset($url[2])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[2])){
          $this->currentMethod = $url[2];
          // Unset 1 index
          unset($url[2]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : [];
      

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    else{
      if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
        // If exists, set as controller
        $this->currentController = ucwords($url[0]);
        // Unset 0 Index
        unset($url[0]);
      }

      // Require the controller
      require_once '../app/controllers/'. $this->currentController . '.php';

      // Instantiate controller class
      $this->currentController = new $this->currentController;

      // Check for second part of url
      if(isset($url[1])){
        // Check to see if method exists in controller
        if(method_exists($this->currentController, $url[1])){
          $this->currentMethod = $url[1];
          // Unset 1 index
          unset($url[1]);
        }
      }

      // Get params
      $this->params = $url ? array_values($url) : [];

      // Call a callback with array of params
      call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    }
    
      

    public function getUrl(){
      if(isset($_GET['url'])){
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  }



<?php
    namespace Classes;
    
    use Libraries\Database;
    use Classes\BaseController;
    use PDO;

    class Main extends BaseController
    {
        private $db;
        private $dbh;

        function __construct()
        {
            $this->db = new Database();
            $this->dbh = $this->db->getInstance();
        }

        public function index()
        {
            /**
             * your code here
             */
            $data = ['title' => 'Welcome'];
            $this->view('index', $data);
        }

    }
<?php
    namespace Classes;
    
    use Libraries\Database;
    use PDO;

    class Controller
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
            require_once('app/Views/index.php');
        }

    }
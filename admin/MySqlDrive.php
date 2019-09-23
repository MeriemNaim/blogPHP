<?php
    class MySqlDrive
    {
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db = 'blogdb';

        private $db_handle;

        public function __construct()
        {
            $this->db_handle = mysqli_connect($this->host, $this->user, $this->password, $this->db);

            if(!$this->db_handle) die("Unable to connect to mysql: " . mysqli_error($this->db_handle));

            if(!mysqli_select_db($this->db_handle, $this->db)) die ("Unable to connect to database: " . mysqli_error($this->db_handle));
        }

        public function db_connect()
        {
            return $this->db_handle;
        }

        public function excute_query($query)
        {
            $result = mysqli_query($this->db_handle, $query);

            return !$result ? FALSE : TRUE;
            
        }

        public function insert($query)
        {
            return $this->excute_query($query);
        }

        public function read($query)
        {
            $result = mysqli_query($this->db_handle, $query);
            $row = mysqli_num_rows($result);

            $data = array();

            if($row){
                while ($row = mysqli_fetch_assoc($result))
                {
                    $data = $row;
                }
            }

            return $data;
        }

    }
?>
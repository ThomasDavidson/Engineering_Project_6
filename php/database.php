<?php
 class database
 {
    public $host;
	public $dbname;
    public $username;
    public $password;
    public $db;
    
	public function dbConnect(){
        $dsn = "mysql:host=".$this->host.";dbname=".$this->dbname;

		try {
        $this->db = new PDO(
            $dsn,
            $this->username,
            $this->password
        );
        
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_BOTH);
        
		return $this->db;
		
		}
		
		catch (PDOException $e) {
        
		echo 'PDO Connection failed: ' . $e->getMessage().'. ';	
		
		}
		
	}
    
	
	public function __construct(string $host, string $dbname, string $username, string $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;   
    }
 }
?>
<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $stmt,$dbh;

public function __construct()
    {
        $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;

        //mengoptimasi koneksi database Agar koneksi terus terjaga
        $option = [
            //ATTR = Atribute
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    // Query Generic untuk query apapun (fleksibel)
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // bind adalah solusi agar terhindar dari SQL injection
    public function bind($param,$value, $type = null)
    {
        if (is_null($type))
        {
            //switch di beri true agar switchnya jalan
            switch(true)
            {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default : 
                    $type =PDO::PARAM_STR;
            }   
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    
    public function execute()
    {
        $this->stmt->execute();
    }

    //untuk banyak data
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //untuk satu data/satu kolom
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
<?php
class Forbes_model{
    
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=forbes2021';

        try{
            $this->dbh = new PDO($dsn,'root','');
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    
    public function getAllmhs()
    {
         $this->stmt = $this->dbh->prepare('SELECT * FROM forbes2021 LIMIT 25');
         $this->stmt->execute();
         return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

}
?>
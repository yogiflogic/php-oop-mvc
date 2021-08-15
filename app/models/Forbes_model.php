<?php
class Forbes_model{
    
    private $table ='forbes2021';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllforbes()
    {
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }
    
    public function getForbesById($id)
    {
        $this->db->query('SELECT * FROM '.$this->table .' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }
}
?>
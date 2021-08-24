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

    public function tambahDataForbes($data)
    {

        $query = "INSERT INTO forbes2021
                  VALUE 
                  //titik dua (:) ini tandanya mem BIND dataa (:nama) dll
                  ('', :rank, :name, :country, :sales, :profit, :assets, :market_value, :year)";
        $this->db->query($query);
                                    //$data['Rame'] adalah Value dari atribut NAME FORM Group dan Harus Sama Penulisannya dengan FIELD di Database
        $this->db->bind('rank',$data['rank']);
        $this->db->bind('name',$data['name']);
        $this->db->bind('country',$data['country']);
        $this->db->bind('sales',$data['sales']);
        $this->db->bind('profit',$data['profit']);
        $this->db->bind('assets',$data['assets']);
        $this->db->bind('market_value',$data['market_value']);
        $this->db->bind('year',$data['year']);

        $this->db->execute();
        
        return $this->db->rowCount();

    }

    public function hapusDataForbes($id)
    {

        $query = 'DELETE FROM '. $this->table .' WHERE id =:id'; 
        $this->db->query($query);
        $this->db->bind('id',$id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
    // Berhadapan dengan ajax
    public function updateDataForbes($id)
    {

        $query = 'Update FROM '. $this->table .' WHERE id =:id'; 
        $this->db->query($query);
        $this->db->bind('id',$id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editDataForbes($data)
    {

        $query = "UPDATE forbes2021 SET 
                  id = :id,
                  rank = :rank,
                  name = :name, 
                  country = :country,
                  sales = :sales , 
                  profit = :profit, 
                  assets = :assets, 
                  market_value = :market_value,
                  year = :year
                  WHERE id =:id";

        $this->db->query($query);
                                    //$data['Rame'] adalah Value dari atribut NAME FORM Group dan Harus Sama Penulisannya dengan FIELD di Database
        $this->db->bind('id',$data['id']);
        $this->db->bind('rank',$data['rank']);
        $this->db->bind('name',$data['name']);
        $this->db->bind('country',$data['country']);
        $this->db->bind('sales',$data['sales']);
        $this->db->bind('profit',$data['profit']);
        $this->db->bind('assets',$data['assets']);
        $this->db->bind('market_value',$data['market_value']);
        $this->db->bind('year',$data['year']);
        
        $this->db->execute();
        
        return $this->db->rowCount();

    }

    public function searchForbes()
    {
        $keyword = $_POST['keyword'];

        $query = "SELECT * FROM forbes2021 WHERE name LIKE :keyword";

        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }

}
?>
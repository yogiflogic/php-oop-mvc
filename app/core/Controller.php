<?php

class controller{

    //method ini fungsinya untuk mengambil file di dalam folder sesuai jalur require_once di bawah
    public function view($view,$data = [])
    {
        require_once '../app/views/'. $view .'.php';
        
    }
    
    public function model($model)
    {
        require_once '../app/models/'. $model .'.php';
        // Karna model adalah classs harus di instansiasi dulu
        return new $model;
        
    }

}


?>
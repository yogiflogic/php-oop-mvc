<?php

class Forbes extends controller{

    public function index()
    {

        $data ['title'] = "FORBES 2021";
        $data ['fbs'] = $this->model('Forbes_model')->getAllmhs();
        $this->view('templates/header',$data);
        $this->view('forbes/index',$data);
        $this->view('templates/footer');
    }

}

?>
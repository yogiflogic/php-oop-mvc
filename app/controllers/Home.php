<?php

class Home extends controller{
    //method DEFAULT yang di atur controller
    public function index($title='Home')
    {
        $data['title'] = $title;
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
   
    }
}

?>
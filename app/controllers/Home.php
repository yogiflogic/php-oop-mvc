<?php

class Home extends controller{
    //method DEFAULT yang di atur controller
    public function index($title='HOME')
    {
        $data['title'] = $title;
        $this->view('templates/header',$data);
        $this->view('home/index');
        $this->view('templates/footer');

        
    }
}

?>
<?php

class About extends controller{

    public function index($nama='yogi',$job='developer',$title='ABOUT')
    {
        $data['nama'] = $nama;
        $data['job'] = $job;
        $data['title'] = $title;
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    
    public function page($title='PAGE')
    {
        $data['title'] = $title;
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    

}


?>
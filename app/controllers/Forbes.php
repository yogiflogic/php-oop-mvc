<?php

class Forbes extends controller{

    public function index()
    {

        $data ['title'] = "FORBES 2021";
                                //method model di (core/controller) akses class Forbes_model dengan nama File Forbes_model (nama file dengan class sama)
        $data ['fbs'] = $this->model('Forbes_model')->getAllforbes();
        $this->view('templates/header',$data);
        $this->view('forbes/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data ['title'] = " Detail FORBES 2021";
                                //method model di (core/controller) akses class Forbes_model dengan nama File Forbes_model (nama file dengan class sama)
        $data ['fbs'] = $this->model('Forbes_model')->getForbesById($id);
        $this->view('templates/header',$data);
        $this->view('forbes/detail',$data);
        $this->view('templates/footer');
    }
}

?>
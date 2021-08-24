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

    //mengatur fungsi tambah data tanpa menammpilkan UI dan tanpda membuat file UI
    public function tambah()
    {
        if($this->model('Forbes_model')->tambahDataForbes($_POST) > 0)
        {
            Flasher::setFlash('Berhasil','Di Tambahkan','info');
            header('location:'.BASEURL.'/forbes');
            exit;
        }else{
            Flasher::setFlash('Gagal','Di Tambahkan','danger');
            header('location:'.BASEURL.'/forbes');
            exit;
        }
    }

        //mengatur fungsi tambah data tanpa menammpilkan UI dan tanpda membuat file UI
        public function hapus($id)
        {
            if($this->model('Forbes_model')->hapusDataForbes($id) > 0)
            {
                Flasher::setFlash('Berhasil','Di Hapus','info');
                header('location:'.BASEURL.'/forbes');
                exit;
            }else{
                Flasher::setFlash('Gagal','Di Hapus','danger');
                header('location:'.BASEURL.'/forbes');
                exit;
            }
        }

        public function getedit()
        {
            echo json_encode($this->model('Forbes_model')->getForbesById($_POST['id']));
        }

        public function update()
        {
            if($this->model('Forbes_model')->editDataForbes($_POST) > 0)
            {
                Flasher::setFlash('Berhasil','Di Update','info');
                header('location:'.BASEURL.'/forbes');
                exit;
            }else{
                Flasher::setFlash('Gagal','Di Update','danger');
                header('location:'.BASEURL.'/forbes');
                exit;
            }
        }

        public function search()
        {
            $data ['title'] = "FORBES 2021";                     
            $data ['fbs'] = $this->model('Forbes_model')->searchForbes();
            $this->view('templates/header',$data);
            $this->view('forbes/index',$data);
            $this->view('templates/footer');
        }
}

?>
<?php
// URL link -> controller/method/parameter
/*
    Route -> - membuat prety URL(url yang rapi) dengan file .htaccsess
             - Block akses file/folder penting dengan .htaccess
             - Bertujuan untuk membuat element-element pada URL menjadi sebuah ARRAY
*/
/*
    Route -> - Membuat Controller url untuk bisa memanggil method default 

*/
/*
    Views -> - Merujuk ke folder app/views 

*/
/*
    Model -> - Berbagai macam bisa di isi 

*/
class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {
        $url = $this->parseURL();
        /*
            CONTROLLER :
            posisi sedang di file FILE INDEX paling luar/di folder public
        */
        if(file_exists('../app/controllers/'. $url[0] .'.php'))
        {
            $this->controller = $url[0];
            //unset digunakan agar bisa mengambil parameternya
            unset($url[0]);
            //var_dump($url[0]);
        }
        
        require_once '../app/controllers/'. $this->controller.'.php';
        //class di instansiasi agar bisa memanggil method
        $this->controller = new $this->controller;

        //cek method
        if(isset($url[1]))
        {
            if(method_exists($this->controller,$url[1]) )
            {
                $this->method = $url[1];
                //di unset agar tersisa hanya parameternyanya saja (jika ada)
                unset($url[1]);
            }
        }
        
        //cek params
        if(!empty($url))
        {
            $this->params = array_values($url);
        }

        //Jalankan CONTROLLER, METHOD dan jalankan PARAMS jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);
    }
    
    //membuat prety URL(url yang rapi)
    public function parseURL()
    {
        if (isset($_GET['url'])){
            // rtrim()-> fungsi yang berguna untuk menghilangkan tanda slas (/) di akhir url
            $url = rtrim($_GET['url'],'/');
            // filter_var() -> membersihkan url dari karakter yang mencurigakan
            $url = filter_var($url, FILTER_SANITIZE_URL);
            /* explode()-> memecah url berdasarkan tanda slash (/) , slash akan hilang dan stringnya akan berubah menjadi
             elemen array array */
            $url = explode('/',$url,PHP_INT_MAX);
            return $url;
        }
    }

}
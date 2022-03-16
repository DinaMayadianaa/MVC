<?php

class App{

    public function __construct()
    {
        $url =$this->parseURL();
        var_dump($url);

    }


    public function parseURL()
    {
        if (isset($_GET['url'])) {
            //menghilagkan garis miring(/) di akhir url
            $url = rtrim($_GET['url'],'/');

            //menghilangkan karakter aneh atau karakter yang memungkinkan kita di hack
            $url = filter_var($url, FILTER_SANITIZE_URL);

            //menghilangkan tanda garis miring (/) dan mengambil string-nya.
            $url = explode('/', $url);
            return $url;
        }
    }
}
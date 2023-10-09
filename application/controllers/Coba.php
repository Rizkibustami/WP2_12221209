<?php

class Coba extends CI_Controller {

	public function index()
	{
		echo "Selamat Datang di Web Programming II";
	}

    public function biodata($nama=null,$nim=null)
    {
        //echo "Nama  : $nama <br>";
        //echo "NIM   : $nim";
        $data['nama']  = $nama;
        $data['nim']   = $nim;
        $this -> load -> view ('v_coba', $data);
    }
}
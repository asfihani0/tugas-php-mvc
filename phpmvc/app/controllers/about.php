<?php

class About{
    public function index ($nama = 'kl', $pekerjaan = 'lk', $umur = 22 )
{
    echo "halo, nama saya $nama, saya adalah seorang $pekerjaan, Saya berumur $umur tahun.";
}
public function page()
{
        echo 'About/page';
}
}
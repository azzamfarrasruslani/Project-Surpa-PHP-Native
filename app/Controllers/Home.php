<?php
class Home 
{
    public function index()
    {
        // Misalnya setelah melakukan operasi tertentu
        // Contoh penggunaan header untuk redirect
        header('Location: /home/index');
        exit;
    }
}

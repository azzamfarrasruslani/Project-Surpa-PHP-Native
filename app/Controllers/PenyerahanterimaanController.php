<?php
namespace App\Controllers;

use App\Models\PenyerahanterimaanModel;
use CodeIgniter\Controller;

class PenyerahanterimaanController extends Controller
{
    public function dataPaket()
    {
        $model = new PenyerahanterimaanModel();

        $search = $this->request->getVar('search');
        $order = $this->request->getVar('order') ?: 'id_serah_terima';
        $orderType = $this->request->getVar('orderType') ?: 'ASC';
        $limit = $this->request->getVar('limit') ?: 30;
        $page = $this->request->getVar('page') ?: 1;
        $offset = ($page - 1) * $limit;

        $data['serah_terima'] = $model->getPenyerahanterimaan($search, $order, $orderType, $limit, $offset);
        $data['total'] = $model->countAllPenyerahanterimaan($search);
        $data['page'] = $page;
        $data['limit'] = $limit;
        $data['search'] = $search;
        $data['order'] = $order;
        $data['orderType'] = $orderType;

        return view('dashboard/dataPaket', $data);
    }

    public static function hitData()
    {
        $model = new PenyerahanterimaanModel();

        // Menghitung jumlah data
        $count = $model->countAllResults(false); // Jangan reset builder
        // Debugging: echo count untuk memastikan nilainya
        echo $count;
        // Kirim data ke view
        // return view('dashboard/dashboard', ['count' => $count]);
    }
}



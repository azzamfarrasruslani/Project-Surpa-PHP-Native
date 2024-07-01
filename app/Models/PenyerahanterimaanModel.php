<?php
namespace App\Models;

use CodeIgniter\Model;

class PenyerahanterimaanModel extends Model
{
    protected $table = 'serah_terima';
    protected $primaryKey = 'id_serah_terima';
    protected $allowedFields = ['posisi', 'status_barang', 'waktu_penerimaan', 'waktu_penyerahan', 'id_kurir', 'id_barang', 'id_security', 'id_pemilik'];

    public function getPenyerahanterimaan($search = null, $order = 'id_serah_terima', $orderType = 'ASC', $limit = 10, $offset = 0)
    {
        $builder = $this->db->table($this->table)
                            ->select('serah_terima.*, barang.jenis_barang, kurir.nama_kurir, pemilik.nama_pemilik')
                            ->join('barang', 'serah_terima.id_barang = barang.id_barang')
                            ->join('kurir', 'serah_terima.id_kurir = kurir.id_kurir')
                            ->join('pemilik', 'serah_terima.id_pemilik = pemilik.id_pemilik');

        if ($search) {
            $builder->like('posisi', $search)
                    ->orLike('status_barang', $search)
                    ->orLike('nama_kurir', $search)
                    ->orLike('jenis_barang', $search)
                    ->orLike('nama_pemilik', $search);
        }

        return $builder->orderBy($order, $orderType)
                       ->limit($limit, $offset)
                       ->get()
                       ->getResultArray();
    }

    public function countAllPenyerahanterimaan($search = null)
    {
        $builder = $this->db->table($this->table);

        if ($search) {
            $builder->like('posisi', $search)
                    ->orLike('status_barang', $search)
                    ->orLike('nama_kurir', $search)
                    ->orLike('jenis_barang', $search)
                    ->orLike('nama_pemilik', $search);
        }

        return $builder->countAllResults(false); // Jangan reset builder
    }
}








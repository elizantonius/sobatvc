<?php

namespace App\Models;

use CodeIgniter\Model;

class Daftar extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'reperal';
    protected $primaryKey       = 'idreperal';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idreperal', 'namapemilik', 'nohp', 'namausaha', 'alamatusaha', 'metode_akusisi', 'foto', 'status', 'Tanggal', 'idusers'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function getData()
    {
        return $this->db->table('reperal')->select('reperal.*, users.namasales')->join('users', 'users.idusers=reperal.idusers')->get()->getResultArray();
    }

    public function edit($id = null)
    {

        return $this->db->table('reperal')->where('idreperal', $id)->get()->getResultArray();
    }

    public function updateData($id, $status)
    {

        $this->db->table('reperal')->where('idreperal', $id);
        $this->db->table('reperal')->update($status);
    }

    public function hitungReward()
    {
        $thisMonth = date("m");
        $jumlah = $this->db->query("SELECT COUNT(*) AS jumlah FROM reperal WHERE MONTH(Tanggal)='$thisMonth' AND status = 'closing'")->getRowArray();
        return $jumlah;
    }
}

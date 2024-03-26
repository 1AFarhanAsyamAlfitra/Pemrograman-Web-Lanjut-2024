<?php

namespace app\Models;

use illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class BarangModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';

    protected $fillable = ['kategori_kode', 'kategori_nama'];

    public function barang(): HasMany
    {
        return $this->hasMany(KategoriModel::class, 'barang_id', 'barang_id') ;
    }
}
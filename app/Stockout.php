<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockout extends Model
{
    protected $guarded = [];

    protected $table = 'stockouts';
    protected $primaryKey = 'id_stockout';
    protected $fillable = ['id_buku','nama_pembeli','qty','email'];

    public function product()
    {
        return $this->belongsTo(Product::class,'id_barang');
    }
}

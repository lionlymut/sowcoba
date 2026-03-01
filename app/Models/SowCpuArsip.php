<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SowCpuArsip extends Model
{
    protected $fillable = ['nama_arsip','keterangan'];

    public function items()
    {
        return $this->hasMany(SowCpuArsipItem::class);
    }
}

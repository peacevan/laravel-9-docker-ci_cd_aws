<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $fillable = ['co_uf', 'no_uf'];
    protected $primaryKey = 'co_uf';
    protected $table = 'corp.vw_uf';
    public $sequence = 'corp.seq_uf';
    protected $connection = 'oracle';
    public $timestamps = false;
    
    public function municipios() {
        return $this->hasMany(Municipio::class, 'co_uf', 'co_uf');
    }
}
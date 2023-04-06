<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = ['co_municipio', 'no_municipio'];
    protected $primaryKey = 'co_municipio';
    protected $table = 'corp.vw_municipio';
    public $sequence = 'corp.seq_municipio';
    protected $connection = 'oracle';
    public $timestamps = false;
    
    public function uf() {
        return $this->belongsTo(Uf::class);
    }
}
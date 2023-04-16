<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Compra extends Model
{
    use HasFactory, HasUUID, SoftDeletes;

    public function itensCompra(): HasMany
    {
        return $this->hasMany(ItemsCompra::class);
    }

	public function cliente(): HasOne
    {
        return $this->hasOne(Criente::class, 'id_cliente','id_cliente');
    }
}

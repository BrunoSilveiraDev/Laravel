<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function getFormattedStatusAttribute()
    {
        return $this->status == 'pending' ? 'Envio Pendente' : 'Produto Enviado';
    }
}

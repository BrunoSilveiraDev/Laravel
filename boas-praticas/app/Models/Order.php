<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //acessors
    public function getFormattedStatusAttribute()
    {
        return $this->status == 'pending' ? 'Envio Pendente' : 'Produto Enviado';
    }

    public function getStatusPaidAttribute()
    {
        return $this->paid ? 'Pago' : 'Aguardando Pagamento';
    }

    //mutators
    public function setTrackCodeAttribute($value)
    {
        $this->attributes['track_code'] = "COD_{$value}";
    }
}

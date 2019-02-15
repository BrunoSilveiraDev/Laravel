<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //scopes
    /**
     * @param Builder $query
     * return Builder
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    public function scopeDelivered($query)
    {
        return $query->where('status', 'delivered');
    }

    public function scopePaid($query)
    {
        return $query->where('paid', true);
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

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

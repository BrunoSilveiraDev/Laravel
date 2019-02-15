<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Order extends Model
{
    //sobrescrevendo o método boot
    //para ser mostrado na tela somente os pedidos que não foram cancelados
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('status', function(Builder $builder){//pode ser tanto classe como closure/função
            $builder->where('status', '<>', 'cancel');
        });
    }
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
        switch($this->status)
        {
            case 'pending':
                return 'Envio Pendente';
            break;

            case 'delivered':
                return 'Produto Enviado';
            break;

            case 'cancel':
                return 'Pedido Cancelado';
            break;
        }
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

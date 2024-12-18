<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "requests";
    protected $fillable = [
        'client_id',
        'executive_id',
        'product',
        'price',
        'amount',
        'total',
        'status',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function executive()
    {
        return $this->belongsTo(Executive::class, 'executive_id');
    }




}

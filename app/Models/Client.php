<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "clients";
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'phone',
        'curp',
        'address',
        'age',
        'executive_id',
        'status',
    ];

    public function executive()
    {
        return $this->belongsTo(Executive::class, 'executive_id');
    }

    public function request()
    {
        return $this->belongsTo(Executive::class, 'client_id');
    }

}

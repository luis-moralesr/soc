<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = "executives";
    protected $fillable = [
        'name',
        'lastName',
        'email',
        'company',
        'phone',
        'state',
        'status',
    ];

    public function clients()
    {
        return $this->hasMany(Client::class, 'executive_id');
    }

    public function request()
    {
        return $this->hasMany(Client::class, 'executive_id');
    }

}

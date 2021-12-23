<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'travel_packages_id', 'user_id', 'additional_visa',
        'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function detail()
    {
        return $this->hasMany(TransactionDetails::class, 'transactions_id', 'id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'transaction_details';

    protected $guarded = [];


    public function transaction()
    {
        return $this->hasMany(BelongsTo::class, 'transaction_id', 'id');
    }

}

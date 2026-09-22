<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'payment';

    protected $fillable = [
        'uuid',
        'user_uuid',
        'orders_uuid',
        'payment_type',
        'title',
        'description',
        'reference',
        'ammount',
        'payment_method',
        'status',
        'payment_url',
        'va_number',
        'qris_string',
        'return_url',
        'deleted_by',
    ];

    /**
     * Boot function untuk otomatis generate UUID saat data baru dibuat.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = generate_unique_db_code('payment', 'uuid');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_uuid', 'uuid');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'uuid');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders';

    protected $fillable = [
        'uuid',
        'user_uuid',
        'company_uuid',
        'invoice',
        'type',
        'descriptions',
        'project_value',
        'deleted_by',
    ];

    /**
     * Boot function untuk otomatis generate UUID saat data baru dibuat.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = generate_unique_db_code('orders', 'uuid');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_uuid', 'uuid');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'uuid');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrdersDetail::class, 'orders_uuid', 'uuid');
    }

    public function testimonis()
    {
        return $this->hasMany(Testimoni::class, 'orders_uuid', 'uuid');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'orders_uuid', 'uuid');
    }
}

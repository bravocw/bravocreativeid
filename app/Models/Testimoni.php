<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimoni extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'testimoni';

    protected $fillable = [
        'uuid',
        'orders_uuid',
        'company_uuid',
        'name',
        'comment',
        'rating',
        'photo_profile',
        'status',
        'is_featured',
        'is_anonymous',
        'deleted_by',
    ];

    /**
     * Boot function untuk otomatis generate UUID saat data baru dibuat.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = generate_unique_db_code('testimoni', 'uuid');
            }
        });
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'orders_uuid', 'uuid');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_uuid', 'uuid');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'uuid');
    }
}

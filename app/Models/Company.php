<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'companies';

    protected $fillable = [
        'uuid',
        'user_uuid',
        'institutions_name',
        'logo',
        'website',
        'status',
        'deleted_by',
    ];

    /**
     * Boot function untuk otomatis generate UUID saat data baru dibuat.
     */
    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = generate_unique_db_code('companies', 'uuid');
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_uuid', 'uuid');
    }

    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by', 'uuid');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'company_uuid', 'uuid');
    }

    public function testimonis()
    {
        return $this->hasMany(Testimoni::class, 'company_uuid', 'uuid');
    }
}

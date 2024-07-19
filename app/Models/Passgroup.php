<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * Class Passgroup
 *
 * @property $id
 * @property $user_id
 * @property $name
 * @property $url_img
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Passwork[] $passworks
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Passgroup extends Model
{
    use HasFactory;

    static $rules = [
        'user_id' => 'required',
        'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'name', 'url_img'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function passworks()
    {
        return $this->hasMany(\App\Models\Passwork::class, 'id', 'passgroup_id');
    }
}

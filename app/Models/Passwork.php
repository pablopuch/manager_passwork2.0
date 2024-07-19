<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Passwork
 *
 * @property $id
 * @property $passgroup_id
 * @property $user_id
 * @property $name
 * @property $user_pass
 * @property $email_pass
 * @property $password_pass
 * @property $link
 * @property $note
 * @property $url_img
 * @property $favourite
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property Passgroup $passgroup
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Passwork extends Model
{
    use HasFactory;
    
    static $rules = [
		'user_id' => 'required',
		'name' => 'required',
		'user_pass' => 'required',
		'password_pass' => 'required',
		// 'favourite' => 'required',
    ];
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['passgroup_id', 'user_id', 'name', 'user_pass', 'email_pass', 'password_pass', 'link', 'note', 'url_img', 'favourite'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function passgroup()
    {
        return $this->belongsTo(\App\Models\Passgroup::class, 'passgroup_id', 'id');
    }

    
}

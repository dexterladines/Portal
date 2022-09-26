<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setpasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make(Str::random(8));
    // }
    // public function save( array $options = [] ) {
    //     if ( ! $this->exists && empty( $this->getAttribute( 'password' ) ) ) {
    //         $this->password = Str::random( 8 );
    //     }
    //     return parent::save( $options );
    // }
    
    public function roles() {
        return $this->belongsToMany('App\Models\Role');
    }

    public function hasAnyRoles($roles) {
        if($this->roles()->whereIn('name', $roles)->first()) {
            return true;
        }
        return false;
    }
    
    public function hasRole($role) {
        if($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function employee() {
        return $this->hasOne('App\Models\Employee');
    }
  

    
}

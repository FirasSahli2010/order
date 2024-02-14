<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        'password' => 'hashed',
    ];

    public function homeAddress()
    {
        return $this->hasOne(AddressDetails::class, 'home_address_id')->where('type', 'home');
    }

    public function billingAddress()
    {
       if ($this->billing_address_id) {
            return $this->hasOne(AddressDetails::class, 'billing_address_id')->where('type', 'billing');
        } else {
            return $this->hasOne(AddressDetails::class, 'home_address_id')->where('type', 'home');
        }
    }
}

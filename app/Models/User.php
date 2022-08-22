<?php

namespace App\Models;

use app\Http\Controllers\userController;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoleAndPermission;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_telepon',
        'alamat',
        'foto',
        'role',
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
      public function adminlte_image()
        {
            return 'https://picsum.photos/300/300';
        }

        public function adminlte_desc()
        {
            return 'That\'s a nice guy';
        }

        public function adminlte_profile_url()
        {
            return 'profile/username';
        }

        // memanggil data dinamis tabel users pada dashboard
        public static function countActiveUser(){
            $data= DB::table('users')->count();
            if($data){
                return $data;
            }
            return 0;
        }
}

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
        'direccion',
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
    // un usuario puede tener varios pedidos
    public function pedido()
    {
        return $this->hasMany(Pedido::class);
    }

    public function retornapedido(){

        //Retorna el pedido de un usuario que esta activo

         $pedido = Pedido::where('user_id', auth::id())
            ->where('estado', 'activo');
    }
    public function role(){
        return $this->belongsTo('App\Models\User');
    }

   public function esAdmin(){

        if($this->role_id == 1){
            return true;
        }
        return false;
   }
}

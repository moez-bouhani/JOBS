<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

use App\Notifications\ClientContact;
use App\Notifications\ResetPasswordNotifications;
use Illuminate\Notifications\Notifiable;

use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom','prenom','role','telephone','ville', 'email', 'password','photo'
        , 'adresse','token_pwd'
   
   
];



//protected $appends = ['human_created_at'] ;                     

/* public function getHumanCreatedAtAttribute()
{
    return $this->created_at->diffForHumans();
} */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function sendClientContactNotification($contact)
    {
        $this->notify(new ClientContact($contact));
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotifications($token));
    }



    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    public function demandes(){
        return $this->hasMany(Demande::class,'user_id');
    }

  
 
 
    
    
    
}
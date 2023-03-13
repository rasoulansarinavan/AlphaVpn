<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
        'user_id',
        'referral',
        'avatar',
        'blocked',
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

    public function gmailRegister($gmailUser)
    {

        $user = User::query()
            ->where('email', $gmailUser->getEmail())
            ->first();

        $referral = Session::get('referral');
        $user_id = User::query()->where('referral', $referral)->pluck('id')->first();

        if (!$user) {

            $user = User::query()->create([
                'name' =>$gmailUser->name,
                'email' => $gmailUser->getEmail(),
                'user_id' => @$user_id,
                'referral' =>$this->generateAffiliateIdCode(),
                'avatar' => $gmailUser->getAvatar(),
            ]);

            //send welcome email


        }

        if ($user->blocked) {
            return false;
        }


        Auth::login($user, true);

        return true;

        //Todo assign role
    }

    public function generateAffiliateIdCode(): string
    {
        do {
            $code = rand(1000, 1000000);
            $affiliate_id = User::query()->where('referral', $code)->get();
        } while (!$affiliate_id->isEmpty());

        return $code;
    }
    public function upLine()
    {
        return $this->belongsTo(User::class, 'user_id');

    }
    public function getUpLines($user_id)
    {


        $upLine1 = User::query()->where('id', $user_id)->with('upLine')->first();


        return array_filter([$upLine1->upline->id ?? ''
            , $upLine1->upline->upline->id ?? ''
            , $upLine1->upline->upline->upLine->id ?? ''
            , $upLine1->upline->upline->upLine->upLine->id ?? '',]);

    }




}

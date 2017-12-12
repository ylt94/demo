<?php
    namespace App\Model;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable{
        use Notifiable;
        protected $table = "user";

         protected $fillable = [
             'uid',
             'username',
             //'mobile',
             'password'
             ];
        protected $hidden = ['password', 'remember_token'];
    }


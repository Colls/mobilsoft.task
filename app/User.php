<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'sec_name', 'th_name', 'position', 'code', 'email'];

    public function getUsers()
    {
        $users = $this->all();
        return $users;
    }
}

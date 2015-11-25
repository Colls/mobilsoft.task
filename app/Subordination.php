<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subordination extends Model
{
    protected $table = 'subordination';
    protected $fillable = ['user_id', 'department_id', 'chief_id'];

    /**
     * @param $id
     * @return mixed
     */
    public function getSubordinate($id){
        $sub = $this->
            join('users', 'users.id', '=', 'subordination.user_id')->
            join('departments', 'departments.id', '=', 'subordination.department_id')->
            where('chief_id', $id)->
            get();
        return $sub;
    }
}

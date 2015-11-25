<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MyTraits\AverageCounter;

class Salary extends Model
{
    use AverageCounter;

    protected $table = 'salary';
    protected $fillable = ['user_id', 'month_id', 'value'];

    /**
     * @param $id
     * @return mixed
     */
    public function getSalary($id)
    {
        $salary = $this->
            where('user_id', $id)->
            join('users', 'users.id', '=', 'salary.user_id')->
            join('month', 'month.id', '=', 'salary.month_id')->
            orderBy('month_id')->
            get();
        return $salary;
    }

    /**
     * @param $id
     * @return float
     */
    public function getAverage($id)
    {
        $salary = $this->getSalary($id);
        return $this->average($salary);
    }
}

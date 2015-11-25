<?php

namespace App\MyTraits;

trait AverageCounter
{
    /**
     * @param $data
     * @return float
     */
    protected  function average($data)
    {
        $sum = 0;
        foreach($data as $d) {
            $sum += $d->value;
        }
        $result = $sum / count($data);
        $result = round($result, 2);
        return $result;
    }
}

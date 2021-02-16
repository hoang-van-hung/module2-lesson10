<?php
include_once "Dancer.php";


class Pairing
{

    public function __construct()
    {
    }

    function pairing($listOne, $listTwo)
    {
        $pair =array();
        $lenghOne =count($listOne);
        $lenghTwo =count($listTwo);
        if ($lenghOne >=0 && $lenghTwo >=0)
        {
            $man =$listOne->shift();
            $woman =$listTwo->shift();
            //xem thu xem co tao duoc splObjectStorage
            array_push($pair,$man->name);
            array_push($pair,$woman->name);
        }else {
            array_push($pair ,"notfound");
        }
        return $pair;

    }

    function wait($listOne, $listTwo)
    {
        echo "Run";
        $number = count($listOne)-count($listTwo);
        return "Waiting pairing".abs($number);

    }


}
<?php

include "Circle.php";
include "Comparable.php";

class ComparableCircle extends Circle implements Comparable
{

    public function compareTo($circleTwo)
    {
        $circleTwo = $circleTwo->getRadius();

        if ($this->getRadius() > $circleTwo) {
            return 'Diện tích của hình tròn 1 lớn hơn diện tích của hình tròn 2 !!' ;
        } else if ($this->getRadius() < $circleTwo) {
            return 'Diện tích của hình tròn 1 nhỏ hơn diện tích của hình tròn 2 !!' ;
        } else {
            return 'Diện tích của 2 hình bằng nhau !!' ;
        }
    }
}
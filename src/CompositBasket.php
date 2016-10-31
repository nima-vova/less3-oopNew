<?php

namespace Vendor\Moduls;

class CompositBasket extends SessionStar
{
    private initSessBasket;
    public function funcBaskCreate()
    {
       $this->initSessBasket = new SessionStar();
        //create information basket
    }
}

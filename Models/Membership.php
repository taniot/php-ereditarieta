<?php

/**
 * Membership
 * 
 * @author Gaetano Frascolla
 */
class Membership
{
    public $name;
    public $discount = 0;

    /**
     * __construct
     *
     * @param  string $_name
     * @param  int $_discount
     */
    public function __construct(string $_name, int $_discount)
    {
        $this->name = $_name;
        $this->discount = $_discount;
    }
}

<?php

/**
 * User
 * Define a user
 * 
 * @author Gaetano Frascolla
 */
class User
{

    public $name;
    private $age;
    protected $discount = 0;

    /**
     * __construct
     *
     * @param  string $_name User name
     * @param  int $_age User age
     */
    public function __construct(string $_name, int $_age)
    {
        $this->name = $_name;
        $this->age = $_age;
    }

    /**
     * Set discount
     * set user discount based on age
     * 
     */
    public function set_discount()
    {
        if ($this->age > 35) {
            $this->discount = 15;
        }
    }
}

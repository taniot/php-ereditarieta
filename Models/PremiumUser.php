<?php
require_once __DIR__ . '/Membership.php';
require_once __DIR__ . '/User.php';

/**
 * PremiumUser
 * Define a Premium User based on User
 *
 * @author Gaetano Frascolla
 */
class PremiumUser extends User
{
    public $level;

    /**
     * __construct
     *
     * @param  string $_name User name
     * @param  int $_age User age
     * @param  Membership $_level User Membership
     */
    public function __construct(string $_name, int $_age, Membership $_level)
    {
        parent::__construct($_name, $_age);
        $this->level = $_level;
    }

    /**
     * Set discount
     * set user discount based membership level
     */
    public function set_discount()
    {
        $this->discount = $this->level->discount;
    }
}

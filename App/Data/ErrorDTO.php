<?php
/**
 * Created by PhpStorm.
 * User: t3dki
 * Date: 02/11/2018
 * Time: 01:15
 */

namespace App\Data;


class ErrorDTO
{
    private $message;

    /**
     * ErrorDTO constructor.
     * @param $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

}
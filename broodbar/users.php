<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 22/01/18
 * Time: 14:29
 */
class User{
    private $id;
    private $naam;
    private $email;
    private $status;

    public function __construct($id, $naam, $email, $status)
    {
        $this->id=$id;
        $this->naam=$naam;
        $this->email=$email;
        $this->status=$status;
    }

    public function getUserId(){
        return $this->id;
    }
    public function getUserNaam(){
        return $this->naam;
    }
    public function getUserEmail(){
        return $this->email;
    }
    public function getUserStatus(){
        return $this->status;
    }
    
}
<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 25/01/18
 * Time: 18:01
 */
require_once 'database.php';
class Bestel{
    private $id;
    private $broodId;
    private $userId;
    private $datum;

    /**
     * Bestel constructor.
     * @param $id
     * @param $broodId
     * @param $userId
     */
    public function __construct($id, $userId, $broodId, $datum)
    {
        $this->id = $id;
        $this->broodId = $broodId;
        $this->userId = $userId;
        $this->datum=$datum;
    }

    /**
     * @return mixed
     */
    public function getBestelId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getBroodId()
    {
        return $this->broodId;
    }

    /**
     * @return mixed
     */
    public function getKlantId()
    {
        return $this->userId;
    }
    public function getDatum() {
        return $this->datum;
    }


}
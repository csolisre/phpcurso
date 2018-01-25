<?php
/**
 * Created by PhpStorm.
 * User: csolisre
 * Date: 25/01/18
 * Time: 18:01
 */
class Bestel{
    private $id;
    private $broodId;
    private $klant;

    /**
     * Bestel constructor.
     * @param $id
     * @param $broodId
     * @param $klant
     */
    public function __construct($id, $broodId, $klant)
    {
        $this->id = $id;
        $this->broodId = $broodId;
        $this->klant = $klant;
    }

    /**
     * @return mixed
     */
    public function getId()
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
    public function getKlant()
    {
        return $this->klant;
    }


}
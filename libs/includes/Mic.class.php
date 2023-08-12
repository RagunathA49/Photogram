<?php
/*
     public
     private
     protected
*/

class Mic
{
    private $brand;
    public $color;
    public $usb_port;
    public $model;
    private $light;
    public $price;

    public static function techno()
    {
        printf("\n"."This is a static function this can be run without object intialization ");
    }
    public function __construct($brand)
    {
        printf("Constructing Object.....");
        $this->brand = ucwords($brand);
    }

    public function getbrand()
    {
        return $this->brand;
    }
    public function setLight($light)
    {
        $this->light=$light;
    }
    private function getModel()
    {
        return $this->model;
    }
    public function getModelproxy()
    {
        return $this->getModel();
    }
    public function setModel($model)
    {
        $this->model=ucwords($model);
    }
    public function __destruct()
    {
        printf("Destruct object...");
    }

}

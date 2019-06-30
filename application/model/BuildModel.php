<?php
namespace app\model;
use think\Model;
use think\Session;
use app\model\TypeModel;
use app\model\HousetypeModel;
use app\model\PositionModel;
use app\model\PriceModel;

class BuildModel extends Model
{
    protected $name = 'build';



    public function housetype()
    {
        return $this->hasOne('HousetypeModel','id','housetype_id');
    } 

    public function type()
    {
        return $this->hasOne('TypeModel','id','type_id');
    } 

    public function price()
    {
        return $this->hasOne('PriceModel','id','price_id');
    }   

    public function position()
    {
        return $this->hasOne('PositionModel','id','position_id');
    } 
}
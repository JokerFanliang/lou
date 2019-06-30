<?php
namespace app\model;
use think\Model;
use think\Session;
use app\model\BuildModel;

class HouseModel extends Model
{
    protected $name = 'house';



    public function build()
    {
        return $this->hasOne('BuildModel','id','build_id');
    }  
}
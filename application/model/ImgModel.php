<?php
namespace app\model;
use think\Model;
use think\Session;
use app\model\BuildModel;

class ImgModel extends Model
{
    protected $name = 'img';



    public function build()
    {
        return $this->hasOne('BuildModel','id','build_id');
    }  
}
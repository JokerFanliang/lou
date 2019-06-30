<?php
namespace app\model;
use think\Model;
use think\Session;
use app\model\BuildModel;

class BuildarticleModel extends Model
{
    protected $name = 'build_article';



    public function build()
    {
        return $this->hasOne('BuildModel','id','build_id');
    }  
}
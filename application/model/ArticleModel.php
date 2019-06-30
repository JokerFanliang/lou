<?php
namespace app\model;
use think\Model;
use think\Session;
use app\model\ArticletypeModel;

class ArticleModel extends Model
{
    protected $name = 'article';



    public function type()
    {
        return $this->hasOne('ArticletypeModel','id','type_id');
    }  
}
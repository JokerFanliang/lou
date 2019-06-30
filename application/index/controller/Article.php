<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\ArticleModel;
use app\model\ArticletypeModel;


class Article extends Controller
{
    public function index(){
        $bla=viewType();
        $types=ArticletypeModel::order('create_time','desc')->where('del',0)->select();
        $articles=ArticleModel::order('create_time','desc')->select();
        $hots=ArticleModel::order('count','desc')->select();
        $blade=$bla==1 ? "m_index" : "index";
        return view($blade,compact('types','articles','hots'));
    }

    public function detail(){
        $id=$_GET['id'];
        $article=ArticleModel::find($id);
        $article->count=($article->count)+1;
        $bla=viewType();
        $types=ArticletypeModel::order('create_time','desc')->where('del',0)->select();
        $hots=ArticleModel::order('count','desc')->select();
        $blade=$bla==1 ? "m_detail" : "detail";
        return view($blade,compact('types','article','hots'));
    }

}
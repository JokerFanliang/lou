<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\BuildModel;
use app\model\BuildarticleModel;


class Buildarticle extends Controller
{
    public function index(){
        $build=BuildModel::find($_GET['id']);
        $articles=BuildarticleModel::where('build_id',$_GET['id'])->order('create_time','desc')->select();
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_index" : "index";
        return view($blade,compact('build','articles','hot_builds'));
    }

    public function detail(){
        $article=BuildarticleModel::find($_GET['id']);
        $build=BuildModel::find($article->build_id);
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_detail" : "detail";
        return view($blade,compact('build','article','hot_builds'));
    }

}
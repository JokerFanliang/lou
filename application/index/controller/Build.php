<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\BuildModel;
use app\model\TypeModel;
use app\model\HousetypeModel;
use app\model\PositionModel;
use app\model\PriceModel;
use app\model\EnlistModel;
use app\model\ImgModel;
use app\model\BuildarticleModel;
use app\model\HouseModel;

class Build extends Controller
{
    public function index(){
        if($_POST){
            $data=request()->post();
            $list=new EnlistModel();
            $list->name=$data['name'];
            $list->build=$data['build'];
            $list->phone=$data['phone'];
            $list->position=$data['position'];
            $list->type=1;
            $list->save();
            $this->success("提交成功","Build/index");

        }
        $types=TypeModel::where('del',0)->order('create_time','desc')->select();
        $housetypes=HousetypeModel::where('del',0)->order('create_time','desc')->select();
        $positions=PositionModel::where('del',0)->order('create_time','desc')->select();
        $prices=PriceModel::where('del',0)->order('create_time','desc')->select();
        $builds=BuildModel::where('del',0)->order('create_time','desc')->select();
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        
        $bla=viewType();
        $blade=$bla==1 ? "m_index" : "index";
        return view($blade,compact('types','housetypes','positions','prices','builds','hot_builds'));
    }

    public function show(){
        if($_POST){
            $data=request()->post();
            $list=new EnlistModel();
            $list->name=$data['name'];
            $list->build=$data['build'];
            $list->phone=$data['phone'];
            $list->type=0;
            $list->save();
            $this->success("提交成功","/index/build/show?id=".$data['build_id']);

        }
        $build=BuildModel::find($_GET['id']);
        $imgs=ImgModel::order('create_time','desc')->select();
        $buildarticles=BuildarticleModel::order('create_time','desc')->where('build_id',$build->id)->limit(0,2)->select();
        $houses=HouseModel::order('create_time','desc')->where('build_id',$build->id)->limit(0,4)->select();
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,5)->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_show" : "show";
        return view($blade,compact('build','imgs','buildarticles','houses','hot_builds'));
    }

    public function more(){
        $build=BuildModel::find($_GET['id']);
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        
        $bla=viewType();
        $blade=$bla==1 ? "m_more" : "more";
        return view($blade,compact('build','hot_builds'));
    }

    public function image(){
        $build=BuildModel::find($_GET['id']);
        $imgs=ImgModel::order('create_time','desc')->select();
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,8)->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_image" : "image";
        return view($blade,compact('build','imgs','hot_builds'));
    }
}
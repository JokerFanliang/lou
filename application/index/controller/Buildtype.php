<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\BuildModel;
use app\model\HouseModel;


class Buildtype extends Controller
{
    public function index(){
        $build=BuildModel::find($_GET['id']);
        $houses=HouseModel::where('build_id',$_GET['id'])->order('create_time','desc')->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_index" : "index";
        return view($blade,compact('build','houses'));
    }

    public function detail(){
        $house=HouseModel::find($_GET['id']);
        $build=BuildModel::find($house->build_id);
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,8)->select();
        $bla=viewType();
        $blade=$bla==1 ? "m_detail" : "detail";
        return view($blade,compact('house','build','hot_builds'));
    }

}
<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\EnlistModel;
use app\model\BuildModel;


class Enlist extends Controller
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
            $this->success("提交成功","Enlist/index");

        }
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        $type=viewType();
        $blade=$type==1 ? "m_index" : "index";
        return view($blade,compact('hot_builds'));
    }

}
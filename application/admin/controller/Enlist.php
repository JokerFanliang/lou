<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\EnlistModel;
use think\Session;
class Enlist extends Base
{


    public function index()
    {

        $lists=EnlistModel::order('create_time','desc')->where('type',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $list=new EnlistModel();
            $list->name=$data['name'];
            $list->build=$data['build'];
            $list->phone=$data['phone'];
            $list->save();
            $this->redirect("Enlist/index");

        }
        return view();
    }


    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $list=EnlistModel::find($id);
            $list->name=$data['name'];
            $list->build=$data['build'];
            $list->phone=$data['phone'];
            $list->save();
            $this->redirect("Enlist/index");

        }
        $id=$_GET['id'];
        $list=EnlistModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=EnlistModel::find($id);
        $list->delete();
        $this->redirect("Enlist/index");

    }

}
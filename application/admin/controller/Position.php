<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\PositionModel;
use think\Session;
class Position extends Base
{


    public function index()
    {

        $lists=PositionModel::order('create_time','desc')->where('del',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $type=new PositionModel();
            $type->position=$data['position'];
            $type->save();
            $this->redirect("Position/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $type=PositionModel::find($id);
            $type->position=$data['position'];
            
            $type->save();
            $this->redirect("Position/index");

        }
        $id=$_GET['id'];
        $list=PositionModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=PositionModel::find($id);
        $list->del=1;
        $list->save();
        $this->redirect("Position/index");

    }

}
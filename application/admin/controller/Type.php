<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\TypeModel;
use think\Session;
class Type extends Base
{


    public function index()
    {

        $lists=TypeModel::order('create_time','desc')->where('del',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $type=new TypeModel();
            $type->name=$data['name'];
            $type->save();
            $this->redirect("Type/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $type=TypeModel::find($id);
            $type->name=$data['name'];
            
            $type->save();
            $this->redirect("Type/index");

        }
        $id=$_GET['id'];
        $list=TypeModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=TypeModel::find($id);
        $list->del=1;
        $list->save();
        $this->redirect("Type/index");

    }

}
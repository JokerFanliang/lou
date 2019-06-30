<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\HousetypeModel;
use think\Session;
class Housetype extends Base
{


    public function index()
    {

        $lists=HousetypeModel::order('create_time','desc')->where('del',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $type=new HousetypeModel();
            $type->name=$data['name'];
            $type->save();
            $this->redirect("Housetype/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $type=HousetypeModel::find($id);
            $type->name=$data['name'];
            
            $type->save();
            $this->redirect("Housetype/index");

        }
        $id=$_GET['id'];
        $list=HousetypeModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=HousetypeModel::find($id);
        $list->del=1;
        $list->save();
        $this->redirect("Housetype/index");

    }

}
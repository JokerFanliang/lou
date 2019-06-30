<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\ArticletypeModel;
use think\Session;
class Articletype extends Base
{


    public function index()
    {

        $lists=ArticletypeModel::order('create_time','desc')->where('del',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $type=new ArticletypeModel();
            $type->name=$data['name'];
            $type->save();
            $this->redirect("Articletype/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $type=ArticletypeModel::find($id);
            $type->name=$data['name'];
            
            $type->save();
            $this->redirect("Articletype/index");

        }
        $id=$_GET['id'];
        $list=ArticletypeModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=ArticletypeModel::find($id);
        $list->del=1;
        $list->save();
        $this->redirect("Articletype/index");

    }

}
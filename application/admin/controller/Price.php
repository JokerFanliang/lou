<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\PriceModel;
use think\Session;
class Price extends Base
{


    public function index()
    {

        $lists=PriceModel::order('create_time','desc')->where('del',0)->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $type=new PriceModel();
            $type->price=$data['price'];
            $type->save();
            $this->redirect("Price/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $type=PriceModel::find($id);
            $type->price=$data['price'];
            
            $type->save();
            $this->redirect("Price/index");

        }
        $id=$_GET['id'];
        $list=PriceModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=PriceModel::find($id);
        $list->del=1;
        $list->save();
        $this->redirect("Price/index");

    }

}
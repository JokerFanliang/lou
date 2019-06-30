<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\BuildModel;
use app\model\HouseModel;
use think\Session;
use think\Request;
use think\Image;
class House extends Base
{


    public function index()
    {
        $lists=HouseModel::order('create_time','desc')->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $house=new HouseModel();
            $house->house=$data['house'];
            $house->build_id=$data['build_id'];
            $house->desc=$data['desc'];
            $house->build_s=$data['build_s'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $house->img=$path;            
            }
            $house->save();
            $this->redirect("House/index");

        }
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds'));
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $house=HouseModel::find($id);
            $house->house=$data['house'];
            $house->build_id=$data['build_id'];
            $house->desc=$data['desc'];
            $house->build_s=$data['build_s'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $house->img=$path;            
            }
            $house->save();
            $this->redirect("House/index");

        }
        $id=$_GET['id'];
        $list=HouseModel::find($id);
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds','list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=HouseModel::find($id);
        $list->delete();
        $this->redirect("House/index");

    }

}
<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\ImgModel;
use app\model\BuildModel;
use think\Session;
use think\Request;
use think\Image;
class Img extends Base
{


    public function index()
    {
        if(getAdminType()==1){
            $ids=BuildModel::where('user_id',user('id'))->column('id');
            $lists=ImgModel::wherein('build_id',$ids)->order('create_time','desc')->paginate(10);
        }else{
            $lists=ImgModel::order('create_time','desc')->paginate(10);
        }
        
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $img=new ImgModel();
            $img->build_id=$data['build_id'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $img->img=$path;            
            }
            $img->save();
            $this->redirect("Img/index");

        }
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds'));
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $img=ImgModel::find($id);
            $img->build_id=$data['build_id'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $img->img=$path;            
            }
            $img->save();
            $this->redirect("Img/index");

        }
        $id=$_GET['id'];
        $list=ImgModel::find($id);
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds','list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=ImgModel::find($id);
        $list->delete();
        $this->redirect("Img/index");

    }

}
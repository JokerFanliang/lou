<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\BannerModel;
use think\Session;
use think\Image;
class Banner extends Base
{


    public function index()
    {

        $lists=BannerModel::order('create_time','desc')->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $banner=new BannerModel();
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $banner->img=$path;            
            }
            if(request()->file('small')){
                $image = Image::open(request()->file('small'));
                $path=saveImg($image);
                $banner->small=$path;            
            }
            $banner->save();
            $this->redirect("Banner/index");

        }
        return view();
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $banner=BannerModel::find($id);
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $banner->img=$path;            
            }
            if(request()->file('small')){
                $image = Image::open(request()->file('small'));
                $path=saveImg($image);
                $banner->small=$path;            
            }
            $banner->save();
            $this->redirect("Banner/index");

        }
        $id=$_GET['id'];
        $list=BannerModel::find($id);
        return view("",compact('list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=BannerModel::find($id);
        $list->delete();
        $this->redirect("Banner/index");

    }

}
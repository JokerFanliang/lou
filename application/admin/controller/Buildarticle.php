<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\BuildModel;
use app\model\BuildarticleModel;
use think\Session;
use think\Request;
use think\Image;
class Buildarticle extends Base
{


    public function index()
    {
        if(getAdminType()==1){
            $ids=BuildModel::where('user_id',user('id'))->column('id');
            $lists=BuildarticleModel::wherein('build_id',$ids)->order('create_time','desc')->paginate(10);
        }else{
            $lists=BuildarticleModel::order('create_time','desc')->paginate(10);
        }
        
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $article=new BuildarticleModel();
            $article->title=$data['title'];
            $article->build_id=$data['build_id'];
            $article->content=$data['content'];
            $article->save();
            $this->redirect("Buildarticle/index");

        }
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds'));
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $article=BuildarticleModel::find($id);
            $article->title=$data['title'];
            $article->build_id=$data['build_id'];
            $article->content=$data['content'];
            $article->save();
            $this->redirect("Buildarticle/index");

        }
        $id=$_GET['id'];
        $list=BuildarticleModel::find($id);
        $builds=BuildModel::order('create_time','desc')->select();
        return view('',compact('builds','list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=BuildarticleModel::find($id);
        $list->delete();
        $this->redirect("Article/index");

    }

}
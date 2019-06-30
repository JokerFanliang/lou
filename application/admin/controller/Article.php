<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\ArticleModel;
use app\model\ArticletypeModel;
use think\Session;
use think\Request;
use think\Image;
class Article extends Base
{


    public function index()
    {
        $lists=ArticleModel::order('create_time','desc')->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $article=new ArticleModel();
            $article->title=$data['title'];
            $article->type_id=$data['type_id'];
            $article->content=$data['content'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $article->img=$path;            
            }
            $article->save();
            $this->redirect("Article/index");

        }
        $types=ArticletypeModel::where('del',0)->order('create_time','desc')->select();
        return view('',compact('types'));
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $article=ArticleModel::find($id);
            $article->title=$data['title'];
            $article->type_id=$data['type_id'];
            $article->content=$data['content'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $article->img=$path;            
            }
            $article->save();
            $this->redirect("Article/index");

        }
        $id=$_GET['id'];
        $list=ArticleModel::find($id);
        $types=ArticletypeModel::where('del',0)->order('create_time','desc')->select();
        return view('',compact('types','list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=ArticleModel::find($id);
        $list->delete();
        $this->redirect("Article/index");

    }

}
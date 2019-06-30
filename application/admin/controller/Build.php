<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\model\TypeModel;
use app\model\HousetypeModel;
use app\model\PositionModel;
use app\model\PriceModel;
use app\model\BuildModel;
use think\Session;
use think\Request;
use think\Image;
class Build extends Base
{


    public function index()
    {
        $lists=BuildModel::order('create_time','desc')->paginate(10);
        return view("",compact('lists'));
    }

    public function add()
    {
        if($_POST){
            $data=request()->post();
            $build=new BuildModel();
            $build->types_id=$data['types_id'];
            $build->name=$data['name'];
            $build->type_id=$data['type_id'];
            $build->housetype_id=$data['housetype_id'];
            $build->position_id=$data['position_id'];
            $build->price_id=$data['price_id'];
            $build->start_time=$data['start_time'];
            $build->start_price=$data['start_price'];
            $build->telephone=$data['telephone'];
            $build->address=$data['address'];
            $build->desc=$data['desc'];
            $build->give_time=$data['give_time'];
            $build->renova=$data['renova'];
            $build->beian=$data['beian'];
            $build->year=$data['year'];
            $build->item=$data['item'];
            $build->wy_company=$data['wy_company'];
            $build->wy_type=$data['wy_type'];
            $build->wx_money=$data['wx_money'];
            $build->create_company=$data['create_company'];
            $build->car_num=$data['car_num'];
            $build->build_s=$data['build_s'];
            $build->space_s=$data['space_s'];
            $build->number=$data['number'];
            $build->rjl=$data['rjl'];
            $build->lhl=$data['lhl'];
            $build->jianjie=$data['jianjie'];
            $build->zbpt=$data['zbpt'];
            $build->xqpt=$data['xqpt'];
            $build->trans=$data['trans'];
            $build->user_id=user('id');
            $build->permit=$data['permit'];
            $build->is_hot=$data['is_hot'];
            $build->area=$data['area'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $build->img=$path;            
            }
            $build->save();
            $this->redirect("Build/index");

        }
        $housetypes=HousetypeModel::order('create_time','desc')->select();
        $types=TypeModel::order('create_time','desc')->select();
        $prices=PriceModel::order('create_time','desc')->select();
        $positions=PositionModel::order('create_time','desc')->select();
        return view('',compact('housetypes','types','prices','positions'));
    }

    public function edit()
    {
        if($_POST){
            $data=request()->post();
            $id=$data['id'];
            $build=BuildModel::find($id);
            $build->types_id=$data['types_id'];
            $build->name=$data['name'];
            $build->type_id=$data['type_id'];
            $build->housetype_id=$data['housetype_id'];
            $build->position_id=$data['position_id'];
            $build->price_id=$data['price_id'];
            $build->start_time=$data['start_time'];
            $build->start_price=$data['start_price'];
            $build->telephone=$data['telephone'];
            $build->address=$data['address'];
            $build->desc=$data['desc'];
            $build->give_time=$data['give_time'];
            $build->renova=$data['renova'];
            $build->beian=$data['beian'];
            $build->year=$data['year'];
            $build->item=$data['item'];
            $build->wy_company=$data['wy_company'];
            $build->wy_type=$data['wy_type'];
            $build->wx_money=$data['wx_money'];
            $build->create_company=$data['create_company'];
            $build->car_num=$data['car_num'];
            $build->build_s=$data['build_s'];
            $build->space_s=$data['space_s'];
            $build->number=$data['number'];
            $build->rjl=$data['rjl'];
            $build->lhl=$data['lhl'];
            $build->jianjie=$data['jianjie'];
            $build->zbpt=$data['zbpt'];
            $build->xqpt=$data['xqpt'];
            $build->trans=$data['trans'];
            $build->check=$data['check'];
            $build->permit=$data['permit'];
            $build->is_hot=$data['is_hot'];
            $build->area=$data['area'];
            if(request()->file('img')){
                $image = Image::open(request()->file('img'));
                $path=saveImg($image);
                $build->img=$path;            
            }
            $build->save();
            $this->redirect("Build/index");

        }
        $id=$_GET['id'];
        $list=BuildModel::find($id);
        $housetypes=HousetypeModel::order('create_time','desc')->select();
        $types=TypeModel::order('create_time','desc')->select();
        $prices=PriceModel::order('create_time','desc')->select();
        $positions=PositionModel::order('create_time','desc')->select();
        return view('',compact('housetypes','types','prices','positions','list'));
    }

    public function del()
    {
        $id=$_GET['id'];
        $list=BuildModel::find($id);
        $list->del=1;
        $list->delete();
        $this->redirect("Build/index");

    }

}
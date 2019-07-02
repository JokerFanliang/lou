<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;
use app\model\AdminModel;
use app\model\BuildModel;
use app\model\TypeModel;
use app\model\ArticleModel;
use app\model\HousetypeModel;
use app\model\PositionModel;
use app\model\BannerModel;

class Index extends Controller
{
    public function index(){
        $types=TypeModel::where('del',0)->limit(0,3)->select();
        $housetypes=HousetypeModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $positions=PositionModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $hot_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,4)->select();
        $newup_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $newdown_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $busup_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $busdown_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,3)->select();
        $articles=ArticleModel::order('create_time','desc')->limit(0,8)->select();
        $new_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        $bus_builds=BuildModel::where('del',0)->order('create_time','desc')->limit(0,10)->select();
        $banners=BannerModel::select();
        $bla=viewType();
        $blade=$bla==1 ? "m_index" : "index";
        return view($blade,compact('types','positions',"housetypes",'hot_builds','newup_builds','newdown_builds','busup_builds','busdown_builds','articles','new_builds','bus_builds','banners'));
    }


    public function detail(){
    	$types=TypeModel::select();
    	$book=BookModel::where('id',$_GET['id'])->find();
        $messages=MessageModel::where('book_id',$_GET['id'])->select();
    	return view("",compact('book','types','messages'));
    }

    public function order(){
        $book_id=$_GET['book_id'];
        $book=BookModel::where('id',$_GET['book_id'])->find();
        $num=$_GET['num'];
        $user=custom();
        if(!$user){
            $this->error("您还未登录，先去登录!",'Login/login');
        }
        if($user->phone=="" || $user->address==""){
            $this->error("请先完善您的信息!",'User/index');
        }
        $order= new OrderModel();
        $order->user_id=$user->id;
        $order->book_id=$book_id;
        $order->price=$book->price;
        $order->num=$num;
        $order->money=($book->price)*$num;
        $order->save();
        $types=TypeModel::select();
        return view("",compact('order','types','user','book'));

    }

    public function pay(){
        $type=$_GET['type'];
        $order_id=$_GET['order_id'];
        $order=OrderModel::where('id',$order_id)->find();
        $book=BookModel::where('id',$order->book_id)->find();
        $book->num=($book->num)-($order->num);
        $book->save();
        $order->type=$type;
        $order->save();
        $this->success("下单成功!",'/index/order/index');
    }
}
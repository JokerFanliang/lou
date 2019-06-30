<?php
use app\model\AdminModel;
use app\model\SystemModel;
use app\model\UserModel;
use think\Session;
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
// 
function viewType(){
	 if (strpos($_SERVER['HTTP_USER_AGENT'],"Mobile"))
	 {
	     return 1;
	 }else{
	     return 0;
	 }
}


function saveImg($image){
    $folder="/uploads/".date("Ymd")."/";
    $path_folder="/public/static".$folder;
    $filename=time().rand(1000,9999);
    if (!file_exists(STATIC_PATH.$folder)){
        mkdir (STATIC_PATH.$folder,0777,true);
    }
    $path=$folder.$filename.".".$image->type();
    $path2=$path_folder.$filename.".".$image->type();
    $image->save(STATIC_PATH.$path);
    return $path2;
}

function getAdminType(){
	return Session::get('admin_type');
}

function getTitle(){
	return Session::get('index_title');
}

function getLeft(){
	return Session::get('left');
}

    function _g($_u,$_n=0) {

      $_h = curl_init();
      curl_setopt($_h, CURLOPT_URL, $_u);
      curl_setopt($_h, CURLOPT_RETURNTRANSFER, 1); 
      curl_setopt($_h, CURLOPT_HEADER, false);
      curl_setopt($_h, CURLOPT_HTTPHEADER, array(
              'user-agent:Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Mobile Safari/537.36'
      ));

      if($_n==1){
        curl_setopt($_h, CURLOPT_NOBODY, 1);
              curl_setopt($_h, CURLOPT_FOLLOWLOCATION, 1);
        curl_exec($_h);
              $_r = curl_getinfo($_h, CURLINFO_EFFECTIVE_URL);
      }else{
        $_r = curl_exec($_h);
      }
      curl_close($_h);
      echo 123;
      dump($_r);exit;
      return $_r;
    }

function user($param=""){
	if(Session('?user_id')){	
       	$id=Session::get('user_id');
        $user=AdminModel::find($id);
        switch ($param) {
		    case 'id':
		        $res=$user->id;
		        break;
		    case 'username':
		        $res=$user->username;
		        break;
		    default : 
		    	$res=$user;
		    	break;
		}
    }else{
    	$res=null;
    }
    return $res;
}

function custom($param=""){
	if(Session('?custom_id')){	
       	$id=Session::get('custom_id');
        $user=UserModel::find($id);
        switch ($param) {
		    case 'id':
		        $res=$user->id;
		        break;
		    case 'username':
		        $res=$user->username;
		        break;
		    default : 
		    	$res=$user;
		    	break;
		}
    }else{
    	$res=null;
    }
    return $res;
}

function getSystem(){
	return $list=SystemModel::find();
}

//清除数组中所有字符串两端空格
function TrimArray($Input){
    if (!is_array($Input))
        return trim($Input);
    return array_map('TrimArray', $Input);
}

function deal($data,$type){
	$arr=explode(" ",trim($data));
	if(count($arr)>=2){
		if($type==0){
			$sec=strtotime($arr[0])-strtotime("08:00");
			if($sec>0){
				$min=$sec/60;
				return "迟到".$min."分钟";
			}else{
				return "正常";
			}
		}elseif($type==1){
			$sec=strtotime($arr[0])-strtotime("08:30");
			if($sec>0){
				$min=$sec/60;
				return "迟到".$min."分钟";
			}else{
				return "正常";
			}
		}elseif($type==2){
			$sec=strtotime($arr[0])-strtotime("09:00");
			if($sec>0){
				$min=$sec/60;
				return "迟到".$min."分钟";
			}else{
				return "正常";
			}
		}
	}else{
		return $data;
	}
}

function dealStart($v){
	$v=explode(" ",$v);
	if($v[1]=="上午"){
		$res=$v[0]." 08:30";
	}else{
		$res=$v[0]." 12:00";
	}
	return $res;
}

function dealEnd($v){
	$v=explode(" ",$v);
	if($v[1]=="上午"){
		$res=$v[0]." 12:00";
	}else{
		$res=$v[0]." 18:00";
	}
	return $res;
}
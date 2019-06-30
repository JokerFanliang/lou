<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function __construct()
    {
       parent::__construct();

       if(!session('?user_id'))
       {
          $this->redirect('admin/Login/login');
       }


    }

}

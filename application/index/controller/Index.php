<?php
namespace app\index\controller;
use QL\QueryList;
use think\Db;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
		//ini_set('memory_limit','3072M');    // 临时设置最大内存占用为3G
		//set_time_limit(0);   // 设置脚本最大执行时间 为0 永不过期
		   
	   $list = Db::name('msg')->paginate(50);
	   $this->assign('list', $list);
		   
		 return $this->fetch();
    }
}

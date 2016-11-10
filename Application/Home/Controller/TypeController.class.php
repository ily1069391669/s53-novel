<?php
namespace Home\Controller;
use Think\Controller;
class TypeController extends Controller {
    public function index(){

    	$type = M('book_type')->where('pid = 0')->select();
        // dump($type);
        foreach($type as $v){
        	// dump($v['id']);
        	$arr = [];
        	$id = $v['id'];
        	$m = M('book_type')->where("pid = $id")->select();
        	$arr['father'] = $v['type'];
        	$arr['child'][] = $m['0']['type'];
        	$arr['child'][] = $m['1']['type'];
        	$list[] = $arr;
        }
        	dump($list);
        $this->assign('list',$list);
        $this->display();

    }
}
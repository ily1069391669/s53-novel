<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {

 	public function index()
 	{
 		$type = M('book_type')->select();
        $this->assign('list',$type);
        $this->display();
 	}

 	public function insert()
 	{
	 	$f_id = M('book_type')->where('pid=0')->getField('type')->select();
	 	// dump($f_id);
	 	$this->assign('f_id',$f_id);
 		// $this->display();
 	}

}
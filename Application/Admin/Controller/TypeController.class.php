<?php
namespace Admin\Controller;
use Think\Controller;
class TypeController extends Controller {

 	public function index()
 	{
 		$type = M('book_type')->where('pid = 0')->select();
        $this->assign('list',$type);
        $this->display();
 	}

 	//展示添加
 	public function insert()
 	{
	 	$f_id = M('book_type')->field('id,type')->select();
	 	// dump($f_id);
	 	

	 

	 	$this->assign('arr',$f_id);
 		$this->display();
 	}

 	//执行添加
 	public function add()
 	{

 		// dump($_POST);
    	if (empty($_POST)) {
            $this->redirect('Admin/Manger/insert');
            exit;
        }
        //1.自己手动过滤POST数据
        //2.M('user')->data()  自动生成数据
        //3.推荐!
        M('book_type')->create();

        //执行添加
        if (M('book_type')->add() > 0) {
           $this->success('恭喜您,添加成功!', U('index'));
        } else {
           $this->error('添加失败....');
        }
 	}

 	//查看子分类
 	public function child()
 	{
 		//过滤参数
 		$id = I('get.id/d');

 		// $m = M('book_type')->where("pid=$id")->select();
 		// dump($m);
 		if(M('book_type')->where("pid=$id")->select() == null){
 			$this->error('并没有子分类....');
 			exit;
 		}

 		$m = M('book_type')->where("pid=$id")->select();
 		// dump($m);
 		$this->assign('list',$m);
        $this->display();
 	}

 	//执行删除
 	public function del()
 	{
 		//判断有无传递ID
        if (empty($_GET['id'])) {
            $this->redirect('Admin/Manger/index');
            exit;
        }

 		//过滤参数
 		$id = I('get.id/d');
 		//查找是否拥有以此id为父id的分类
 		// $m = M('book_type')->where("pid=$id")->select();


 		
 		//限制删除
 		if(M('book_type')->where("pid=$id")->select() !== array() )
 		{
 			$this->error('该分类有下属分类，不能删除呀!');
 			exit;
 		}

 		//执行删除
 		 if (M('book_type')->where("id=$id")->delete() > 0) {
           $this->success('恭喜您,删除成功!', U('index'));
        } else {
           $this->error('删除失败....', U('index'));
        }


 	}
}
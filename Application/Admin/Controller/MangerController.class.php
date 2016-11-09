<?php
namespace Admin\Controller;
use Think\Controller;
class MangerController extends Controller {
    public function index()
    {
        // $this->display();
        $man = M('admin_man')->select();
        $this->assign('list',$man);
        $this->display();
    }

    public function insert()
    {
    	$this->display();
    }

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
        M('admin_man')->create();

        //执行添加
        if (M('admin_man')->add() > 0) {
           $this->success('恭喜您,添加成功!', U('index'));
        } else {
           $this->error('添加失败....');
        }
    }

     public function update()
    {
    	// dump($_GET);
    	 // //接收ID
        $id = I('get.id/d');
      //   //查找
        $data = M('admin_man')->find($id);
		// dump($data);
        $this->assign('title','管理员编辑');
        $this->assign('data',$data);
        $this->display('Manger/update');
    }

    public function edit()
    {
    	 if (empty($_POST)) {
            $this->redirect('Admin/manger/update');
            exit;
        }
        // dump($_POST);
        M('admin_man')->create();
        //执行修改
        if (M('admin_man')->save() > 0) {
           $this->success('恭喜您,编辑成功!', U('index'));
        } else {
           $this->error('编辑失败....');
        }
    }

    public function del()
    {
    	//判断有无传递ID
        if (empty($_GET['id'])) {
            $this->redirect('Admin/Manger/index');
            exit;
        }
        //接收参数
        // $id = $_GET['id'];
        // I() 方法 过滤输入的数据 
        $id = I('get.id/d');
        // echo $id;exit;

        //zhixingshanchu 
        if (M('admin_man')->delete($id) > 0) {
           $this->success('恭喜您,删除成功!', U('index'));
        } else {
           $this->error('删除失败....', U('index'));
        }
    } 
}
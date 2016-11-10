<?php
namespace Admin\Controller;
use Think\Controller;
class NovelController extends Controller {

	public function index()
	{
		
		$data = M()->table('novel_details  as  n')->join('book_type  as  t  on  n.typeid = t.id')->field('n.id,t.type,n.author,n.novel_name,n.state,n.addtime')->select();
		// var_dump($data);
        $this->assign('list',$data);
        $this->display();
	}


	public function update()
	{
		// dump($_GET);
    	 // //接收ID
        $id = I('get.id/d');
      //   //查找
        $data = M('novel_details')->find($id);
		// dump($data);
        $this->assign('title','图书编辑');
        $this->assign('data',$data);
        $this->display('Novel/update');
	}

	 public function insert()
    {
    	$type = M('book_type')->where('pid != 0')->select();
    	// dump($type);
        $this->assign('list',$type);
    	$this->display();
    }


      public function edit()
    {
    	 if (empty($_POST)) {
            $this->redirect('Admin/Novel/update');
            exit;
        }
        // dump($_POST);
        // exit;
        M('novel_details')->create();
        //执行修改
        if (M('novel_details')->save() > 0) {
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
        
        //删除文件
        $m = M('novel_details')->field("path")->where("id=$id")->find();

        $path = './Uploads/'.$m['path'];
        // echo $path;
        unlink($path);
        
        	
        // 删除数据
        if (M('novel_details')->delete($id) > 0) {
           $this->success('恭喜您,删除成功!', U('index'));
        } else {
           $this->error('删除失败....', U('index'));
        }


    }

    public function upload()
    {
    	// dump($_POST);
    	// exit;
    	
    	if (empty($_POST)) {
            $this->redirect('Admin/Novel/insert');
            exit;
        }
        //1.自己手动过滤POST数据
        //2.M('user')->data()  自动生成数据
        //3.推荐!
        

    	// dump($_FILES["novel_url"]['name']);
		// echo $newstr; 
    	// dump($savename);
	    $upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     8388600 ;// 设置附件上传大小
	    $upload->exts      =     array('txt');// 设置附件上传类型
	    // 上传单个文件 
	    $info   =   $upload->uploadOne($_FILES['novel_url']);

	    if(!$info) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{// 上传成功 获取上传文件信息
	         // echo $info['savepath'].$info['savename'];
	         $path  = $info['savepath'].$info['savename'];
	         $_POST['path'] = $path;
	         // dump($_POST);
	          //执行添加
	      //     dump($_POST);
    			// exit;
	          M('novel_details')->create();
		        if (M('novel_details')->add() > 0) {
		           $this->success('恭喜您,添加成功!', U('index'));
		        } else {
		           $this->error('添加失败....');
		        }
	         

	    }


	}


}
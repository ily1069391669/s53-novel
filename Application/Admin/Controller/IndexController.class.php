<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// dump($_SESSION);
    	// 
    	
        if (session('username') !== null ) {

        	
    		// dump($_SESSION);
      
             $this->display();

        } else {
            $this->redirect('Index/login');
        }
    	
    }

    public function do_login()
    {
    	//查看数据是否为空
    	if (empty($_POST)) {
            $this->redirect('Admin/Index/index');
            exit;
        }
        // dump($_POST);
        //查出管理员数据
        $log_name = $_POST['log_name'];
      
        // echo M('admin_man')->getLastSql();
       
	     if (M('admin_man')->where("name='$log_name'")->find())
	      {
		      	  $m = M('admin_man')->where("name='$log_name'")->find();
		      	   // dump($m);
		           if($m['name'] == $log_name && $m['password'] == $_POST['password'])
		           {
		           	//设置session
		           	session('username',$m['username']);
		           	session('power',$m['power']);
		           	$this->redirect('Index/index');
		           }else 
		           {
		           $this->error('用户名密码错误....');
		        	}
		           // dump($_SESSION);
	           
	     } else {
	           $this->error('用户名密码错误....');
	       }
        
    }

      public function log_out()
      {
      		session('username',null);
      		dump($_SESSION);
      		$this->redirect('Index/index');
      }

}
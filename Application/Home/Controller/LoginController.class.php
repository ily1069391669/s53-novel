<?php 
	namespace Home\Controller;
	use Think\Controller;

	class LoginController extends Controller
	{
		public function index()
		{
			$this->display('Login/index');
		}
                        public function login()
                        {

                 if (empty($_POST)) {
                    $this->redirect('Home/Login/index');
                    exit;
                }
                if(empty($_POST['username'])){
                      $this->error('用户名不能为空!');
                }else if(empty($_POST['password'])){
                    $this->error('密码不能为空!');
                }
                 //执行登录
                $map['username']=$_POST['username'];
                $map['password']=$_POST['password'];
                if(M('user')->where($map)->select()) {
                   $this->success('登录成功!', U('index/index'));
                } else {
                   $this->error('登录失败....');
                }
       }
   }


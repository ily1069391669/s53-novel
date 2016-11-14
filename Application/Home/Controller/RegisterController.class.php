<?php 
    namespace Home\Controller;
    use Think\Controller;

    class RegisterController extends Controller
    {
        public function index()
        {
            $this->display('Register/index');
        }
         public function add()
        {
            $this->assign('title','添加用户');
            $this->display('Register/index');
        }

        //执行添加
        public function insert()
        {
            // var_dump($_POST);exit;
            if (empty($_POST)) {
                $this->redirect('Home/Register/index');
                exit;
            }
            M('user')->create();

            $map['phone']=$_POST['phone'];
            if(M('user')->where($map)->select()){
                    $this->error('手机号已注册!');
                }
            $nam['username']=$_POST['username'];
            if(M('user')->where($nam)->select()){
                    $this->error('用户名已被注册!');
                }
            $email['email']=$_POST['email'];
            if (M('user')->where($email)->select()) {
                    $this->error('邮箱已被注册!');
            }


            //执行添加   
                if (empty($_POST['log_name'])) {
                      $this->error('昵称不能为空!');
                }else if(!preg_match("/^[\\u4e00-\\u9fa5_a-zA-Z0-9-]{1,16}$/",$_POST['log_name'])){
                      $this->error('昵称格式不正确');
                }
                if(empty($_POST['username'])){
                      $this->error('用户名不能为空!');
                }
                else if(empty($_POST['password'])){
                    $this->error('密码不能为空!');
                }else if(!preg_match("^([A-Z]|[a-z]|[0-9]|[`-=[];,./~!@#$%^*()_+}{:?]){6,18}$",$_POST['password']));
                else if(empty($_POST['repassword'])){
                    $this->error('确认密码不能为空!');
                }else if($_POST['password'] !== $_POST['repassword']){
                    $this->error('确认密码与设置密码不同!');
                }else if(!preg_match("/^1[3-8][0-9]{9}$/",$_POST['phone'])){
                    $this->error('输入正确的手机号!');
                }else if(!preg_match("/^\w+@\w+(\.\w+)+$/",$_POST['email'])){
                    $this->error('邮箱格式不正确!');
                }

                
                if(M('user')->add() > 0) {
                   $this->success('恭喜您,注册成功!', U('index/index'));
                } else {
                   $this->error('注册失败....');
                }
    } 
}




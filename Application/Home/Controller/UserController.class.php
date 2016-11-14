<?php 

    //命名空间
    namespace Home\Controller;

    //导入类
    use Think\Controller;

    class UserController extends Controller
    {
        //首页
        public function index()
        {
            //实例化model模型
            //$model = new \Think\Model('user');
            $model = M('user');
            // var_dump($model);
            // $data = $model->order('id desc')->select();
            //发送数据
            // $this->assign('list',$data);
            //加载模板
            $this->display();
        }
         public function add()
    {
        $this->assign('title','添加用户');
        $this->display('Regsiter/index');
    }

    //执行添加
    public function insert()
    {
        if (empty($_POST)) {
            $this->redirect('Home/Register/index');
            exit;
        }
        //1.自己手动过滤POST数据
        //2.M('user')->data()  自动生成数据
        //3.推荐!
        M('user')->create();

        //执行添加
        if (M('user')->add() > 0) {
           $this->success('恭喜您,注册成功!', U('index'));
        } else {
           $this->error('注册失败....');
        }
    }
    }




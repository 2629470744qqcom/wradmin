<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{
    public function index(){
        if(IS_POST){
            $name      = I('post.uname','');
            $pwd       = I('post.pwd','');
            $data['ip']       = get_client_ip();
            $data['login_time'] = time();
            if($name=M('Admins')->where('uname="'.$name.'"')->getField('uname') and md5($pwd) ==M('Admins')->where('uname="'.$name.'"')->getField('pwd')){
            M('Admins')->field('ip,login_time')->data($data)->where('uname="'.$name.'"')->save();
                session('username',$name);
                session('ip',$data['ip']);
                $this->redirect('Index/index');
            }
            $this->error("用户名或密码不正确");
        }
        $this->display();
    }
}



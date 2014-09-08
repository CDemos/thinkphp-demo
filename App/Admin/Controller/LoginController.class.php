<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{


	public function Index(){
			session('userid',12345);
			echo "user 12345 login!";
	}

	public function home(){
		if(!empty(session('userid'))){
			echo 'welcome ' . session('userid');
		}else{
			echo 'you are not login yet!';
			$this->redirect('Login/Index','',2);
		}
	}

	public function logout(){
		if(!empty(session('userid'))){
			session('userid',null);
		}
	}
	
	public function tpl(){
	    //template -> /App/Admin/View/Login/tpl.html
// 	    $this->display();
	}
}
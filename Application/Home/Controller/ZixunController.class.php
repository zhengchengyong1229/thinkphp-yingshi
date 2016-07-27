<?php

namespace Home\Controller;
use Think\Controller;

class ZixunController extends Controller {

    public function index(){

        $this->display();

    }

	function upload(){
		
			$a=$this->up();
			if(isset($a)){
				//写入数据库的方法
				if($this->c($a)){
					$this->success('上传成功');
				}
			}else{
				$this->error('上传文件出现异常');
			}
		
	}

	private function c($data){
		$file=M('zixun');
		$data['picture']=$data[0]['savename'];
		$data['biaoti']=$_GET['biaoti'];
		$data['neirong']=$_GET['neirong'];
		if($file->data($data)->add()){
			return true;
		}else{
			return false;
		}
	}

	private function up(){
		import('@.Org.UploadFile');
		$upload=new UploadFile();
		$upload->savePath='./Uploads/';   //上传路径
		$upload->thumb=true;         //开启图片缩略
		$upload->thumbMaxWidth='500';  //图片宽度
		$upload->thumbMaxHeight='400'; //图片高度
		$upload->thumbPrefix='s_';     //缩略图前缀


		if($upload->upload()){
			$info=$upload->getUploadFileInfo();
			return $info;
		}else{
			$this->error($upload->getErrorMsg());
		}
	}
}
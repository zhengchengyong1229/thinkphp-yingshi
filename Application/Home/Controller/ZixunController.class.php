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
				//д�����ݿ�ķ���
				if($this->c($a)){
					$this->success('�ϴ��ɹ�');
				}
			}else{
				$this->error('�ϴ��ļ������쳣');
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
		$upload->savePath='./Uploads/';   //�ϴ�·��
		$upload->thumb=true;         //����ͼƬ����
		$upload->thumbMaxWidth='500';  //ͼƬ���
		$upload->thumbMaxHeight='400'; //ͼƬ�߶�
		$upload->thumbPrefix='s_';     //����ͼǰ׺


		if($upload->upload()){
			$info=$upload->getUploadFileInfo();
			return $info;
		}else{
			$this->error($upload->getErrorMsg());
		}
	}
}
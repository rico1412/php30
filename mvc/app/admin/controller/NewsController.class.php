<?php 

namespace admin\controller;
use \core\Controller;

class NewsController extends Controller {
	public function showList(){
		$model = M('\\model\\NewsModel');
		$sql = "select * from news where 1 order by id desc limit 10";
		$datas = $model->getRows($sql);
		
		$this->assign('datas', $datas);
		$this->display('news/newslist.html');
	}

	public function showAd(){
		$this->display('news/newsad.html');
	}

	public function adh(){
		$model = M('\\model\\NewsModel');
		$title = $_POST['title'];
		$intro = $_POST['intro'];
		$content = $_POST['content'];
		$post_date = time() + (8*60*60);
		$sql = "insert into news values (null, '{$title}', '{$intro}', '{$content}', {$post_date})";
		$re = $model->setData($sql);
		if ($re) {
			echo "新增成功！！！";
			header('Refresh: 2; url=' . URL . '?p=admin&m=news&a=showList');
			exit;
		} else {
			echo "新增失败！！！请联系管理员！！！";
			header('Refresh: 5; url=' . URL . '?p=admin&m=news&a=showList');
			exit;
		}
	}
}
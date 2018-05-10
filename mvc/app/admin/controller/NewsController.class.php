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
		include APP_ADMIN_VIEW_PATH . 'newsad.html';
	}
}
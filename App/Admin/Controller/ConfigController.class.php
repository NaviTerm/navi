<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends SystemController{
	public function _initialize(){
        parent::_initialize();
	}
	public function index(){
		$config = M('config');
		if(I('post.')){
			$data = I('post.');
			$con = array();
			foreach($data as $k => $v){
				$con['value'] = $v;
				$result += $config->where("name='".$k."'")->save($con);
			}
			$result ? $this->success('配置更新成功',U('config/index'),0) : $this->error('配置更新失败,你都做了些什么?',U('config/index'));
		}else{
			$arr = array();

			$result = $config->select();
			foreach($result as $k => $v){
				$arr[$v['name']] = $v['value'];
			}
			$this->assign('list',$arr);
			$this->display();
		}
	}

	// 数组保存到文件
	public function update_config() {
        if(!IS_POST) halt("您访问的页面不存在，请稍后再试!");
        $data = I('post.');	
		$filename = CONF_PATH.'config.inc.php';

	    if (is_array ( $data )) {
	        $content = var_export ( $data, true );
	    } else {
	        $content = $data;
	    }
		$myfile = fopen($filename,'w');	  
	    $content = "<?php\nreturn $content;\n?>"; // \n!defined('IN_MP') && die();\nreturn $con;\n
	    $result = fwrite($myfile, $content);
	    fclose($myfile);
	    if($result){
            $this->success('修改成功', U('admin/config'));
        } else {
            $this->error('修改失败，请修改'.CONF_PATH.'config.inc.php文件权限');
        }
	}

}
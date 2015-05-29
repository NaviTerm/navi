<?php
namespace Admin\Controller;
use Think\Controller;
class MallController extends SystemController {
    public function _initialize() {
        parent::_initialize();   
    }
    public function index(){
        $mall = M('mall');
        $count = $mall->where('status=3')->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $lists = $mall->where('status=3')->order('addtime desc')->limit($page->firstRow.','.$page->listRows)->select();
        // dump($lists);
        $this->assign("lists",$lists);
        $this->assign("page",$show);
        $this->assign("count",$count);
        $this->display();
    }
    public function add(){
    	$mall = new \Model\MallModel();
        if(!empty($_POST)){
        	$result = $mall->add_mall(I('post.'));
        	if($result){
        		$this->success('添加成功',U("mall/index"));
        	}else{
        		$this->error($mall->getEroor());
        	}
        }else{
        	$cate = M('category')->where('moduleid=2')->select();
        	$this->assign('category',$cate);
            $this->assign('lists',$lists);
        	$this->display();
        }
    }
//     public function update_seva(){
//         if(I('post.')){
//             $data = I('post.');
//             $arr = array();
//             $mall = M('mall');
//             foreach($data as $k => $v){
//                 list($action,$itemid) = explode('_', $k);
//                 //$k = "listorder_16";
//                 //$action ="listorder",$itemid=16;$v=listorder值
//                 //$k = "elite_16";  $arr = array('listorder'=>$v,'itemid'=>$itemid);
//                 //$action ="elite",$itemid="16";$v= elite的值
//                 //$arr = array('elite'=>$v,'itemid')
//                 $arr[$itemid][$action] = $v;
//             }
// /*          dump($arr);
//             exit();*/
//             foreach($arr as $k => $v){
//                 $v['itemid'] = $k;
//                 $redata = $mall->create($v);
//                 $result += $mall->save($redata);
//             }
//             if($result){
//                 $this->success("修改成功".$result."条数据",U('mall/index'));
//             }else{
//                 $this->error("修改失败");
//             }
//         }
//     }
    public function update($itemid){
        $mall = M('mall');

        if(I('post.')){
            $data = I('post.');
            if($data){
                $data['addtime'] = strtotime($data['addtime']);
                $result = $mall->save($data);
                $content = array('itemid'=>$data['itemid'],'content'=>$data['content']);
                $result += M('mall_data')->save($content);
                if($result){
                    $this->success("编辑成功",U('mall/index'));
                }else{
                    $this->error("编辑失败");
                }
            }
        }else{
            $list = $mall->where("itemid=".$itemid)->find();
            $content = M('mall_data')->where("itemid=".$itemid)->find();
            $list['content'] = $content['content'];
            $cate = M('category')->where('moduleid=2')->select();
            $this->assign('list',$list);            
            $this->assign('category',$cate);
            $this->display('add');
        }
    }
    public function huishou($itemid='', $type = 'del'){	// 回收站
		// var_dump($itemid)
		$mall = new \Model\MallModel();
		//显示回收站
		if(empty($itemid)){
			$count = $mall->where("status=0")->count();
			$page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
			$show = $page->show();              // 分页显示输出
			$lists = $mall->where('status=0')->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign("lists",$lists);
			$this->assign("page",$show);
			$this->assign("count",$count);
			//查询分类
			$this->display();
		}else{
			$itemid = strstr($itemid,',') ? explode(',',$itemid ) : $itemid ;
			if($type != 'del'){
				$result = $mall->change($itemid);
				$message = '宝贝回去列表了';
			}else{
				$result = $mall->delete($itemid);
				$content = M('mall_data')->delete($itemid);	
				$message = '文章已经彻底删除';
			}
			if($result){
				$this->success($message,U('mall/index'),0);	
			}else{
				$this->error($mall->getError(),U('mall/huishou'));	
			}			
		}
	}
    public function del($itemid){
    	if(strstr($itemid, ',')){
			$id = $itemid;
			$itemid = explode(',', $id);
		}
		$mall = new \Model\MallModel();
		$result = $mall->del($itemid);
		if($result){
			$this->success('宝贝离开你,去回收站了',U('mall/huishou'),0);	
		}else{
			$this->error('宝贝不愿意离开,不肯去回收站',U('mall/index'));	
		}
    }
    public function delete($itemid){
        $mall = M('mall');
        $data = M('mall_data');
        $result = $mall->delete($itemid);
        $result1 = $data->delete($itemid);
        if($result && $result1){
            $this->success("世界那么大,它出去看看了",U('mall/index'),3);
        }else{
            $this->error("删除失败");
        }
    }

}
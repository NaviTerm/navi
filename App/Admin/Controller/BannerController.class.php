<?php
namespace Admin\Controller;
use Think\Controller;
class BannerController extends SystemController {
    public function _initialize() {
        parent::_initialize();   
    }
    public function index(){
        $banner = M('banner');
        $count = $banner->where("status=3")->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $lists = $banner->where('status=3')->order('listorder desc')->limit($page->firstRow.','.$page->listRows)->select();
        // dump($lists);
        $this->assign("lists",$lists);
        $this->assign("page",$show);
        $this->assign("count",$count);
        $this->display();
    }
    public function add(){
        if(I('post.')){
            $data = I('post.');
            $data['addtime'] = time();
            $data['status'] = 3;
            $data['introduce'] = $data['content'];
            $banner = M('banner');
            $result = $banner->create($data);
            if($result){
                $result1 = $banner->add($result);
                 if($result1){
                    $this->success("添加成功",U('banner/index'));
                }else{
                    $this->error("添加失败");
                }
            }
        }else{
            $this->display();
        }
    }
    public function update_seva(){
        if(I('post.')){
            $data = I('post.');
            $arr = array();
            $listorder = M('banner');
            foreach($data as $k => $v){
                $arr['itemid'] = $k;
                $arr['listorder'] = $v;
                $result += $listorder->save($arr);
            } 
            if($result){
                $this->success("修改成功".$result."条数据",U('banner/index'));
            }else{
                $this->error("修改失败");
            }
        }
    }
    public function update($itemid){
        $banner = M('banner');
        if(I('post.')){
            $data = I('post.');
            if($data){
                $data['addtime'] = strtotime($data['addtime']);
                $data['edittime'] = time();
                $redata = $banner->create($data);
                $result = $banner->save($redata);
                if($result){
                    $this->success("编辑成功",U('banner/index'));
                }else{
                    $this->error("编辑失败");
                }
            }
        }else{
            $list = $banner->where("itemid=".$itemid)->find();
            $this->assign('list',$list);           
            $this->display('add');
        }
    }
    public function delete($itemid){
        $banner = M('banner');
        $result = $banner->delete($itemid);
        if($result){
            $this->success("世界那么大,它出去看看了",U('banner/index'),3);
        }else{
            $this->error("删除失败");
        }
    }
    public function del_img($src){
        return unlink($src) ? true : false ;//删除原图
    }

}
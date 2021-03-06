<?php
namespace Admin\Controller;
use Think\Controller;
class CourseController extends SystemController {
    public function _initialize() {
        parent::_initialize();   
    }
    public function index(){
        $course = M('course');
        $count = $course->where("status=3")->count();
        $page = new \Think\Page($count,10);
        $show = $page->show();
        $lists = $course->where('status=3')->order('listorder desc')->limit($page->firstRow.','.$page->listRows)->select();
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
            $course = M('course');
            $result = $course->create($data);
            if($result){
                $result1 = $course->add($result);
                 if($result1){
                    $this->success("添加成功",U('course/index'));
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
            $listorder = M('course');
            foreach($data as $k => $v){
                $arr['itemid'] = $k;
                $arr['listorder'] = $v;
                $result += $listorder->save($arr);
            } 
            if($result){
                $this->success("修改成功".$result."条数据",U('course/index'));
            }else{
                $this->error("修改失败");
            }
        }
    }
    public function update($itemid){
        $course = M('course');
        if(I('post.')){
            $data = I('post.');
            if($data){
                $data['addtime'] = strtotime($data['addtime']);
                $data['edittime'] = time();
                $redata = $course->create($data);
                $result = $course->save($redata);
                if($result){
                    $this->success("编辑成功",U('course/index'));
                }else{
                    $this->error("编辑失败");
                }
            }
        }else{
            $list = $course->where("itemid=".$itemid)->find();
            $this->assign('list',$list);           
            $this->display('add');
        }
    }
    public function delete($itemid){
        $course = M('course');
        $result = $course->delete($itemid);
        if($result){
            $this->success("世界那么大,它出去看看了",U('course/index'),3);
        }else{
            $this->error("删除失败");
        }
    }
    public function del_img($src){
        return unlink($src) ? true : false ;//删除原图
    }

}
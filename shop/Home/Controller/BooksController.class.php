		<?php
/**
 * Created by PhpStorm.
 * User: BMM_lenovo
 * Date: 2018/1/3
 * Time: 13:46
 */
namespace Home\Controller;

use Home\Model\BooksModel;
use Think\Controller;

class BooksController extends Controller{
    /*
     * 展示book页面
     */
    function index(){
        //实例化BooksModel;
        $model = new BooksModel();
        $list = $model->select();//查询所有数据返回二维数组
        $this->assign('list',$list);
        $this->display();
    }
    function add(){
        $this->display();
    }
    function addSave(){
        $model = new BooksModel();
        $data = $_POST;
        $data['name']=empty($data['name'])?'':$data['name'];
        $data['price']=empty($data['price'])?'':$data['price'];
        $data['create_time'] = time();
        //用add方法返回值是id
        if($model->add($data)){
            $this->success('添加成功',U('Books/index'));
        }else{
            $this->error('添加失败');
        }
    }
    /*
     * 展示修改页面
     */
    function edit(){
        $model = new BooksModel();
        if(isset($_GET['id'])){
            $data = $model->find($_GET['id']);
            $this->assign('data',$data);
            $this->display();
        }else{
            $this->error('修改数据不存在');
        }
    }
    function editSave(){
        $model = new BooksModel();
        $data = $_POST;
        $data['name']=empty($data['name'])?'':$data['name'];
        $data['price']=empty($data['price'])?'':$data['price'];
        $data['update_time'] = time();
        if($model->save($data)){
            $this->success('修改成功',U('Books/index'));
        }else{
            $this->error('修改失败');
        }
    }
}
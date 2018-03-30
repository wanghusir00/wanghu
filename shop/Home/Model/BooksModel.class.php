<?php
/**
 * Created by PhpStorm.
 * User: BMM_lenovo
 * Date: 2018/1/3
 * Time: 13:48
 */
namespace Home\Model;
use Think\Model;

class BooksModel extends Model{
    /*
     * 如果表名与模块名相同时tablename可以不定义；
     */
    protected $tableName = 'books';
    function _read_data($data){
        $data['status_text'] = $data['status']==0?'可卖':'不可卖';
        $data['create_time_text'] = empty($data['create_time'])?'':date('Y-m-d H:i:s',$data['create_time']);
        $data['update_time_text'] = empty($data['update_time'])?'':date('Y-m-d H:i:s',$data['update_time']);
        return $data;
    }
}
<?php

namespace app\common\model;
use think\Model;

/**
 * Description of User
 *
 * @author ZFeng
 */
class User extends Model{
    
    /**
     * 获取分页数据
     * @param type $where
     * @param type $page
     */
    public function getPage($where=[],$page=1,$field=true,$order="a.create_time desc"){
        $list = $this->alias('a')->field($field)->where($where)->where('a.status','neq',-1)->order($order)->paginate(10, false, ['page' => $page])->each(function(&$item){
            $item['create_time_text'] = date('Y-m-d  H:i',$item['create_time']);
        });
        return $list;
    }
    /**
     * 获取状态文本
     * @param type $status
     * @return string
     */
    public function getStatusText($status){
        $str = '';
        switch ($status){
            case -1:
                $str = '已删除';
                break;
            case 1:
                $str = '正常';
                break;
            case 2:
                $str = '禁用';
                break;
            default :
                $str = '状态异常';
                break;
        }
        return $str;
    }
    /**
     * 获取单值
     * @param type $where
     * @param type $field
     */
    public function getValue($where=[],$field='id'){
        return $this->where($where)->value($field);
    }
    /**
     * 获取列值
     * @param type $where
     * @param type $field
     * @return type
     */
    public function getColumn($where=[],$field='id'){
        return $this->where($where)->column($field);
    }
    /**
     * 获取单条记录
     */
    public function getInfo($where=[],$field=true){
        return $this->field($field)->where($where)->find()->toArray();
    }
    /**
     * 插入
     * @param type $info
     */
    public function insertInfo($info){
        $res = $this->allowField(TRUE)->save($info);
        if($res === false) return FALSE;
        $info['id'] = $this->id;
        return $info;
    }
    /**
     * 更新
     * @param type $info
     */
    public function updateInfo($where=[],$info){
        $res = $this->allowField(TRUE)->where($where)->update($info);
        return ($res === false)?false:true;
    }
    /**
     * 获取可用区域
     * @param type $where
     * @return type
     */
    public function getList($where=[],$field=true){
        return $this->field($field)->where($where)->select()->toArray();
    }
}

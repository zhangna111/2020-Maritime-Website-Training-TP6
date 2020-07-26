<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 19:52:11
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-26 11:21:43
 */

namespace app\controller\admin;

use app\model\Goods as ModelGoods;
use think\facade\View;
use think\Request;

class Goods
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $goods = ModelGoods::order('id', 'desc')->select();
        View::assign([
            'title' => 'Goods Management',
            'list_goods' => $goods
        ]);
        return View();
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $res = ModelGoods::destroy($id);

        return $res ? view('./public/message', [
            'msg_title' => 'Success',
            'list_infos' => ['删除成功'],
            'url_text' => 'Back to Goods List',
            'url_path' => '/dashboard/goods',
        ]) : '删除失败';

        // ajax 返回值
        // if ($res) {
        //     $result = [
        //         'code' => 200,
        //         'msg' => '删除成功'
        //     ];

        //     echo json_encode($result);
        // }
    }
}

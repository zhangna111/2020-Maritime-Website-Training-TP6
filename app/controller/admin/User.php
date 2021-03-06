<?php
/*
 * @Description: 
 * @version: V 1.0
 * @Author: Zoey Cheung
 * @Date: 2020-07-22 19:52:49
 * @LastEditors: Zoey Cheung
 * @LastEditTime: 2020-07-27 18:21:27
 */

declare(strict_types=1);

namespace app\controller\admin;

use app\model\User as ModelUser;
use think\facade\View;
use think\Request;

class User
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $users = ModelUser::order(['is_admin' => 'desc', 'id' => 'desc'])->select();

        View::assign([
            'title' => 'User Management',
            'list_users' => $users
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
        $res = ModelUser::destroy($id);

        return $res ? view('./public/message', [
            'msg_title' => 'Success',
            'list_infos' => ['删除成功'],
            'url_text' => 'Back to Goods List',
            'url_path' => '/dashboard/user',
        ]) : '删除失败';
    }
}

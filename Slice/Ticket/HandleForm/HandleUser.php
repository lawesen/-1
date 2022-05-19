<?php
/**
 * Copyright (c) 2022 PESCMS (http://www.pescms.com)
 *
 * For the full copyright and license information, please view
 * the file LICENSE.md that was distributed with this source code.
 */

namespace Slice\Ticket\HandleForm;

/**
 * 处理后台 用户添加/编辑提交过来的密码表单
 * @package Slice\Ticket
 */
class HandleUser extends \Core\Slice\Slice {

    public function before() {

        if (METHOD == 'POST') {
            $this->isP('password', '请填写密码');
        }

        if (empty($_POST['password'])) {
            $_POST['password'] = \Model\Content::findContent('user', $_POST['id'] ?? '', 'user_id')['user_password'] ?? '';
        } else {
            $account = $this->p('account');
            $_POST['password'] = (string)\Core\Func\CoreFunc::generatePwd($account.$this->p('password'));
        }


    }

    public function after() {
    }


}
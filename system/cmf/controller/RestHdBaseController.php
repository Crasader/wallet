<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace cmf\controller;

class RestHdBaseController extends RestBaseController
{



    public function _initialize()
    {

        if (empty($this->hd_user)) {
            $this->error(['code' => 10001, 'msg' => 'HD钱包登录状态已失效!']);
        }

    }


}
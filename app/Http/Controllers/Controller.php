<?php

namespace App\Http\Controllers;

use Ctx\Ctx;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @var Ctx
     */
    protected $ctx;
    /**
     * @var Request
     */
    protected $request;

    public function __construct(Request $request)
    {
        $this->ctx = Ctx::getInstance();
        $this->request = $request;
    }

    protected function success($data = [])
    {
        return response()->json([
            'code'      => 0,   //错误代码 0：正确，-1：服务器错误，1：请求错误
            'data'      => $data, //返回数据体
            'error'     => "",//返回消息
        ]);
    }
}

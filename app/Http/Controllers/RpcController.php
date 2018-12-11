<?php

namespace App\Http\Controllers;

class RpcController extends Controller
{
    public function index()
    {
        $agent = getenv('IM_RPC_USER_AGENT');
        $body = file_get_contents('php://input');

        return $this->ctx->Chat->handleNotification($agent, $body);
    }
}

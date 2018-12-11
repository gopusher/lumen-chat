<?php

namespace Ctx\Service\Chat\Child;

use Ctx\Basic\Ctx as BasicCtx;
use Gopusher\Sdk\Notification\Handler;
use Illuminate\Support\Facades\Log;

class NotificationHandler extends BasicCtx implements Handler
{
    public function checkToken($connId, $token, $nodeId)
    {
        Log::info('checkToken ' .$connId. $token. $nodeId);
    }

    public function online($connId, $nodeId)
    {
        Log::info('online ' .$connId. $nodeId);
    }

    public function offline($connId, $nodeId)
    {
        Log::info('offline ' .$connId. $nodeId);
    }

    public function joinCluster($nodeId)
    {
        Log::info('joinCluster ' . $nodeId);
    }
}

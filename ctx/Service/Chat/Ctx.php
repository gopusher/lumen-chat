<?php

namespace Ctx\Service\Chat;

use Ctx\Basic\Ctx as BasicCtx;

/**
 * 模块接口声明文件
 * 备注：文件命名跟模块中的其他类不同，因为模块入口类只能被实例化一次
 * 也就是只能用ctx->模块 来实例化，不能用loadC来实例化更多
 */
class Ctx extends BasicCtx
{
    public function handleNotification($agent, $body)
    {
        $notification = new \Gopusher\Sdk\Notification\Notification($agent);

        /** @var \Ctx\Service\Chat\Child\NotificationHandler $notificationHandler */
        $notificationHandler = $this->loadC('NotificationHandler');
        $notification->registerHandler($notificationHandler);

        return $notification->handleAndResponse($_SERVER['HTTP_USER_AGENT'], $body);
    }
}

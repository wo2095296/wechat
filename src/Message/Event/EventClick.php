<?php

namespace Thenbsp\Wechat\Message\Event;

use Thenbsp\Wechat\Message\Event;

class EventClick extends Event
{
    /**
     * 构造方法
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
    }

    /**
     * 配置参数
     */
    protected function configureOptions($resolver)
    {
        $options = array('ToUserName', 'FromUserName', 'CreateTime', 'MsgType', 'Event', 'EventKey');

        $resolver
            ->setDefined($options)
            ->setRequired($options);
    }
}

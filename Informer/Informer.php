<?php

namespace CoG\StupidMQBundle\Informer;

use CoG\StupidMQBundle\QueueAware\QueueAwareAbstract;

class Informer extends QueueAwareAbstract implements InformerInterface
{
    public function __construct()
    {
        $this->queues = array();
    }

    /**
     * @inheritdoc
     */
    public function getMessages($queue_name, array $ids)
    {
        $queue = $this->getQueue($queue_name);
        return $queue->findAll($ids);
    }
}
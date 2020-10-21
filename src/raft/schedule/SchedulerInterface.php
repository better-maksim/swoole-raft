<?php

declare(strict_types=1);

namespace raft\schedule;

interface SchedulerInterface {
    //创建超时定时器
    public function createElectionTimeout(callable $func);
    //关闭定时器
    public function stop();
    //创建日志任务定时器
    public function createLogReplicationTask(callable $func);
}
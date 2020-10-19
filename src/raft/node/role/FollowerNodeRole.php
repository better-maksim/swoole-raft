<?php

declare(strict_types=1);

namespace raft\node\role;

use raft\node\NodeId;
use Swoole\Timer;

class FollowerNodeRole extends AbstractNodeRole
{
    private $votedFor; //投票的节点
    private $leaderId; //当前leader节点ID，有可能为空
    /**
     * @var Timer
     */
    private $electionTime; //选举超时

    public function __construct(int $term, NodeId $votedFor, NodeId $leaderId, Timer $electionTime)
    {
        parent::__construct(RoleName::FOLLOWER, $term);
        $this->votedFor = $votedFor;
        $this->electionTime = $electionTime;
    }

    /**
     * 获取投过票的节点
     * @return NodeId
     */
    public function getVotedFor()
    {
        return $this->votedFor;
    }

    public function getLeaderId()
    {
        return $this->leaderId;
    }

    public function cancelTimeOrTask()
    {
        Timer::clear($this->electionTime->id);
    }
}
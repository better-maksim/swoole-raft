<?php

declare(strict_types=1);

namespace raft\node;

/**
 * 集群成员表
 * Class NodeGroup
 * @package raft\node
 */
class NodeGroup
{
    /**
     * @var NodeId
     */
    private $selfId;

    private $memberMap = [];

    private function findMember(NodeId $nodeId)
    {
        $this->memberMap[$nodeId->getValue()];
    }

}
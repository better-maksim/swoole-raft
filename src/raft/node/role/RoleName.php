<?php

declare(strict_types=1);

namespace raft\node\role;

class RoleName extends \SplEnum
{
    const FOLLOWER = 1;
    const CANDIDATE = 2;
    const LEADER = 3;
}
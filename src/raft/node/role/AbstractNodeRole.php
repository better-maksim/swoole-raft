<?php

declare(strict_types=1);

namespace raft\node\role;

abstract class AbstractNodeRole
{
    /**
     * @var int
     */
    private $name;
    /**
     * @var int
     */
    protected $term;

    public function __construct(int $name, int $term)
    {
        $this->name = $name;
        $this->term = $term;
    }
}


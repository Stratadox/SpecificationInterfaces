<?php

namespace Stratadox\Specification\Contract;

interface Satisfiable
{
    /**
     * Checks an object against the condition
     *
     * @param mixed $object The object that may or may not satisfy
     * @return bool         Whether the object is satisfying
     */
    public function isSatisfiedBy($object) : bool;
}

<?php

namespace Stratadox\Specification\Contract;

interface Specifies extends Satisfiable
{
    /**
     * Negates (inverses) the condition
     * @return Specifies that the condition must not be satisfied
     */
    public function not() : Specifies;

    /**
     * Adds a required condition
     * @param Satisfiable $condition that must also be satisfied
     * @return Specifies that both conditions must be satisfied
     */
    public function and(Satisfiable $condition) : Specifies;

    /**
     * Adds an alternative condition
     * @param Satisfiable $alternative that would also suffice
     * @return Specifies that at least one of both conditions must be satisfied
     */
    public function or(Satisfiable $alternative) : Specifies;

    /**
     * Adds a condition which must ave the opposite outcome of this one
     * @param Satisfiable $condition that must have the opposite result
     * @return Specifies that exactly one of both conditions must be satisfied
     */
    public function xor(Satisfiable $condition) : Specifies;

    /**
     * Adds a condition and negates both, ie. neither this nor the other
     * @param Satisfiable $condition that may not pass either
     * @return Specifies that neither conditions may be satisfied
     */
    public function nor(Satisfiable $condition) : Specifies;

    /**
     * Adds the negated version of a condition
     * @param Satisfiable $condition that must not be satisfied
     * @return Specifies that the first condition must be satisfied while the other may not
     */
    public function andNot(Satisfiable $condition) : Specifies;

    /**
     * Adds the negated version of a condition (alias of @see andNot)
     * @param Satisfiable $condition that must not be satisfied
     * @return Specifies that the first condition must be satisfied while the other may not
     */
    public function butNot(Satisfiable $condition) : Specifies;

    /**
     * Adds the negated version of a condition as alternative
     * @param Satisfiable $condition whose failure would make up for this one's
     * @return Specifies that the first condition must be satisfied, or the second unsatisfied
     */
    public function orNot(Satisfiable $condition) : Specifies;
}

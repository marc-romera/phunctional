<?php

declare(strict_types = 1);

namespace Lambdish\Phunctional;

/**
 * Check if all the values of the collection satisfies the function
 *
 * @template T
 * @template TKey of array-key
 *
 * @param callable(T,TKey):mixed $fn   function to check if the predicate is true. response evaluated as truthy/falsy
 * @param iterable<TKey,T>       $coll collection of values to check all are true by the `$fn`
 *
 * @since 0.1
 */
function all(callable $fn, iterable $coll): bool
{
    return !some(not($fn), $coll);
}

const all = '\Lambdish\Phunctional\all';

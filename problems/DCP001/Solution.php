<?php

/**
 * Solution with O(n) and space 2n
 * @param array $integerList
 * @param int $k
 * @return bool
 */
function checkTwoNumbersAddUp(array $integerList, int $k): bool
{
    $pointers = [];
    foreach ($integerList as $integer) {
        $rest = $k - $integer;
        if (isset($pointers[$rest])) {
            return true;
        }
        $pointers[$integer] = true;
    }
    return false;
}

describe('DCP001', function () {
    it('check two numbers add up', function () {
        $result = checkTwoNumbersAddUp([1, 2, 3, 4, 5], 3);
        expect($result)->toBe(true);
    });
    it('check return false', function () {
        $result = checkTwoNumbersAddUp([1, 2, 3, 4, 5], 17);
        expect($result)->toBe(false);
    });
});

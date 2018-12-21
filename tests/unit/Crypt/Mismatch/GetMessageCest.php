<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Crypt\Mismatch;

use UnitTester;

class GetMessageCest
{
    /**
     * Tests Phalcon\Crypt\Mismatch :: getMessage()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cryptMismatchGetMessage(UnitTester $I)
    {
        $I->wantToTest("Crypt\Mismatch - getMessage()");
        $I->skipTest("Need implementation");
    }
}

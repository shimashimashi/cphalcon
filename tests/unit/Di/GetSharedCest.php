<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Di;

use UnitTester;

class GetSharedCest
{
    /**
     * Tests Phalcon\Di :: getShared()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function diGetShared(UnitTester $I)
    {
        $I->wantToTest("Di - getShared()");
        $I->skipTest("Need implementation");
    }
}

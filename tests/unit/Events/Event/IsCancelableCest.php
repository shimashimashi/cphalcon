<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Events\Event;

use UnitTester;

class IsCancelableCest
{
    /**
     * Tests Phalcon\Events\Event :: isCancelable()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function eventsEventIsCancelable(UnitTester $I)
    {
        $I->wantToTest("Events\Event - isCancelable()");
        $I->skipTest("Need implementation");
    }
}

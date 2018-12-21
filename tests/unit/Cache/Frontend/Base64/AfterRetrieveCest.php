<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Frontend\Base64;

use UnitTester;

class AfterRetrieveCest
{
    /**
     * Tests Phalcon\Cache\Frontend\Base64 :: afterRetrieve()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheFrontendBase64AfterRetrieve(UnitTester $I)
    {
        $I->wantToTest("Cache\Frontend\Base64 - afterRetrieve()");
        $I->skipTest("Need implementation");
    }
}

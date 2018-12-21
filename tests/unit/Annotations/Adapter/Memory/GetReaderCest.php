<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Annotations\Adapter\Memory;

use UnitTester;

/**
 * Class GetReaderCest
 *
 * @package Phalcon\Test\Unit\Annotations\Adapter\Memory
 */
class GetReaderCest
{
    /**
     * Tests Phalcon\Annotations\Adapter\Memory :: getReader()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function annotationsAdapterMemoryGetReader(UnitTester $I)
    {
        $I->wantToTest("Annotations\Adapter\Memory - getReader()");
        $I->skipTest("Need implementation");
    }
}

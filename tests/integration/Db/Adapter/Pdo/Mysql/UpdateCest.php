<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Db\Adapter\Pdo\Mysql;

use IntegrationTester;

class UpdateCest
{
    /**
     * Tests Phalcon\Db\Adapter\Pdo\Mysql :: update()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function dbAdapterPdoMysqlUpdate(IntegrationTester $I)
    {
        $I->wantToTest("Db\Adapter\Pdo\Mysql - update()");
        $I->skipTest("Need implementation");
    }
}

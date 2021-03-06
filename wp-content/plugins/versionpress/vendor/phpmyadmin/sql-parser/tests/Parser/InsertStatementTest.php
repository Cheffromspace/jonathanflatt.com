<?php

namespace SqlParser\Tests\Parser;

use SqlParser\Tests\TestCase;

class InsertStatementTest extends TestCase
{

    /**
     * @dataProvider testInsertProvider
     */
    public function testInsert($test)
    {
        $this->runParserTest($test);
    }

    public function testInsertProvider()
    {
        return array(
            array('parser/parseInsert'),
            array('parser/parseInsertSelect'),
            array('parser/parseInsertOnDuplicateKey'),
            array('parser/parseInsertSetOnDuplicateKey'),
            array('parser/parseInsertSelectOnDuplicateKey'),
            array('parser/parseInsertOnDuplicateKeyErr'),
            array('parser/parseInsertErr'),
            array('parser/parseInsertErr2'),
            array('parser/parseInsertIntoErr'),
        );
    }
}

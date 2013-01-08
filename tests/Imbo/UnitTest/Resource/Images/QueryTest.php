<?php
/**
 * This file is part of the Imbo package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

namespace Imbo\UnitTest\Resource\Images;

use Imbo\Resource\Images\Query;

/**
 * @package TestSuite\UnitTests
 * @author Christer Edvartsen <cogo@starzinger.net>
 * @covers Imbo\Resource\Images\Query
 */
class QueryTest extends \PHPUnit_Framework_TestCase {
    /**
     * @var Query
     */
    private $query;

    /**
     * Set up the query
     */
    public function setUp() {
        $this->query = new Query();
    }

    /**
     * Tear down the query
     */
    public function tearDown() {
        $this->query = null;
    }

    /**
     * @covers Imbo\Resource\Images\Query::page
     */
    public function testPage() {
        $value = 2;
        $this->assertSame(1, $this->query->page());
        $this->assertSame($this->query, $this->query->page($value));
        $this->assertSame($value, $this->query->page());
    }

    /**
     * @covers Imbo\Resource\Images\Query::limit
     */
    public function testLimit() {
        $value = 30;
        $this->assertSame(20, $this->query->limit());
        $this->assertSame($this->query, $this->query->limit($value));
        $this->assertSame($value, $this->query->limit());
    }

    /**
     * @covers Imbo\Resource\Images\Query::returnMetadata
     */
    public function testReturnMetadata() {
        $this->assertFalse($this->query->returnMetadata());
        $this->assertSame($this->query, $this->query->returnMetadata(true));
        $this->assertTrue($this->query->returnMetadata());
    }

    /**
     * @covers Imbo\Resource\Images\Query::metadataQuery
     */
    public function testMetadataQuery() {
        $value = array('category' => 'some category');
        $this->assertSame(array(), $this->query->metadataQuery());
        $this->assertSame($this->query, $this->query->metadataQuery($value));
        $this->assertSame($value, $this->query->metadataQuery());
    }

    /**
     * @covers Imbo\Resource\Images\Query::from
     */
    public function testFrom() {
        $value = 123123123;
        $this->assertNull($this->query->from());
        $this->assertSame($this->query, $this->query->from($value));
        $this->assertSame($value, $this->query->from());
    }

    /**
     * @covers Imbo\Resource\Images\Query::to
     */
    public function testTo() {
        $value = 123123123;
        $this->assertNull($this->query->to());
        $this->assertSame($this->query, $this->query->to($value));
        $this->assertSame($value, $this->query->to());
    }
}

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ThingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ThingsTable Test Case
 */
class ThingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ThingsTable
     */
    public $Things;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.things'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Things') ? [] : ['className' => ThingsTable::class];
        $this->Things = TableRegistry::get('Things', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Things);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

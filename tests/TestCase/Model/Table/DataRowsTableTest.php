<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DataRowsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DataRowsTable Test Case
 */
class DataRowsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DataRowsTable
     */
    public $DataRows;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.data_rows',
        'app.data_sheets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DataRows') ? [] : ['className' => DataRowsTable::class];
        $this->DataRows = TableRegistry::getTableLocator()->get('DataRows', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DataRows);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

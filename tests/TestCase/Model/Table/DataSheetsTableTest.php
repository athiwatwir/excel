<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatasheetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatasheetsTable Test Case
 */
class DatasheetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DatasheetsTable
     */
    public $Datasheets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.datasheets',
        'app.datas',
        'app.data_rows'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Datasheets') ? [] : ['className' => DatasheetsTable::class];
        $this->Datasheets = TableRegistry::getTableLocator()->get('Datasheets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Datasheets);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

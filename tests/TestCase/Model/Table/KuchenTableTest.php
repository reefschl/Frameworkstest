<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KuchenTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KuchenTable Test Case
 */
class KuchenTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KuchenTable
     */
    protected $Kuchen;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Kuchen',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Kuchen') ? [] : ['className' => KuchenTable::class];
        $this->Kuchen = $this->getTableLocator()->get('Kuchen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Kuchen);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RoomsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RoomsController Test Case
 */
class RoomsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rooms',
        'app.events',
        'app.contacts',
        'app.honoraria',
        'app.committees',
        // 'app.fulfills_prerequisites',
        // 'app.requires_prerequisites',
        // 'app.part_ofs',
        // 'app.copy_ofs',
        'app.categories',
        'app.categories_events',
        'app.tools',
        'app.events_tools'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

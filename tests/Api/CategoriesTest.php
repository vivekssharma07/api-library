<?php
namespace Leadsengage\Tests\Api;

class CategoriesTest extends LeadsengageApiTestCase
{
    public function setUp() {
        $this->api = $this->getContext('categories');
        $this->testPayload = array(
            'title' => 'test',
            'bundle' => 'asset'
        );
    }

    public function testGetList()
    {
        $this->standardTestGetList();
    }

    public function testGetListOfSpecificIds()
    {
        $this->standardTestGetListOfSpecificIds();
    }

    public function testCreateGetAndDelete()
    {
        $this->standardTestCreateGetAndDelete();
    }

    public function testEditPatch()
    {
        $editTo = array(
            'title' => 'test2',
            'bundle' => 'asset'
        );
        $this->standardTestEditPatch($editTo);
    }

    public function testEditPut()
    {
        $this->standardTestEditPut();
    }

    public function testBatchEndpoints()
    {
        $this->standardTestBatchEndpoints();
    }
}

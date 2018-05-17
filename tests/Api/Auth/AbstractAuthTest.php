<?php
namespace Leadsengage\Tests\Api\Auth;

use Leadsengage\Auth\AbstractAuth;
use Leadsengage\Exception\UnexpectedResponseFormatException;

class AbstractAuthTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $this->config = include __DIR__.'/../../local.config.php';
    }

    public function test404Response()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        $this->expectException(UnexpectedResponseFormatException::class);
        $auth->makeRequest('https://github.com/mautic/api-library/this-page-does-not-exist');
    }

    public function testHtmlResponse()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        $this->expectException(UnexpectedResponseFormatException::class);
        $auth->makeRequest($this->config['baseUrl']);
    }

    public function testJsonResponse()
    {
        $auth = $this->getMockForAbstractClass(AbstractAuth::class);
        $response = $auth->makeRequest($this->config['apiUrl'].'contacts');
        $this->assertTrue(is_array($response));
        $this->assertFalse(empty($response));
    }
}

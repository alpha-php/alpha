<?php
namespace Alpha\Tests;

require_once __DIR__.'/../core/Autoloader.php';

use Alpha\Core\Config;

/**
 * Test case for Autoloader.
 */
class AutoloaderTestCase extends \Alpha\Core\TestCaseAbstract
{
    /**
     * Constructs an AutoloaderTestCase.
     */
    public function __construct()
    {
        parent::__construct('AutoloaderTestCase');
    }

    /**
     * Tests getNameOfFileFromClassName method.
     * 
     * @return void
     */
    public function testGetNameOfFileFromClassName_ProjectFolderExists_ShouldReturnPathWithProjectFolder()
    {
        $autoloader = new \Alpha\Core\Autoloader('Tmp', '/tmp');
        $expected   = Config::getRootPath() .'/tmp/Xpto.php';
        $this->assertEquals($expected, $autoloader->getNameOfFileFromClassName('Tmp\Xpto'));
    }
}


<?php 

// Always declare a strict_types=1 on top of your application code.

declare(strict_types=1);

// Import dependencies

use \PHPUnit\Framework\TestCase;
use \App;

/**
 * Unit Test Case
 */

final class EmailTest extends TestCase
{

    /**
     * Application class test
     *
     * @return void
     */

    public function testIfApplicationIsInstanciated(): void
    {

        $app = new App();
        $this->assertInstanceOf(app::class, $app, "app is not of type App");

    }

    // Other tests for this case
}
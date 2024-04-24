<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Http\Controllers\API\SlackController;
use Illuminate\Support\Facades\Facade;
class SlackMessageTest extends TestCase
{
    public function testIndexSendsMessageToSlack()
    {// Create an instance of the controller
        $controller = new SlackController();

        // Call the index method
        $response = $controller->index();

        // Assert that the returned response is correct
        $this->assertEquals('Hi Slack, from the API', $response);

    }
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}

<?php

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->get('/');
        
        if ($this->response->getStatusCode() !== 200) {
            echo $this->response->getContent();
        }
        
        $this->assertEquals(200, $this->response->getStatusCode());
        $this->assertStringContainsString('Compass', $this->response->getContent());
    }
}

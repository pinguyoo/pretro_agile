<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NewCommentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testSubmitSuccess()
    {
        $this->visit('/new-comment')
             ->select('Good', 'commentType')
             ->type('I think the planning poker is good way for sprint meeting ...', 'content')
             ->press('Submit')
             ->seePageIs('/dashboard');
    }
}

<?php

namespace Tests\Feature;

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;

class NewCommentTest extends DuskTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSubmitSuccess()
    {
        $this->browse(function ($browser) {
          $browser->visit('http://127.0.0.1:8000/new-comment')
                  ->select('commentType', 'Good')
                  ->type('commentContent', 'I think the planning poker is good way for sprint meeting ...')
                  ->press('submit')
                  ->assertPathIs('/new-comment');
          });
    }
}

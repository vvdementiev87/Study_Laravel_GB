<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Routing\Route;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsForm extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function testEditNews(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('admin.news.edit',['news'=>3]))
                ->type('title','ExampleTest')
                ->press('Сохранить')
                ->assertPathIs(\route('admin.news.update'));        });
    }
}

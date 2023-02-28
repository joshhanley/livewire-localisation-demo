<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class DutchLocaleTest extends DuskTestCase
{
    /** @test */
    public function it_works_on_home_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('de')

                ->assertPathIs('/de')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/de')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_translated_welcome_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('de/willkommen')

                ->assertPathIs('/de/willkommen')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/de/willkommen')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_entertainment_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('de/entertainment')

                ->assertPathIs('/de/entertainment')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/de/entertainment')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_demo_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('de/demo')

                ->assertPathIs('/de/demo')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/de/demo')
                ->assertSeeIn('@locale', 'de')
                ->assertSeeIn('@count', 1)
            ;
        });
    }
}

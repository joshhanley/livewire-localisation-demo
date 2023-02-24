<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class EnglishLocaleTest extends DuskTestCase
{
    /** @test */
    public function it_works_on_home_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('en')

                ->assertPathIs('/en')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/en')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_translated_welcome_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('en/welcome')

                ->assertPathIs('/en/welcome')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/en/welcome')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_entertainment_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('en/entertainment')

                ->assertPathIs('/en/entertainment')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/en/entertainment')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_demo_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => false])
                ->visit('en/demo')

                ->assertPathIs('/en/demo')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/en/demo')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }
}

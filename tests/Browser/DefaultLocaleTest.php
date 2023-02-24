<?php

namespace Tests\Browser;

use Tests\DuskTestCase;

class DefaultLocaleTest extends DuskTestCase
{
    /** @test */
    public function it_works_on_home_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => true])
                ->visit('/')

                ->assertPathIs('/')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_translated_welcome_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => true])
                ->visit('welcome')

                ->assertPathIs('/welcome')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/welcome')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_entertainment_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => true])
                ->visit('entertainment')

                ->assertPathIs('/entertainment')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/entertainment')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }

    /** @test */
    public function it_works_on_demo_route(): void
    {
        $this->browse(function (BrowserOverride $browser) {
            $browser->withConfig(['laravellocalization.hideDefaultLocaleInURL' => true])
                ->visit('demo')

                ->assertPathIs('/demo')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 0)

                ->waitForLivewire()->click('@increaseCount')

                ->assertPathIs('/demo')
                ->assertSeeIn('@locale', 'en')
                ->assertSeeIn('@count', 1)
            ;
        });
    }
}

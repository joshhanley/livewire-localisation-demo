<div>
    <div>
        Locale: <span dusk="locale">{{ App::getLocale() }}</span>.
    </div>

    <div>
        Count: <span dusk="count">{{ $count }}</span>
    </div>

    <button type="button" wire:click="increaseCount" dusk="increaseCount">
        increaseCount()
    </button>
</div>

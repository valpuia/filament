<?php

use Filament\Panel;
use Filament\Tests\TestCase;

uses(TestCase::class);

it('enables the topbar and disables `topbarOnMobile()` by default', function (): void {
    $panel = Panel::make();

    expect($panel->hasTopbar())->toBeTrue();
    expect($panel->hasTopbarOnMobile())->toBeFalse();
});

it('can disable the topbar using `topbar()`', function (): void {
    $panel = Panel::make()->topbar(false);

    expect($panel->hasTopbar())->toBeFalse();
});

it('can enable `topbarOnMobile()` to show the topbar logo on mobile', function (): void {
    $panel = Panel::make()->topbarOnMobile();

    expect($panel->hasTopbarOnMobile())->toBeTrue();
});

it('can disable `topbarOnMobile()` by passing `false`', function (): void {
    $panel = Panel::make()->topbarOnMobile(false);

    expect($panel->hasTopbarOnMobile())->toBeFalse();
});

it('can use a `Closure` to control the topbar', function (): void {
    $panel = Panel::make()->topbar(fn (): bool => false);

    expect($panel->hasTopbar())->toBeFalse();
});

it('can use a `Closure` to control `topbarOnMobile()`', function (): void {
    $panel = Panel::make()->topbarOnMobile(fn (): bool => true);

    expect($panel->hasTopbarOnMobile())->toBeTrue();
});

<?php

namespace AingSh\Alexander\PackageHillelGeoTest;
/**
 * Test1231423
 */
interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;

}


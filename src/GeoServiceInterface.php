<?php

namespace AingSh\Alexander\PackageHillelGeoTest;
/**
 * @Package AingSh\Alexander\PackageHillelGeoTest v2.0.0 =)
 */
interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;

}


<?php

namespace AingSh\Alexander\PackageHillelGeoTest;
/**
 * adasdsad
 */
interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;

}


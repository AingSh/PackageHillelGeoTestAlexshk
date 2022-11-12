<?php

namespace AingSh\Alexander\PackageHillelGeoTest;
/**
 * ebat eto test i on rabotaet
 */
interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;

}


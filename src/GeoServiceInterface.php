<?php

namespace Alexander\PackageHillelGeoTest;

interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;

}


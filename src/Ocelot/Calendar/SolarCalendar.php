<?php

namespace Ocelot\Ocelot\Calendar;

use Ocelot\Ocelot\Calendar\Gregorian\DateTime;
use Ocelot\Ocelot\Calendar\Gregorian\Day;
use Ocelot\Ocelot\Calendar\Gregorian\Month;
use Ocelot\Ocelot\Calendar\Gregorian\Year;

interface SolarCalendar
{
    public function year() : Year;

    public function month() : Month;

    public function day() : Day;

    public function now() : DateTime;
}
<?php

namespace AnvarUlugov\Validate;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Validate
{
    public function __construct() {}
}

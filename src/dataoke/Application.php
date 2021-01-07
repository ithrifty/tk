<?php
namespace Ithrifty\dataoke;
use Hanson\Foundation\Foundation;

class Application extends Foundation
{
    /**
     * @var array
     */
    protected $providers = [
        ServiceProvider::class,
    ];
}
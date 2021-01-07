<?php
namespace Ithrifty\dataoke;

use Hanson\Foundation\Foundation;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple) {
        return new Api($pimple, true);
    }
}
<?php
declare(strict_types=1);

namespace TopdrinkHyperf\Apollo;


use Hyperf\ConfigApollo\ClientInterface;
use Psr\Container\ContainerInterface;

class Client
{
    public function __construct(ContainerInterface $container)
    {
        
    }

    public function parallelPull($namespaces){
        echo 123;
        $config = $this->client->parallelPull($namespaces);
    }
}
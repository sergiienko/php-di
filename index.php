<?php

require __DIR__ . '/vendor/autoload.php';

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    Acme\CustomerSessionInterface::class => DI\object(Acme\CustomerSession::class),
    Acme\CustomerFactory::class => \DI\object()->constructorParameter('customerClassName', \Acme\Customer::class),
    Acme\ProviderInterface::class => Di\object(Acme\CrmProvider::class),
]);
$container = $builder->build();

$customerFactory = $container->get(Acme\CustomerFactory::class);
$customer = $customerFactory->create(['firstname' => 'John']);

var_dump($customer);


$persistenceLayer = $container->get(Acme\PersistenceLayer::class);

$persistenceLayer->update('user');

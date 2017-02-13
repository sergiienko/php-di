<?php

namespace Acme;

class PersistenceLayer
{
    private $provider;

    public function __construct(ProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    public function update($model)
    {
        $this->provider->update($model);
    }
}

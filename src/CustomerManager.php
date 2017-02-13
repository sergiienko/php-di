<?php

namespace Acme;

class CustomerManager
{
    protected $session;

    public function __construct(CustomerSessionInterface $session)
    {
        $this->session = $session;
    }
}

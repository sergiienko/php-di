<?php

namespace Acme;

return [

];

class CustomerFactory
{
    private $customerClassName;

    public function __construct($customerClassName)
    {
        if (! class_exists($customerClassName)) {
            throw new \Exception("Customer class has not been set.");
        }

        $this->customerClassName = $customerClassName;
    }

    public function create($initialData = [])
    {
        return new $this->customerClassName($initialData);
    }
}

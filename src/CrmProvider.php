<?php

namespace Acme;

class CrmProvider implements ProviderInterface
{
    public function update($data)
    {
        echo 'sending POST to url';
    }
}

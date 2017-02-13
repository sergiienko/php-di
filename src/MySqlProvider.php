<?php

namespace Acme;

class MySqlProvider implements ProviderInterface
{
    public function update($data)
    {
        echo 'UPDATE ... SET';
    }
}

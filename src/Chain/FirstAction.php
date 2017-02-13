<?php

namespace Acme\Chain;


class FirstAction extends ChainLink implements ChainLinkInterface
{
    protected function getDataFor($key)
    {
        return $this->doSomeActionOnOurKeyVariable($key);
    }

    private function doSomeActionOnOurKeyVariable($key)
    {
        echo 'Doing some action on our key variable';

        return $key . ' modified';
    }
}
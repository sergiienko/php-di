<?php

namespace Acme\Chain;

interface ChainLinkInterface
{
    // function getDataFor($key);
    function append(ChainLinkInterface $nextLink);
    function get(Transport $transport);
    function process(Transport $transport);
}

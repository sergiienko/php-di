<?php

namespace Acme\Chain;

abstract class ChainLink
{
    protected $nextLink;
    protected $result;
    protected $data;

    public function __construct(ChainLinkInterface $nextLink)
    {
        $this->nextLink = $nextLink;
    }

    abstract protected function getDataFor($transport);

    public function get(Transport $transport)
    {
        $value = $this->getDataFor($transport->getKey());

        if (!empty($value)) {
            $this->result->setResult($value);
        }

        if (empty($value) && $this->nextLink) {
            $this->nextLink->get($transport->getKey());
        }

        return $this->result->getResult();
    }
}

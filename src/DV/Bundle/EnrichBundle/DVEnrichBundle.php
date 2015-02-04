<?php

namespace DV\Bundle\EnrichBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DVEnrichBundle extends Bundle
{
    public function getParent()
    {
        return 'PimEnrichBundle';
    }
}

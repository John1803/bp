<?php

namespace DV\Bundle\CatalogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DVCatalogBundle extends Bundle
{
    public function getParent()
    {
        return 'PimCatalogBundle';
    }
}

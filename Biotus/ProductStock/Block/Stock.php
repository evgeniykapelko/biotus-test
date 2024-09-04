<?php

namespace Biotus\ProductStock\Block;

use Magento\Catalog\Block\Product\View;

class Stock extends View
{
    public function getUpdateStockUrl(): string {
        return $this->getUrl('productstock/stock/get');
    }

    public function getIdentities()
    {
        $product = $this->getProduct();

        return ['p_s_' . $product->getId()];
    }
}

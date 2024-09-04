<?php

namespace Biotus\ProductStock\Controller\Stock;

use Magento\CatalogInventory\Model\Stock\StockItemRepository;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

use Magento\Framework\Controller\ResultFactory;

class Get extends Action
{
    public function __construct(
        private Context $context,
        private StockItemRepository $stockItemRepository,
    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $stockItem = $this->stockItemRepository->get(
            $this->getRequest()->getParam('id')
        );

        return $result->setData(['qty' => $stockItem->getQty()]);
    }
}

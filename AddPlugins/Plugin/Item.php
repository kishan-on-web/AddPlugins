<?php

namespace KK\AddPlugins\Plugin;

class Item
{
    public function afterGetProduct(\Magento\Quote\Model\Quote\Item $subject, $product)
    {
        // Check if the product is not null
        if ($product !== null) {
            $originalName = $product->getName();
            $modifiedName = $originalName . '(Modified)';
            $product->setName($modifiedName);
        }

        return $product;
    }
}

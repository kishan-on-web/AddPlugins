<?php

namespace KK\AddPlugins\Plugin;

class Cart
{
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    )
    {
        $productInfo['price'] += 15;
        $requestInfo['qty'] = 30;
        return array($productInfo, $requestInfo);
    }
}

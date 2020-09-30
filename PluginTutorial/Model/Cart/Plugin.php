<?php

namespace Learning\PluginTutorial\Model\Cart;
class Plugin
{
    
   public function afterAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ){
        $requestInfo['price'] = $requestInfo['price'] + 50;
         // increasing quantity to 5
        return array($productInfo, $requestInfo);
    }
}
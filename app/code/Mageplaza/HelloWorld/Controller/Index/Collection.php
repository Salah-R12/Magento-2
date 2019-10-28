<?php
namespace Mageplaza\HelloWorld\Block;
class Collection extends \Magento\Framework\View\Element\Template
{
    //http://127.0.0.1/magento2/helloworld/index/collection
    public function execute()
    {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\CollectionFactory')
            ->setPageSize(10,1);
        $output = '';
        foreach ($productCollection as $product) {
            $output.=\Zend_Debug::dump($product->debug(),null,
                false);
        }
        $this->getResponse()->setBody($output);
    }
}
<?php
namespace Mageplaza\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Mageplaza\HelloWorld\Model\PostFactory $postFactory)
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
       // $post = $this->_postFactory->create();
        $dataInsert = $this->_objectManager->create('Mageplaza\HelloWorld\Model\Post');
        $dataInsert->setName('aaaaaaa');
        $dataInsert->save();
        $this->getResponse()->setBody('success');
        return $this->_pageFactory->create();
    }
}
<?php
namespace Mageplaza\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Paul Dupond');
        $contact->save();

        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Paul Ricard');
        $contact->save();

        $contact = $this->_objectManager->create('Pfay\Contacts\Model\Contact');
        $contact->setName('Jack Daniels');
        $contact->save();
        die('test');
    }
}

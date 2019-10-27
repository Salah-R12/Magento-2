<?php

namespace Mageplaza\HelloWorld\Setup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
//il faut rajouter ce fichier pour cette partie
/**
 * Contact Resource Model Collection
 *
 * @author      Pierre FAY
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('HelloWorld\Model', 'HelloWorld\Model\ResourceModel');
    }
}

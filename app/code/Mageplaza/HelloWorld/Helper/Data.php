<?php

namespace Mageplaza\HelloWorld\Helper;

use Magento\Framework\HTTP\Client\Curl;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_curl;
    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        Curl $curl
    ) {
        parent::__construct($context);
        $this->_curl = $curl;
    }


    /**
     * Get color details ( id, name, year, color,pantone_value )
     * return Json Param
     **/
    public function getColorsDetails()
    {
        $uri = 'https://reqres.in/api/unknown';
        $JsonResult = $this->_curl->get($uri);
       return $JsonResult;
    }
}
<?php

namespace RH\UiExample\Model;

use Magento\Framework\Model\AbstractModel;
use RH\UiExample\Model\ResourceModel\Blog as BlogResourceModel;

class Blog extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(BlogResourceModel::class);
    }
}

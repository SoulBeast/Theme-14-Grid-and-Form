<?php

namespace Perspective\Theme14Helloworld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'perspective_helloworld_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {

        $this->_init('Perspective\Theme14Helloworld\Model\Post', 'Perspective\Theme14Helloworld\Model\ResourceModel\Post');
    }
}

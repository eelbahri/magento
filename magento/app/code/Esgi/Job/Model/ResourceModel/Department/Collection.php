<?php
namespace Esgi\Job\Model\ResourceModel\Department;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    protected $_idFieldName = 'entity_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Esgi\Job\Model\Department', 'Esgi\Job\Model\ResourceModel\Department');
    }

}
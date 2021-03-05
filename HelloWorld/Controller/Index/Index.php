<?php
namespace Perspective\HelloWorld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_postFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Perspective\HelloWorld\Model\PostFactory $postFactory
    )
    {
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_postFactory->create();
        $collection = $resultPage->getCollection()
            ->addFieldToSelect(
                [
                    'Category',
                    'name',
                    'url_key',
                    'tags',
                    'created_at'
                ]
            )->addFieldToFilter('Category',  'Обувь');
        echo '<pre>';
        print_r($collection->getData());
        echo '</pre>';
    }
}

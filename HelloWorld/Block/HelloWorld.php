<?php

namespace Perspective\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $_productRepository;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ProductRepository $productRepository,
        array $data = []
    )
    {
        $this->_productRepository = $productRepository;
        parent::__construct($context, $data);
    }

}

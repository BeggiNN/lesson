<?php


namespace Perspective\HelloWorld\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements  UpgradeDataInterface
{
    protected $_postFactory;

    public function __construct(\Perspective\HelloWorld\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.1.2', '<')) {
            $data = [
                'name'         => "Пицца",
                'post_content' => "італійська національна страва, а саме, корж зазвичай круглої форми, який покривається томатною пастою та сиром і запікається.",
                'url_key'      => '/magento-2-module-development/magento-2-events.html',
                'tags'         => 'magento 2,pizza',
                'status'       => 1,
                'Category'     => 'Еда'
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
        if (version_compare($context->getVersion(), '1.1.2', '<')) {
            $data = [
                'name'         => "Кроссовки",
                'post_content' => "Кросівки пройшли довгий шлях, до того вигляду в якому ми зараз їх бачимо",
                'url_key'      => '/magento-2-module-development/magento-2-events.html',
                'tags'         => 'magento 2,cross helloworld',
                'status'       => 2,
                'Category'     => 'Обувь'
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
        if (version_compare($context->getVersion(), '1.1.2', '<')) {
            $data = [
                'name'         => "Бутсы",
                'post_content' => "пеціалізоване взуття для гри в футбол. ",
                'url_key'      => '/magento-2-module-development/magento-2-events.html',
                'tags'         => 'magento 2,helloworld',
                'status'       => 2,
                'Category'     => 'Обувь'
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
        if (version_compare($context->getVersion(), '1.1.2', '<')) {
            $data = [
                'name'         => "Яблоко",
                'post_content' => "Я́блуко — їстівний плід яблуні, соковитий, багатий на вітаміни та мікроелементи",
                'url_key'      => '/magento-2-module-development/magento-2-events.html',
                'tags'         => 'magento 2, helloworld',
                'status'       => 1,
                'Category'     => 'Еда'
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
        if (version_compare($context->getVersion(), '1.1.2', '<')) {
            $data = [
                'name'         => "Хлеб",
                'post_content' => "Хліб — харчовий продукт, що випікається з борошна",
                'url_key'      => '/magento-2-module-development/magento-2-events.html',
                'tags'         => 'magento 2, helloworld',
                'status'       => 1,
                'Category'     => 'Еда'
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }

     }
}

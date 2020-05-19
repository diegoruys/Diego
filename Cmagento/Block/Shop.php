<?php
namespace Diego\Cmagento\Block;

class Shop extends \Magento\Framework\View\Element\Template
{
    protected $_storeManager;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    )
    {
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }


    public function getStoreId()
    {
        return $this->_storeManager->getStore()->getId();
    }

    public function getWebsiteId()
    {
        return $this->_storeManager->getStore()->getWebsiteId();
    }

    public function getStoreCode()
    {
        return $this->_storeManager->getStore()->getCode();
    }

    public function getStoreName()
    {
        return $this->_storeManager->getStore()->getName();
    }
    //Esta função funciona mas como não está declarada compilador fica acusando erro.
    /*public function getStoreUrl($fromStore = true)
    {
        return $this->_storeManager->getStore()->getCurrentUrl($fromStore);
    }*/

   //Esta função indicada no curso não funcionou, não foi reconhecida
    /* public function isStoreActive()
    {
        return $this->_storeManager->getStore()->isActive();
    }*/

}
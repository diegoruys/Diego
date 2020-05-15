<?php
namespace Diego\Cmagento\Block;
 
class Conteudo extends \Magento\Framework\View\Element\Template
{
    // Métodos públicos ficam disponíveis dentro do phtml na variável $block
    public function getHello()
    {
        return "Hello Friends!!!";
    }
}
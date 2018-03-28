<?php
// app/code/Esgi/Helloworld/Controller/Index/Index.php
namespace Esgi\Helloworld\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p style="font-size: 120px;">OUI C\'EST BIEN HENRY<p/>';
        die();
    }
}

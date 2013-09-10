<?php
namespace Acme\HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($first_name, $last_name, $color)
    {
        return $this->render(
            'AcmeHelloBundle:Hello:index.html.twig',
            array('name' => $first_name)
        );
    }
}
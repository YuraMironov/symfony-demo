<?php
/**
 * Created by PhpStorm.
 * User: Yura
 * Date: 01.12.2017
 * Time: 20:09
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    /**
     * @Route("/demo")
     */
    public function demoAction()
    {
        return new Response("Demo page");
    }
}
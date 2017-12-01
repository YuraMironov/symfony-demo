<?php
/**
 * Created by PhpStorm.
 * User: Yura
 * Date: 01.12.2017
 * Time: 20:09
 */

namespace AppBundle\Controller;

use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DemoController
{
    /**
     * @Route("/demo")
     */
    public function demoAction(LoggerInterface $logger)
    {
        $logger->info("demo action called");
        return new Response("Demo page");
    }
}
<?php

namespace PiiDev\PortfolioBundle\Controller;

use PiiDev\PortfolioBundle\Entity\Commandes;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComingSoonController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortfolioBundle:ComingSoon:index.html.twig');
    }
}

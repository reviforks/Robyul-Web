<?php

namespace RobyulWebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class IdolSchoolController extends Controller
{
    /**
     * @Route("/idolschool/")
     */
    public function indexAction()
    {
        $seoPage = $this->container->get('sonata.seo.page');
        $seoPage
            ->setTitle("Idol School Ranking - The KPop Discord Bot - Robyul")
            ->addMeta('name', 'description', "View the Ranking over time for Mnet's Idol School here.")
            ->addMeta('property', 'og:description', "View the Ranking over time for Mnet's Idol School here.");
        $seoPage->addMeta('property', 'og:title', $seoPage->getTitle());

        return $this->render('RobyulWebBundle:IdolSchool:index.html.twig');
    }
}
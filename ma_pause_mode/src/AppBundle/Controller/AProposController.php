<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use AppBundle\Entity\Article;
use AppBundle\Entity\User;
use AppBundle\Entity\APropos;
use AppBundle\Entity\Press;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;



class AProposController extends BaseAdminController
{

    /**
     * Lists all article a propos.
     *
     * @Route("apropos", name="a_propos")
     * @Method("GET")
     */
    public function proposAction()
    {
        $em = $this->getDoctrine()->getManager();

        $apropos = $em->getRepository('AppBundle:APropos')->displayAPropos();
        $presses = $em->getRepository('AppBundle:Press')->displayPress();

        if (!$apropos) {
            $apropos = "oups pas de contenu";
        }

        return $this->render('apropos/apropos.html.twig', array(
            'apropos' => $apropos,
            'presses' => $presses
        ));
    }
    

}
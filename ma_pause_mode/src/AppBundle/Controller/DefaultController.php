<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository("AppBundle:Article")->findBy(array(),
        array("date" => "DESC"), 3);

        $em = $this->getDoctrine()->getManager();
        $sections = $em->getRepository("AppBundle:Section")->displayAccueil();

        return $this->render("default/index.html.twig", array(
            "articles" => $articles,
            "sections" => $sections
        ));
    }
    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentionsAction()
    {
        // replace this example code with whatever you need
        return $this->render('default/mentions.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}

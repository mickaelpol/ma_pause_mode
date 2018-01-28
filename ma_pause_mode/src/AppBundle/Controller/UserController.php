<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    
    /**
     * @Route("/delete/{id}")
     */
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('AppBundle:User')->find($id);

        if (!$post) {
            return $this->redirectToRoute('fos_user_profile_show');
        }
        
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('fos_user_profile_show');
        
    }

    /**
     *@Route("/show/{id}", name="show_profile", requirements={"page"="\d+"})
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('AppBundle:User')->find($id);

        return $this->render('userAnonyme/showProfile.html.twig', array(
            'user' => $user,
        ));
    }


}

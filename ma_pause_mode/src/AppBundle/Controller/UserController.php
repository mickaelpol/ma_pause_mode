<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

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

}

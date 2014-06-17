<?php

namespace Sima\SmfForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SimaSmfForumBundle:Default:index.html.twig', array('name' => $name));
    }
}

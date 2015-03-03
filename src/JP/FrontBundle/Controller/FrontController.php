<?php

namespace JP\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller {

    public function indexAction() {
        return $this->render('JPFrontBundle:Front:index.html.twig', array());
    }

    public function aproposAction() {
        return $this->render('JPFrontBundle:Front:apropos.html.twig', array());
    }

    public function servicesAction() {
        return $this->render('JPFrontBundle:Front:services.html.twig', array());
    }

    public function contactAction() {
        return $this->render('JPFrontBundle:Front:contact.html.twig', array());
    }

    public function menuAction() {
        $menu = array(
            'accueil' => $this->generateUrl('jp_front_homepage'),
            'apropos' => $this->generateUrl('jp_front_apropos'),
            'services' => $this->generateUrl('jp_front_services'),
            'blog' => array(
                'fiscalité' => $this->generateUrl('jp_front_homepage'),
                'comptabilité' => $this->generateUrl('jp_front_apropos'),
                'Impots' => $this->generateUrl('jp_front_services'),
            ),
            'contact' => $this->generateUrl('jp_front_contact'),
        );
        return $this->render('JPFrontBundle:Front:menu.html.twig', array('menu' => $menu));
    }

}

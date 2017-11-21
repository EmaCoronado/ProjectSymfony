<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Reservacion;
use AppBundle\Form\ReservacionType;


class ReservacionController extends Controller
{    
    
public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservacions = $em->getRepository('AppBundle:Reservacion')->findAll();
                                                
        return $this->render('reservacion/index.html.twig', array(
            'reservacions' => $reservacions,
        ));
    }
    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $reservacions = $em->getRepository('AppBundle:Reservacion')->findAll();
                                                
        return $this->render('reservacion/login.html.twig', array(
            'reservacions' => $reservacions,
        ));
    }
          
    public function newAction(Request $request)
    {
        $reservacion = new Reservacion();
        $form = $this->createForm(ReservacionType::class, $reservacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservacion);
            $em->flush();

            return $this->redirectToRoute('reservacion_show', array('id' => $reservacion->getIdReservacion()));
        }

        return $this->render('reservacion/new.html.twig', array(
            'reservacion' => $reservacion,
            'form' => $form->createView(),
        ));
    }

    
    public function showAction(Reservacion $reservacion)
    {       
        return $this->render('reservacion/show.html.twig', array(
            'reservacion' => $reservacion           
        ));
    }

    public function editAction(Request $request, Reservacion $reservacion)
    {
        $editForm = $this->createForm(ReservacionType::class, $reservacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservacion);
            $em->flush();

            return $this->redirectToRoute('reservacion_edit', array('id' => $reservacion->getIdReservacion()));
        }

        return $this->render('reservacion/edit.html.twig', array(
            'reservacion' => $reservacion,
            'edit_form' => $editForm->createView(),            
        ));
    }
    
    public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Reservacion");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('reservacion_index');        
    }
    
}

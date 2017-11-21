<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Habitacion;
use AppBundle\Form\HabitacionType;


class HabitacionController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitacions = $em->getRepository('AppBundle:Habitacion')->findAll();

        return $this->render('habitacion/index.html.twig', array(
            'habitacions' => $habitacions,
        ));
    }
 
    public function newAction(Request $request)
    {
        $habitacion = new Habitacion();
        $form = $this->createForm(HabitacionType::class, $habitacion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habitacion);
            $em->flush();

            return $this->redirectToRoute('habitacion_show', array('id' => $habitacion->getIdHabitacion()));
        }

        return $this->render('habitacion/new.html.twig', array(
            'habitacion' => $habitacion,
            'form' => $form->createView(),
        ));
    }
  
    public function showAction(Habitacion $habitacion)
    {
        return $this->render('habitacion/show.html.twig', array(
            'habitacion' => $habitacion,            
        ));
    }

    public function editAction(Request $request, Habitacion $habitacion)
    {
        $editForm = $this->createForm(HabitacionType::class, $habitacion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($habitacion);
            $em->flush();

            return $this->redirectToRoute('habitacion_edit', array('id' => $habitacion->getIdHabitacion()));
        }

        return $this->render('habitacion/edit.html.twig', array(
            'habitacion' => $habitacion,
            'edit_form' => $editForm->createView(),            
        ));
    }
    
     public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Habitacion");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('habitacion_index');        
    }
}

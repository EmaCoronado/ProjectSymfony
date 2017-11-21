<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Cliente;
use AppBundle\Form\ClienteType;

class ClienteController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clientes = $em->getRepository('AppBundle:Cliente')->findAll();

        return $this->render('cliente/index.html.twig', array(
            'clientes' => $clientes,
        ));
    }
 
    public function newAction(Request $request)
    {
        $cliente = new Cliente();
        $form = $this->createForm(ClienteType::class, $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('cliente_show', array('id' => $cliente->getIdCliente()));
        }

        return $this->render('cliente/new.html.twig', array(
            'cliente' => $cliente,
            'form' => $form->createView(),
        ));
    }


    public function showAction(Cliente $cliente)
    {
        return $this->render('cliente/show.html.twig', array(
            'cliente' => $cliente,            
        ));
    }

    public function editAction(Request $request, Cliente $cliente)
    {
        $editForm = $this->createForm(ClienteType::class, $cliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('cliente_edit', array('id' => $cliente->getIdCliente()));
        }

        return $this->render('cliente/edit.html.twig', array(
            'cliente' => $cliente,
            'edit_form' => $editForm->createView(),            
        ));
    }

        public function deleteAction($id)
    {  
        $em = $this->getDoctrine()->getEntityManager();
        $avi_repo = $em->getRepository("AppBundle:Cliente");
        $avi = $avi_repo->find($id);
        
        $em->remove($avi);
        $em->flush();
        
        return $this->redirectToRoute('cliente_index');        
    }
}

<?php

namespace BateauxBundle\Controller;

use BateauxBundle\Entity\bateau;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Bateau controller.
 *
 * @Route("bateau")
 */
class bateauController extends Controller
{
    /**
     * Lists all bateau entities.
     *
     * @Route("/", name="bateau_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bateaus = $em->getRepository('BateauxBundle:bateau')->findAll();

        return $this->render('bateau/index.html.twig', array(
            'bateaus' => $bateaus,
        ));
    }

    /**
     * Creates a new bateau entity.
     *
     * @Route("/new", name="bateau_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bateau = new Bateau();
        $form = $this->createForm('BateauxBundle\Form\bateauType', $bateau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bateau);
            $em->flush();

            return $this->redirectToRoute('bateau_show', array('idbateau' => $bateau->getIdbateau()));
        }

        return $this->render('bateau/new.html.twig', array(
            'bateau' => $bateau,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bateau entity.
     *
     * @Route("/{idbateau}", name="bateau_show")
     * @Method("GET")
     */
    public function showAction(bateau $bateau)
    {
        $deleteForm = $this->createDeleteForm($bateau);

        return $this->render('bateau/show.html.twig', array(
            'bateau' => $bateau,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bateau entity.
     *
     * @Route("/{idbateau}/edit", name="bateau_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, bateau $bateau)
    {
        $deleteForm = $this->createDeleteForm($bateau);
        $editForm = $this->createForm('BateauxBundle\Form\bateauType', $bateau);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bateau_edit', array('idbateau' => $bateau->getIdbateau()));
        }

        return $this->render('bateau/edit.html.twig', array(
            'bateau' => $bateau,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bateau entity.
     *
     * @Route("/{idbateau}", name="bateau_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, bateau $bateau)
    {
        $form = $this->createDeleteForm($bateau);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bateau);
            $em->flush();
        }

        return $this->redirectToRoute('bateau_index');
    }

    /**
     * Creates a form to delete a bateau entity.
     *
     * @param bateau $bateau The bateau entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(bateau $bateau)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bateau_delete', array('idbateau' => $bateau->getIdbateau())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

<?php

namespace BateauxBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use BateauxBundle\Entity\bateau;

class BateauxController extends Controller {
    /**
     * @Route("/creer-bateau")
     */
    public function createAction(Request $request) {

        $bateau = new Bateau();
        $form = $this->createFormBuilder($bateau)
            ->add('idBateau', TextType::class)
            ->add('marqueBateau', TextType::class)
            ->add('longueurCoqueBateau', TextType::class)
            ->add('longueurFlottaisonBateau', TextType::class)
            ->add('LargeurMaxiBateau', TextType::class)
            ->add('TirantAirBateau', TextType::class)
            ->add('TirantEauMinBateau', TextType::class)
            ->add('TirantEauMinBateau', TextType::class)
            ->add('AnneeBateau', TextType::class)
            ->add('DeplacementLegeBateau', TextType::class)
            ->add('TypeCoqueBateau', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'New Bateau'))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $bateau = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($bateau);
            $em->flush();

            return $this->redirect('/view-bateau' . $bateau->getId());

        }

        return $this->render(
            'bateau/edit.html.twig',
            array('form' => $form->createView())
        );

    }
    /**
     * @Route("/show-bateau")
     */
    public function showAction() {

        $bateau = $this->getDoctrine()
            ->getRepository('BateauxBundle:bateau')
            ->findAll();

        return $this->render(
            'bateau/show.html.twig',
            array('bateau' => $bateau)
        );
    }

    /**
     * @Route("/view-bateaux/{id}")
     */
    public function viewAction($id) {

        $article = $this->getDoctrine()
            ->getRepository('BateauxBundle:bateau')
            ->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }

        return $this->render(
            'bateau/view.html.twig',
            array('bateau' => $article)
        );

    }

    /**
     * @Route("/delete-article/{id}")
     */
    public function deleteAction($id) {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BateauxBundle:bateau')->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }

        $em->remove($article);
        $em->flush();

        return $this->redirect('/show-bateau');

    }

    /**
     * @Route("/update-bateau/{id}")
     */
    public function updateAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('BateauxBundle:bateau')->find($id);

        if (!$article) {
            throw $this->createNotFoundException(
                'There are no articles with the following id: ' . $id
            );
        }

        $form = $this->createFormBuilder($article)
            ->add('idBateau', TextType::class)
            ->add('marqueBateau', TextType::class)
            ->add('longueurCoqueBateau', TextType::class)
            ->add('longueurFlottaisonBateau', TextType::class)
            ->add('LargeurMaxiBateau', TextType::class)
            ->add('TirantAirBateau', TextType::class)
            ->add('TirantEauMinBateau', TextType::class)
            ->add('TirantEauMinBateau', TextType::class)
            ->add('AnneeBateau', TextType::class)
            ->add('DeplacementLegeBateau', TextType::class)
            ->add('TypeCoqueBateau', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Update Bateau'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            $article = $form->getData();
            $em->flush();

            return $this->redirect('/view-bateau/' . $id);

        }

        return $this->render(
            'bateau/edit.html.twig',
            array('form' => $form->createView())
        );

    }
}
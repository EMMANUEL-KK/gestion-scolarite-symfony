<?php

namespace App\Controller;

use App\Entity\Filiere;
use App\Repository\FiliereRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FiliereController extends AbstractController
{
    // A) Afficher la liste
    #[Route('/filiere', name: 'filiere_index')]
    public function index(FiliereRepository $filiereRepository): Response
    {
        return $this->render('Filiere/vListeFiliere.html.twig', [
            'filieres' => $filiereRepository->findAll(),
        ]);
    }

    // B) Détail d'une filière
    #[Route('/filiere/detail/{id}', name: 'filiere_detail')]
    public function detail(FiliereRepository $filiereRepository, int $id): Response
    {
        return $this->render('Filiere/vDetailFiliere.html.twig', [
            'filiere' => $filiereRepository->find($id),
        ]);
    }

    // C) Ajouter (Formulaire + Envoi)
    #[Route('/filiere/addNew', name: 'filiere_addNew')]
    public function addNew(): Response
    {
        return $this->render('Filiere/vFormFiliere.html.twig');
    }

    #[Route('/filiere/addNew/submit', name: 'filiere_submit', methods: ['POST'])]
    public function filiere_submit(Request $request, EntityManagerInterface $em): Response
    {
        $f = new Filiere();
        $f->setCodef($request->request->get('codef'));
        $f->setIntitulef($request->request->get('intitulef'));
        $em->persist($f);
        $em->flush();
        return $this->redirectToRoute('filiere_index');
    }

    // D) Modifier
    #[Route('/filiere/edit/{id}', name: 'filiere_edit')]
    public function edit(FiliereRepository $filiereRepository, int $id): Response
    {
        return $this->render('Filiere/vEditFiliere.html.twig', [
            'filiere' => $filiereRepository->find($id),
        ]);
    }

    #[Route('/filiere/edit/submit/{id}', name: 'filiere_edit_submit', methods: ['POST'])]
    public function edit_submit(Request $request, EntityManagerInterface $em, FiliereRepository $filiereRepository, int $id): Response
    {
        $f = $filiereRepository->find($id);
        $f->setCodef($request->request->get('codef'));
        $f->setIntitulef($request->request->get('intitulef'));
        $em->flush();
        return $this->redirectToRoute('filiere_index');
    }

    // E) Supprimer
    #[Route('/filiere/delete/{id}', name: 'filiere_delete')]
    public function delete(EntityManagerInterface $em, FiliereRepository $filiereRepository, int $id): Response
    {
        $f = $filiereRepository->find($id);
        if ($f) {
            $em->remove($f);
            $em->flush();
        }
        return $this->redirectToRoute('filiere_index');
    }
}
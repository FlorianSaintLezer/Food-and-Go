<?php

namespace App\Controller;

use App\Entity\Comments;
use App\Form\CommentsType;
use App\Repository\CommentsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class CommentsController extends AbstractController
{
    private $entityManager;
    private $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->security = $security;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/user/recipe/{id}", name="comment_delete", methods="delete")
     */
    public function deleteComment(Comments $comments, Request $request): Response
    {
        $recipe = $comments->getRecipe()->getId();
        if ($this->isCsrfTokenValid('SUPCOMMENT'.$comments->getId(), $request->get('_token'))) {
            $this->entityManager->remove($comments);
            $this->entityManager->flush();
            $this->addFlash('comment-delete', 'Le commentaire a été supprimé');

            return $this->redirectToRoute('show_recipe', ['id' => $recipe]);
        }
    }

    // /**
    //  * @Route("/comments/", name="comments")
    //  */
    // public function comments(CommentsRepository $repository): Response
    // {
    //     $comments = $repository->findAll();

    //     return $this->render('users/comments.html.twig', ['comments' => $comments]);
    // }

    // /**
    //  * @Route("/comments/add", name="comments_add")
    //  * @Route("/comments/{id}", name="comments_edit",  methods="GET|POST")
    //  */
    // public function modification(Comments $comments = null, Request $request, EntityManagerInterface $entityManager, Security $security): Response
    // {
    //     if (!$comments) {
    //         $comments = new Comments();
    //     }
    //     $form = $this->createForm(CommentsType::class, $comments);
    //     $form->handleRequest($request);
    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $user = $this->security->getUser();
    //         $comments->setAuthor($user);
    //         $modif = null !== $comments->getId();
    //         $entityManager->persist($comments);
    //         $entityManager->flush();
    //         $this->addFlash('success', ($modif) ? 'Comment has been successfully edited' : 'Comment has been successfully added');

    //         return $this->redirectToRoute('comments');
    //     }

    //     return $this->render('users/edit_comment.html.twig', [
    //         'comments' => $comments,
    //         'form' => $form->createView(),
    //         'isModification' => null !== $comments->getid(),
    //     ]);
    // }
}

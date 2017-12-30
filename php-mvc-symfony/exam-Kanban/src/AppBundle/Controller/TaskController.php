<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Task controller.
 *
 * @Route("/")
 */
class TaskController extends Controller
{
    /**
     * Lists all task entities.
     *
     * @Route("/", name="index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $openTasks =
            $this->getDoctrine()
                ->getRepository(Task::class)
                ->findBy(['status' => 'Open']);
        $inProgressTasks =
            $this->getDoctrine()
                ->getRepository(Task::class)
                ->findBy(['status' => 'In Progress']);
        $finishedTasks =
            $this->getDoctrine()
                ->getRepository(Task::class)
                ->findBy(['status' => 'Finished']);



        return $this->render(
            'task/index.html.twig',
            ['openTasks' => $openTasks,
                'inProgressTasks' => $inProgressTasks,
                'finishedTasks' => $finishedTasks]);
    }



    /**
     * Creates a new task entity.
     *
     * @Route("/create", name="create")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $task = new Task();
        $form = $this->createForm('AppBundle\Form\TaskType', $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('task/create.html.twig', array(
            'task' => $task,
            'form' => $form->createView(),
        ));
    }



    /**
     * Displays a form to edit an existing task entity.
     *
     * @Route("/edit/{id}", name="edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Task $task)
    {
        $form = $this->createForm('AppBundle\Form\TaskType', $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('index');
        }

        return $this->render('task/edit.html.twig', array(
            'task' => $task,
            'form' => $form->createView(),
        ));
    }


}

<?php
namespace Acme\TaskBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
// create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));
        $form = $this->createForm('task', $task);

        if ($request->isMethod('POST')) {
            $form->bind($request);
            if ($form->isValid()) {
                // perform some action, such as saving the task to the database
                return $this->redirect($this->generateUrl('task_success'));
            }
        }
        return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
                'form' => $form->createView(),
            ));
    }
}
<?php
 
namespace Mobilis\StoreBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
 
class IndexController extends Controller
{
  public function indexAction(Request $request)
  {
    $form = $this->createFormBuilder()
            ->add('email', 'email')
            ->add('name', 'text')
            ->add('content', 'text')
            ->add('save', 'submit')
            ->getForm();

    if ($request->getMethod() == 'POST') {
        return $this->render('MobilisStoreBundle:Store:index.html.twig', array('form' => $form->createView()));
    }

    return $this->render('MobilisStoreBundle:Store:index.html.twig', array('form' => $form->createView()));
  }
}
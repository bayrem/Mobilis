<?php
 
namespace Mobilis\StoreBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class StoreController extends Controller
{
  public function indexAction()
  {
    $form = $this->createFormBuilder()
            ->add('email', 'email')
            ->add('name', 'text')
            ->add('content', 'text')
            ->add('save', 'submit')
            ->getForm();

    $loginform = $this->createFormBuilder()
            ->add('email', 'email')
            ->add('password', 'password')
            ->add('save','submit')
            ->getForm();

    return $this->render('MobilisStoreBundle:Store:store.html.twig', array('form' => $form->createView()));
  }
}
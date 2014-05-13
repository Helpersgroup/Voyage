<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use voyage\FirstBundle\Entity\Annonce;
use voyage\FirstBundle\Form\AnnonceType;
use voyage\FirstBundle\Controller\EvalController;
/**
 * Annonce controller.
 *
 * @Route("/annonce")
 */
class AnnonceController extends Controller
{

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="annonce")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
               
        
        $em=$this -> container -> get('Doctrine')-> getEntityManager();
        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        $request=$this->getRequest();
            
          //  echo" suit a un post";
        
              $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('VoyageBundle:Annonce:Annonce', 'a')
                  ->where("a.etat=1");

               $query = $qb->getQuery();               
            
  



           $annonces = $query->getResult();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from annonce where etat=1 and prix=(select max(prix) from annonce) ');
    $stmt->execute();
    $p = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from commentaire');
    $stmt->execute();
    $c = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1 and type_Hebergement like "Hotel 5 *" ');
    $stmt->execute();
    $h = $stmt->fetchAll();
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1 and note=(select max(note) from annonce)');
    $stmt->execute();
    $n = $stmt->fetchAll();
        
        return array(
            'entities' => $annonces,'username'=>$this->get('security.context')->getToken()->getUser(),'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        );
    }
    public function index2Action()
    {
         $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1 ');
    $stmt->execute();
    $annonce = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from annonce where etat=1 and prix=(select max(prix) from annonce) ');
    $stmt->execute();
    $p = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from commentaire');
    $stmt->execute();
    $c = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1 and type_Hebergement like "Hotel 5 *" ');
    $stmt->execute();
    $h = $stmt->fetchAll();
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1 and note=(select max(note) from annonce)');
    $stmt->execute();
    $n = $stmt->fetchAll();
        return $this->render('VoyageBundle:Annonce:index2.html.twig',array(
            'entities' => $annonce,'username'=>$this->get('security.context')->getToken()->getUser(),'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        ));
        
    }
    /**
     * Creates a new Annonce entity.
     *
     * @Route("/", name="annonce_create")
     * @Method("POST")
     * @Template("VoyageBundle:Annonces:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Annonce();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('annonce_show', array('id' => $entity->getId())));
        }
 return $this->render('VoyageBundle:Annonce:new.html.twig',array(
            'entity' => $entity,
            'username'=>$this->get('security.context')->getToken()->getUser()
        
        ));
         
    }

    /**
    * Creates a form to create a Annonce entity.
    *
    * @param Annonce $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Annonce $entity)
    {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Annonce entity.
     *
     * @Route("/new", name="annonce_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Annonce();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'username'=>$this->get('security.context')->getToken()->getUser()
        );
    }

    /**
     * Finds and displays a Annonce entity.
     *
     * @Route("/{id}", name="annonce_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
         $em= $this-> container->get('doctrine')->getEntityManager();
    
  
         $modele = $em-> getRepository('VoyageBundle:Annonce')->find($id);
         $request=$this->get('request');
       $latitude = $request->get('lat');
        $longitude = $request->get('lon');
        
        
        
        
        
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VoyageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from commentaire c, personne p where ((c.id_Annonce='.$id.') and (p.id_Personne=c.id_Personne)) order by id_Commentaire DESC');
        $stmt->execute();
        $comments = $stmt->fetchAll();
        return array(
            'entity'      => $entity,
            'username'  => $this->get('security.context')->getToken()->getUser(),
            'comments'=>$comments,
             'att'=>$latitude,
            'long '=>$longitude
        );
    }

    /**
     * Displays a form to edit an existing Annonce entity.
     *
     * @Route("/{id}/edit", name="annonce_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VoyageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'username'=>'kimo'
        );
    }

    /**
    * Creates a form to edit a Annonce entity.
    *
    * @param Annonce $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Annonce $entity)
    {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Annonce entity.
     *
     * @Route("/{id}", name="annonce_update")
     * @Method("PUT")
     * @Template("VoyageBundle:Annonces:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VoyageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('annonce_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Annonce entity.
     *
     * @Route("/{id}", name="annonce_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('VoyageBundle:Annonce')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Annonce entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('annonce'));
    }

    /**
     * Creates a form to delete a Annonce entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonce_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    private function getBest()
    {
        $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=1');
    $stmt->execute();
    $result = $stmt->fetchAll();
         

        if (!$result) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $result,
            'delete_form' => $deleteForm->createView(),
            'username'  => $this->get('security.context')->getToken()->getUser()
            
        );
    }
}


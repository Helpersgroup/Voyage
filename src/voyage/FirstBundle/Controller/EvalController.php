<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use voyage\FirstBundle\Entity\Annonce;
use voyage\FirstBundle\Form\AnnonceType;

/**
 * Annonce controller.
 *
 * @Route("/annonce")
 */
class EvalController extends Controller
{

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="annonce")
     * @Method("GET")
     * @Template()
     */
    public function addAction()
    {
        //l'objet $coment
    	$coment = new Commentaire();
    	//appel de service
    	$encoder = $this->container->get('security.encoder_factory')->getEncoder($coment);
    	//setting up the $coment
    	$coment->setIdPersonne(3)
    	->setIdAnnonce(83)
    	->setDate(new \DateTime("NOW"));
    	//creation du formulaire
    	$formBuilder = $this->createFormBuilder($coment);
    	//ajout des champs voulu
    	//génération du formulaire
    	$form = $formBuilder->getForm();
    	// On récupère la requête
    	$request = $this->get('request');
    	// On vérifie qu'elle est de type POST
    	if ($request->getMethod() == 'POST') {
    		// On fait le lien Requête <-> Formulaire
    		// À partir de maintenant, la variable $coment contient les valeurs entrées dans le formulaire par le visiteur
    		$form->bind($request);
    		// On vérifie que les valeurs entrées sont correctes
    		 
    		if ($form->isValid()) {
    			// On l'enregistre notre objet $coment dans la base de données
    			$em = $this->getDoctrine()->getManager();
    			 
    			$pass = $coment->getPassword();
    			 
    			$coment->setPassword($encoder->encodePassword($pass,$coment->getSalt()));
    			try {
    				$em->persist($coment);
    				$em->flush();
    				return $this->redirect($this->generateUrl('login'));
    			} catch (\Exception $e) {
    
    			}
    			 
    			 
    		}
    	}
    
    	return $this->render('SecurinetsUsersBundle:Default:register.html.twig', array());
    
    }
    public function index2Action()
    {
        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        
        return $this->render('VoyageBundle:Annonce:index2.html.twig',array('entities' => $annonces,'username'=>"admin"));
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

        return array(
            'entity' => $entity,
            'username'=>"admin"
        );
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
            'username'=>"admin"
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
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('VoyageBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'username'  => 'admin'
            
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

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
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
}

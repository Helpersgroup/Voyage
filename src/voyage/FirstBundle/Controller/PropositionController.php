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
 * Proposition controller.
 *
 * @Route("/proposition")
 */
class PropositionController extends Controller
{

    /**
     * Lists all Annonce entities.
     *
     * @Route("/", name="proposition")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
                $session = $this->getRequest()->getSession();

                $value = $session->get('nom');
                    $s=sha1('kimo'.'symfony');
              //  if($value==$s)
             //     die("hello");
             //   else
              //      die("nooo");
                
        
        $em=$this -> container -> get('Doctrine')-> getEntityManager();
        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        $request=$this->getRequest();
            
          //  echo" suit a un post";
        
              $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('VoyageBundle:Annonce:Annonce', 'a')
                  ->where("a.etat=0");

               $query = $qb->getQuery();               
            
  



           $annonces = $query->getResult();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from annonce where etat=0 and prix=(select max(prix) from annonce) ');
    $stmt->execute();
    $p = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from commentaire');
    $stmt->execute();
    $c = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=0 and type_Hebergement like "Hotel 5 *" ');
    $stmt->execute();
    $h = $stmt->fetchAll();
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=0 and note=(select max(note) from annonce)');
    $stmt->execute();
    $n = $stmt->fetchAll();
        
        return array(
            'entities' => $annonces,'username'=>"admin",'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        );
    }
    public function index2Action()
    {
         $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=0 ');
    $stmt->execute();
    $annonce = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from annonce where etat=0 and prix=(select max(prix) from annonce) ');
    $stmt->execute();
    $p = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select id_Annonce from commentaire');
    $stmt->execute();
    $c = $stmt->fetchAll();
    
    
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=0 and type_Hebergement like "Hotel 5 *" ');
    $stmt->execute();
    $h = $stmt->fetchAll();
    $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from annonce where etat=0 and note=(select max(note) from annonce)');
    $stmt->execute();
    $n = $stmt->fetchAll();
        return $this->render('VoyageBundle:Proposition:index.html.twig',array(
            'entities' => $annonce,'username'=>"admin",'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        ));
        
    }
    /**
     * Creates a new Annonce entity.
     *
     * @Route("/", name="proposition_create")
     * @Method("POST")
     * @Template("VoyageBundle:Proposition:new.html.twig")
     */


       public function createAction()
    {
                      $stmt = $this->getDoctrine()->getEntityManager()
                        ->getConnection()
                          ->prepare("select max(id_Annonce)as max from annonce");
                    $stmt->execute();
                    $n = $stmt->fetchAll();
                    foreach( $n as $a)
                    $fin=$a['max'];     
           
           
           
           
           $annonce=new Annonce();
                   $request=$this->getRequest();
        if($request ->getMethod()=="POST")
        {
             $nom=$request->get('nom');
             $typeAnnonce=$request->get('typeAnnonce');
             $destination=$request->get('destination');
             $long=$request->get('long');
             $att=$request->get('att');
             $depart=$request->get('depart');

             $dateDeb=$request->get('dateDeb');
             $dateFin=$request->get('dateFin');
              $description=$request->get('description');
              $TypeHebergement=$request->get('TypeHebergement');
           
             $hebergement=$request->get('hebergement');
             $prix=$request->get('prix');
             $transport=$request->get('transport');
             $image=$request->get('image');
             $uploaddir = '../img/';
             $max=$fin+1;
             $uploadfile = $uploaddir . $max;
             move_uploaded_file($image,$uploadfile);
             $etat=$request->get('etat');
             

                 
                    $stmt = $this->getDoctrine()->getEntityManager()
                        ->getConnection()
                          ->prepare("INSERT INTO `annonce`(`id_Annonceur`, `nom`, `date_Deb`, `date_Fin`, `depart`, `destination`, `description`, `hebergement`, `type_Hebergement`, `type_Annonce`, `transport`, `note`, `etat`, `prix`, `signalisation`, `image`, `att`, `long`) 
                              VALUES 
                              ('93','".$nom."','".$dateDeb."','".$dateFin."','".$depart."','".$destination."','".$description."','".$hebergement."','".$TypeHebergement."','".$typeAnnonce."','".$transport."','0','0','".$prix."','0','".$uploadfile."','".$att."','".$long."')");
             
                   
                   
                   
                   
                   try {  
                    
                    
                               $stmt->execute();

                    
            return $this->redirect($this->generateUrl('proposition_show', array('id' => $max)));                    
                 } catch (\Exception $e) {
            return $this->redirect($this->generateUrl('proposition_show', array('id' => $max)));                    
                 }
                    return $this->render('VoyageBundle:Proposition:new.html.twig',array('username'=>'kimo','entity'=>$annonce));
         }
return $this->render('VoyageBundle:Proposition:new.html.twig',array('username'=>'kimo','entity'=>$annonce));

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
            'action' => $this->generateUrl('proposition_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Proposition entity.
     *
     * @Route("/new", name="proposition_new")
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
     * @Route("/{id}", name="proposition_show")
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
            'username'  => 'admin',
            'comments'=>$comments,
             'att'=>$latitude,
            'long '=>$longitude,
            'error'=>''
        );
    }

    /**
     * Displays a form to edit an existing Annonce entity.
     *
     * @Route("/{id}/edit", name="proposition_edit")
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
            'action' => $this->generateUrl('proposition_update', array('id' => $entity->getId())),
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

        $entity = $em->getRepository('VoyageBundle:Proposition')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find proposition entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('proposition_edit', array('id' => $id)));
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
     * @Route("/{id}", name="proposition_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        
            $em = $this->getDoctrine()->getManager();
          
            
            $entity = $em->getRepository('VoyageBundle:Proposition')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find proposition entity.');
            }
            
            
              $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('delete from reservation where id_Annonce='.$id);
                $stmt->execute();
            $stmt2 = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('delete from commentaire where id_Annonce='.$id);
                $stmt2->execute();
                $stmt3 = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('delete from jaime where id_Annonce='.$id);
                $stmt3->execute();
                $stmt4 = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('delete from facture where id_Annonce='.$id);
                $stmt4->execute();
        
        
            if ($entity) {
            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('proposition'));
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
            ->setAction($this->generateUrl('proposition_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
}


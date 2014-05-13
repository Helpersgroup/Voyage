<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use voyage\FirstBundle\Entity\Commentaire;
use voyage\FirstBundle\Form\Commentaireype;


/**
 * Commentaire controller.
 *
 * @Route("/Commentaire")
 */
class EvalController extends Controller
{

    /**
     * Lists all Commentaire entities.
     *
     * @Route("/", name="Commentaire")
     * @Method("GET")
     * @Template()
     */
    public function addAction($id)
    {
        $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from commentaire c, personne p where ((c.id_Annonce='.$id.') and (p.id_Personne=c.id_Personne)) order by id_Commentaire DESC');
        $stmt->execute();
        $comments = $stmt->fetchAll();
        
        $em = $this->getDoctrine()->getManager();

        $annonce = $em->getRepository('VoyageBundle:Annonce')->find($id);
        
       $request=$this->getRequest();
       if($request ->getMethod()=="POST")
        {
             $message=$request->get('message');
             $date = new \DateTime('NOW');
             $now=date_format($date, 'Y-m-d h:m:s');
             $idpersonne=93; 
        
             $stmt = $this->getDoctrine()->getEntityManager()
                        ->getConnection()
                          ->prepare("INSERT INTO commentaire (id_Personne,id_Annonce, message, date)
                                    VALUES
                                     ('".$idpersonne."', '".$id."', '".$message."', '".$now."' )");
             try {  
                    $stmt->execute();
                   return $this->render('VoyageBundle:Annonce:show.html.twig', array('error'=>'','username'=>'kimo','comments'=>$comments,'entity'=>$annonce));   
                    
                 } catch (\Exception $e) {
                            die('erreur'.$e);
                    return $this->render('VoyageBundle:Annonce:show.html.twig', array('error'=>'erreur','username'=>'kimo','comments'=>$comments,'entity'=>$annonce));
                }
     
        }     
            
        
    
            return $this->render('VoyageBundle:Annonce:show.html.twig', array('error'=>'erreur est survenue ','username'=>'kimo','comments'=>$comments,'entity'=>$annonce));
        }

    }
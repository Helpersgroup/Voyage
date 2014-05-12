<?php

namespace voyage\FirstBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use voyage\FirstBundle\Entity\Commentaire;

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
    public function addAction($id)
    {
      /* $stmt = $this->getDoctrine()->getEntityManager()
             ->getConnection()
                ->prepare('select * from commentaire c, personne p where ((c.id_Annonce='.$id.') and (p.id_Personne=c.id_Personne)) order by id_Commentaire DESC');
        $stmt->execute();
        $comments = $stmt->fetchAll();
        
        
        */
      /*  
         $em=$this -> container -> get('Doctrine')-> getEntityManager();
        $annonce = $em->getRepository('VoyageBundle:Annonce')->find($id);*/
        $request=$this->getRequest();
        $coment = new Commentaire();
           if($request ->getMethod()=="POST")
        {
            
          //  echo" suit a un post";
        
            $message=$request->get('message');
         $emm=$this -> container -> get('Doctrine')-> getEntityManager();
              $coment = $emm->createQueryBuilder();

            $coment->setIdPersonne(93)
                    ->setIdAnnonce($id)
                    ->setDate(new \DateTime("NOW"))
                    ->setMessage($message);
       
          //  try {
    				$emm->persist($coment);
    				$emm->flush();
    				//return $this->render('VoyageBundle:Annonce:show.html.twig', array('comments'=>$comments,'entity'=>$annonce));

    		//	} catch (\Exception $e) {
                  ///          die('erreur'.$e);
    			//}
              
            
        }
    
return $this->render('VoyageBundle:Annonce:show.html.twig', array('username'=>'kimo','comments'=>$comments,'entity'=>$annonce));



    }

    }
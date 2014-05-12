<?php

namespace voyage\FirstBundle\Controller;
//use voyage\FirstBundle\Entity\Annonce;
//use voyage\FirstBundle\Form\ModeleForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RechercheController extends Controller
{
    public function rechercheAction()
    {
        $em=$this -> container -> get('Doctrine')-> getEntityManager();
        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        $request=$this->getRequest();
        if($request ->getMethod()=="POST")
        {
            
          //  echo" suit a un post";
        
            $search=$request->get('search');
              $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('VoyageBundle:Annonce:Annonce', 'a')
                  ->where("(a.nom LIKE :motcle or a.depart LIKE :motcle or a.destination LIKE :motcle or a.hebergement LIKE :motcle) and a.etat=1")
                  ->setParameter('motcle', '%'.$search.'%');

               $query = $qb->getQuery();               
            
  



           $annonces = $query->getResult();
            
        }
        
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
        
        
        
     return $this->render('VoyageBundle:Annonce:index.html.twig',array(
            'entities' => $annonces,'username'=>"admin",'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        ));   
        
       
    }
    
   
        
        public function mapAction($id)
    {
       // return $this->render('PidevHomeBundle:home:map.html.twig',array());
         $em= $this-> container->get('doctrine')->getEntityManager();
    
         $modele = $em-> getRepository('VoyageBundle:Annonce')->find($id);
         $request=$this->get('request');
       $latitude = $request->get('lat');
        $longitude = $request->get('lon');
        return $this->render('VoyageBundle:Pikon:avancer.html.twig',array('modele'=>$modele, 'att'=>$latitude,'long '=>$longitude ));
      
    }
    
    public function recherche2Action()
    {
        
//        $em=$this->getDoctrine()->getManager();
//        $request=$this->getRequest();
//        $Annonce=new Annonce();
        
        $em=$this -> container -> get('Doctrine')-> getEntityManager();
        $annonces = $em->getRepository('VoyageBundle:Annonce')->findAll();
        $request=$this->getRequest();
        if($request ->getMethod()=="POST")
        {
            
          //  echo" suit a un post";
        
            $depart=$request->get('depart');
            $destination=$request->get('destination');
            $datefin=$request->get('datefin');
            $datedep=$request->get('datedeb');
            $trip=$request->get('trip');
            $prix=$request->get('prix');
            $hotel=$request->get('nomhotel');
              $qb = $em->createQueryBuilder();

               $qb->select('a')
                  ->from('VoyageBundle:Annonce:Annonce', 'a')
                  ->where("(a.prix <= :motcle1) or (a.dateDeb >= :motcle2 and a.dateFin <= :motcle3 ) or(a.depart like :motcle4) or (a.destination like :motcle5) or (a.typeHebergement like :motcle6) or (a.hebergement like :motcle7)")
                  ->setParameter('motcle1', $prix)           
                  ->setParameter('motcle2', $datedep)
                  ->setParameter('motcle3', $datefin)
                  ->setParameter('motcle4', "%".$depart."%")           
                  ->setParameter('motcle5', "%".$destination."%")
                  ->setParameter('motcle6', $trip)
                  ->setParameter('motcle7', "%".$hotel."%");          
                  

               $query = $qb->getQuery();               

           $annonces = $query->getResult();
            
        }
        
        
        
        
        
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
        
        
    
        
     return $this->render('VoyageBundle:Annonce:index.html.twig',array(
            'entities' => $annonces,'username'=>"admin",'p'=>$p,'c'=>$c,'n'=>$n,'h'=>$h
        ));  
    
    }
    
    
}
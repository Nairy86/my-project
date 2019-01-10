<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function index()
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }



    /**
     * @Route("/", name="home")
     * */
    
	    public function home(){
		    //A MODFIER PAR RAPPORT A LA BASE DE DONNEE
	    return $this->render('acceuil/home.html.twig',[
		    'title'=> "Bienvenue sur la page d'acceuil",  
		    'usert' => 0
		   
	    ]);
	}

  /**
     * @Route("/Profil", name="Profil")
     * */
    
	    public function Profil(){
		    //A MODFIER PAR RAPPORT A LA BASE DE DONNEE
	    return $this->render('acceuil/Profil.html.twig',[
		    'statut' => "adherent",
		    'nomA' => "Dupont",
		    'prenomA' => "Jean",
		    'adresseA' => "64_rue_du_puit",
		    'adressemailA' => "pepaouchnok@gmail.com",
                    'numtelA'	=>"0607743925",    
		    'cleA' => "00028763534342",
		    'nomassocA' => "Association de tennis",
		    'NombrepaiementA' => "125"					    
		    
	    ]);
	}

	







}





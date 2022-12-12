<?php

namespace App\Controller;

use App\Entity\Employe;
use App\Entity\Formation;
use App\Form\EmployeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Repository\EmployeRepository;

class EmployeController extends AbstractController
{
    #[Route('/employe', name: 'app_employe')]
    public function index(): Response
    {
        $session = new Session();
        echo "ID : ". $session->get("employeId");

        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }


    #[Route('/login', name: 'app_Inscription')]


    public function connexion(Request $request,ManagerRegistry $doctrine,$login=null)
    {
        if ($login==null){
            $login= new Employe();
        }

        $form= $this->createForm(EmployeType::class,$login );        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()&& $form->isValid()) {

            $employe= $doctrine->getManager()->getRepository(Employe::class)->getVerifConnexion($login->getLogin(),(($login->getMdp() ) ) ) ;
            if($employe){
                $session= new Session();
                $session->set('employeId',$employe->getId());
                if ($employe->getStatut()==0){
                    return $this->redirectToRoute('app_liste_Formation');
            }
                else{
                    return $this->redirectToRoute('app_liste_FormationEmp');
                }
            
            }
            else {
                echo "Identifiant Incorrect, veuillez réessayer.";
            }

    }

    return $this->render('employe/inscription.html.twig', array('form'=>$form->createView()) );

}

//Question 2
#[Route('/listeEmploye', name: 'app_liste_employe')]
    public function afficheLesFormations(ManagerRegistry $doctrine)
    {
        $employe=$doctrine->getManager()->getRepository(Employe::class)->findAll();
        if(!$employe){
            $message = "Il n'y a pas de Formation";
        }
        else{
            $message=null;
        }
        return $this->render('employe/listeEmploye.twig',array('lesEmployes'=>$employe,'message'=>$message));
    }
}

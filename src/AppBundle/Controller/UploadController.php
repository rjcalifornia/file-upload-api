<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

use AppBundle\Entity\Messages;


class UploadController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    
    
    
    
   
    
    
     /**
     * Receives files from web app
     *
     * @Route("/api/save-file/", name="save_file_api")  
     * @param Request $request
     * @return JsonResponse
     */
    public function storeRemoteFileAction(Request $request)
    {
        //Allow posts from other sources
        header("Access-Control-Allow-Origin: *");
        $em = $this->getDoctrine()->getManager();
       
        $get_file = $request->files->get('file');

        $temp_name = pathinfo($get_file->getClientOriginalName(), PATHINFO_FILENAME);
                 
                //Asignamos al nombre del documento un ID unico y la extension
                $file_name = $temp_name.'-'.uniqid().'.'.$get_file->guessExtension();
                
                try 
                {
                   
                    $get_file->move(
                        $this->getParameter('file_storage'),
                        $file_name
                    );
                }
                
                
                catch (FileException $e) {
                    
                }
          
            $message = new Messages();
            $message->setFilename($file_name);
            $message->setDateadded(new \DateTime('now'));
            $em->persist($message);
            $em->flush();
              
               // Serialize into an array the data that we need, in this case only name and id
             $responseArray[] = array(
                "id" => $message->getId(),
                "mensaje-almacenado" => 'File was stored successfully'
            );
           
         
        
       // return $response;
       return new JsonResponse($responseArray 
           //"Access-Control-Allow-Headers"=>"Origin, X-Requested-With, Content-Type, Accept"
           );
         
    }
}

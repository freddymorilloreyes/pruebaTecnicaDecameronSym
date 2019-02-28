<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 27/02/2019
 * Time: 4:32 PM
 */

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Hotel;

class HotelController extends AbstractController
{
    /**
     * @Route("/", name="hoteles")
     */
    public function showHoteles(){

        $hoteles = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->findAll();
        if (!$hoteles) {
            throw $this->createNotFoundException(
                'No hoteles found'
            );
        }
        return $this->render('hotel/hoteles.html.twig',[
            'hoteles'=>$hoteles,
        ]);
    }

    /**
     * @Route("/hotel/{id}",
     *     name="hotel",
     *     requirements={"id "="\d+"})
     */
    public function showHotel($id){

        $hotel = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->find($id);
        if (!$hotel) {
            throw $this->createNotFoundException(
                'No hotel found'
            );
        }
        return $this->render('hotel/hotel.html.twig',[
            'hotel'=>$hotel,
        ]);
    }

}
<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    /**
     * @Route("/api/product/all", name="product" , methods={"GET"})
     */
    public function index()
    {
        $dc = $this->getDoctrine();
        $Product=$dc->getRepository(Product::class)->findAll();
        $arrayCollection = array();

        foreach($Product as $item) {
            $arrayCollection[] = array(
                'id' => $item->getId(),
                'name'=> $item->getName(),
                'quantity'=> $item->getQuantity(),
                'updated_at'=> $item->getUdatedAt(),
                'created_at'=> $item->getCreatedAt(),
                // ... Same for each property you want
            );
        }

        return new JsonResponse($arrayCollection);
    }

    /**
     * @Route("/api/product/create", name="create_product",methods={"GET"})
     */
    public function createProduct(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $product = new Product();
        $product->setName("Pen");
        $product->setQuantity(100);
        $product->setUdatedAt( new \DateTime());
        $product->setCreatedAt( new \DateTime());

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$product->getId());
    }
}

<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Orders;
use Symfony\Component\HttpFoundation\Request;

class OrdersController extends AbstractController
{
    /**
     * @Route("/api/orders/all", name="orders", methods={"GET"})
     */
    public function index()
    {
        $dc = $this->getDoctrine();
        $Order = $dc->getRepository(Orders::class)->findAll();
        $arrayCollection = array();

        foreach ($Order as $item) {
            $arrayCollection[] = array(
                'id' => $item->getId(),
                'code' => $item->getCode(),
                'quantity' => $item->getQuantity(),
                'product' => $item->getProduct(),
                'address' => $item->getAddress(),
                'shippingDate' => $item->getShippingDate(),
                'updated_at' => $item->getUpdatedAt(),
                // ... Same for each property you want
            );
        }

        return new JsonResponse($arrayCollection);
    }

    /**
     * @Route("/api/orders/show/{id}", name="orders_show", methods={"GET"})
     */
    public function show($id)
    {
        $Order = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->find(intval($id));
        $arrayCollection = array();


            $arrayCollection[] = array(
                'id' => $Order->getId(),
                'code' => $Order->getCode(),
                'quantity' => $Order->getQuantity(),
                'product' => $Order->getProduct(),
                'address' => $Order->getAddress(),
                'shippingDate' => $Order->getShippingDate(),
                'updated_at' => $Order->getUpdatedAt(),
                // ... Same for each property you want
            );

        return new JsonResponse($arrayCollection);
    }

    /**
     * @Route("/api/orders/create", name="create_orders",methods={"POST"})
     */
    public function createOrder(Request $request)
    {

        $product_id = $request->query->get('productid');
        $quantity = $request->query->get('quantity');
        $address = $request->query->get('address');
        $shippingDate = $request->query->get('shippingDate');

        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($product_id);
        if (!is_null($product)) {
            if ($product->getQuantity() > $quantity) {
                $entityManager = $this->getDoctrine()->getManager();

                $order = new Orders();
                $order->setCode($this->generateRandomString(10));
                $order->setQuantity($quantity);
                $order->setProduct($product_id);
                $order->setShippingDate(new \DateTime($shippingDate));
                $order->setAddress($address);
                $order->setUpdatedAt(new \DateTime());

                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($order);

                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();

                $lastQuantity = $product->getQuantity() - $quantity;
                $product->setQuantity($lastQuantity);
                $entityManager->persist($product);
                $entityManager->flush();

                return new Response('Saved new order with id ' . $order->getId());
            } else {
                return new Response('Product has not enough quantity. Product has: ' . $product->getQuantity());
            }
        } else {
            return new Response('Product not found');
        }
    }


    /**
     * @Route("/api/orders/update/{id}", name="update_orders",methods={"POST"})
     */
    public function updateOrder($id, Request $request)
    {
        $quantity = $request->query->get('quantity');
        $address = $request->query->get('address');
        $shippingDate = $request->query->get('shippingDate');
        $timeNow = new \DateTime();

        $order = $this->getDoctrine()
            ->getRepository(Orders::class)
            ->find($id);

        $product = $this->getDoctrine()
            ->getRepository(Product::class)
            ->find($order->getProduct());

        $difference = date_diff($order->getShippingDate(),$timeNow);
        if (intval($difference->format('%R%a'))<0) {

            if ($product->getQuantity()+$order->getQuantity() > $quantity && ($product->getQuantity()+$order->getQuantity() - $quantity) >0) {
                $entityManager = $this->getDoctrine()->getManager();

                $lastQuantity = $product->getQuantity()+ $order->getQuantity() - $quantity;

                $product->setQuantity($lastQuantity);
                $entityManager->persist($product);
                $entityManager->flush();

                if (!is_null($quantity)) {
                    $order->setQuantity($quantity);
                } if (!is_null($shippingDate)) {
                    $order->setShippingDate(new \DateTime($shippingDate));
                } if (!is_null($address)) {
                    $order->setAddress($address);
                }
                $order->setUpdatedAt(new \DateTime());
                // tell Doctrine you want to (eventually) save the Product (no queries yet)
                $entityManager->persist($order);

                // actually executes the queries (i.e. the INSERT query)
                $entityManager->flush();



                return new Response('Saved new order with id ' . $order->getId());
            } else {
                return new Response('Product has not enough quantity.');
            }
        } else {
            return new Response('Can not update. Because Shipping date is late ' . $order->getShippingDate()->format('Y-m-d H:i:s'));
        }
    }

    public function generateRandomString($length = 16, $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
    {
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

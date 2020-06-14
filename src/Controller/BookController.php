<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BookController extends AbstractController
{
    public function getBooksByCustomerId($customerId)
    {
        $orders = [
            [
                'id' => 4524536,
                'bookingDate' => '12.06.2020',
                'room' => [
                    'id' => 4524345,
                    'type' => 'Regular',
                    'description' => 'Regular room',
                    'price' => 1000,
                    'number' => 143,
                    'hotel' => [
                        'id' => '4353453',
                        'name' => 'Mriya2',
                        'description' => 'Elite hotel',
                        'starNumber' => 5,
                    ],
                ],
                'customer' => [
                    'id' => $customerId,
                    'name' => 'Name1',
                    'phone' => '1234568932',
                    'email' => 'name1@yandex.ru'
                ],
            ],
            [
                'id' => 345345235,
                'bookingDate' => '15.06.2020',
                'room' => [
                    'id' => 4524455,
                    'type' => 'Regular',
                    'description' => 'Regular room',
                    'price' => 10000,
                    'number' => 143,
                    'hotel' => [
                        'id' => '4353454',
                        'name' => 'Mriya3',
                        'description' => 'Elite hotel',
                        'starNumber' => 5,
                    ],
                ],
                'customer' => [
                    'id' => $customerId,
                    'name' => 'Name1',
                    'phone' => '1234568932',
                    'email' => 'name1@yandex.ru'
                ],
            ],
        ];
        return $this->json($orders);
    }

    public function getBook($id)
    {
        $room = [
            'id' => $id,
            'bookingDate' => '12.06.2020',
            'room' => [
                'id' => 4524345,
                'type' => 'Regular',
                'description' => 'Regular room',
                'price' => 1000,
                'number' => 143,
                'hotel' => [
                    'id' => '4353453',
                    'name' => 'Mriya2',
                    'description' => 'Elite hotel',
                    'starNumber' => 5,
                ],
            ],
            'customer' => [
                'id' => 45635344,
                'name' => 'Name1',
                'phone' => '1234568932',
                'email' => 'name1@yandex.ru'
            ],
        ];
        return $this->json($room);
    }

    public function createBook()
    {
        return $this->json('Book has been created');
    }

    public function patchBook($id)
    {
        return $this->json('Book has been updated');
    }

    public function deleteBook($id)
    {
        return $this->json('Book has been deleted');
    }
}

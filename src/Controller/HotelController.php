<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HotelController extends AbstractController
{
    public function getHotels () {
        $hotels = [
            [
                'id' => 1954348,
                'name' => 'Mriya',
                'description' => 'Elite hotel',
                'starNumber' => 5,
            ],
            [
                'id' => 1954349,
                'name' => 'Mriya1',
                'description' => 'Elite hotel',
                'starNumber' => 5,
            ],
            [
                'id' => 1954350,
                'name' => 'Mriya2',
                'description' => 'Elite hotel',
                'starNumber' => 5,
            ]
        ];
        return $this->json($hotels);
    }

    public function getHotel ($id) {
        $hotel = [
            'id' => $id,
            'name' => 'Mriya',
            'description' => 'Elite hotel',
            'starNumber' => 5,
        ];
        return $this->json($hotel);
    }

    public function createHotel () {
        return $this->json('Hotel has been created');
    }

    public function patchHotel ($id) {
        return $this->json('Hotel has been updated');
    }

    public function deleteHotel ($id) {
        return $this->json('Hotel has been deleted');
    }
}

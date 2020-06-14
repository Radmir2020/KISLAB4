<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RoomController extends AbstractController
{
    public function getRoomsByHotelId($hotelId)
    {
        $rooms = [
            [
                'id' => 4524536,
                'type' => 'Lux',
                'description' => 'Lux room',
                'price' => 6000,
                'number' => 412,
                'hotel' => [
                    'id' => $hotelId,
                    'name' => 'Mriya2',
                    'description' => 'Elite hotel',
                    'starNumber' => 5,
                ],
            ],
            [
                'id' => 4524345,
                'type' => 'Regular',
                'description' => 'Regular room',
                'price' => 1000,
                'number' => 143,
                'hotel' => [
                    'id' => $hotelId,
                    'name' => 'Mriya2',
                    'description' => 'Elite hotel',
                    'starNumber' => 5,
                ],
            ],
        ];
        return $this->json($rooms);
    }

    public function getRoom($id)
    {
        $room = [
            'id' => $id,
            'type' => 'Lux',
            'description' => 'Lux room',
            'price' => 6000,
            'number' => 412,
            'hotel' => [
                'id' => 1954350,
                'name' => 'Mriya2',
                'description' => 'Elite hotel',
                'starNumber' => 5,
            ],
        ];
        return $this->json($room);
    }

    public function createRoom()
    {
        return $this->json('Room has been created');
    }

    public function patchRoom($id)
    {
        return $this->json('Room has been updated');
    }

    public function deleteRoom($id)
    {
        return $this->json('Room has been deleted');
    }
}

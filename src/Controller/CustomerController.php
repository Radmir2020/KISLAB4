<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CustomerController extends AbstractController
{
    public function getCustomers () {
        $customers = [
            [
                'id' => 1954348,
                'name' => 'Name1',
                'phone' => '1234568932',
                'email' => 'name1@yandex.ru'
            ],
            [
                'id' => 1954349,
                'name' => 'Name2',
                'phone' => '98765432345',
                'email' => 'name2@yandex.ru'
            ],
            [
                'id' => 1954350,
                'name' => 'Name3',
                'phone' => '876868768767',
                'email' => 'name3@yandex.ru'
            ]
        ];
        return $this->json($customers);
    }

    public function getCustomer ($id) {
        $customer = [
            'id' => $id,
            'name' => 'Name3',
            'phone' => '876868768767',
            'email' => 'name3@yandex.ru'
        ];
        return $this->json($customer);
    }

    public function createCustomer () {
        return $this->json('Customer has been created');
    }

    public function patchCustomer ($id) {
        return $this->json('Customer has been updated');
    }

    public function deleteCustomer ($id) {
        return $this->json('Customer has been deleted');
    }
}

<?php


namespace App\classes;


class Product
{
    protected $products = [];

    public function getAllProduct()
    {
        return [
            0 => [
                'id'          => 1,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599/-',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan sem sed finibus tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
                'image'       => 'sh5.jpg'
            ],
            1 => [
                'id'          => 2,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh3.jpg'
            ],
            2 => [
                'id'          => 3,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh2.jpg'
            ],
            3 => [
                'id'          => 4,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh5.jpg'
            ],
            4 => [
                'id'          => 5,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh5.jpg'
            ],
            5 => [
                'id'          => 6,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh2.jpg'
            ],
            6 => [
                'id'          => 7,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh5.jpg'
            ],
            7 => [
                'id'          => 8,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh5.jpg'
            ],
            8 => [
                'id'          => 9,
                'name'        => 'T-shirt',
                'category'    => 'Man fashion',
                'Brand'       => 'Yellow',
                'price'       => '3599',
                'description' => '',
                'image'       => 'sh2.jpg'
            ]
        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                return $product;
            }
        }
    }
}
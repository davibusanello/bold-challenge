<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ShopifyReview extends Resource
{
    protected $shopifyUrl = 'https://apps.shopify.com/';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function import(str $appName)
    {
        try {
            $apiUrl = $this->shopifyUrl . $appName . '/reviews.json';

            $reviews = collect($this->getJson($apiUrl));
            foreach ($reviews as $review) {
                //$this->syncPost($review);
            }
        } catch (\Exception $error) {
            return 'Error: ' . $error->getMessage();
        }


    }

    protected function getJson($url)
    {
        $response = file_get_contents($url, false);
        return json_decode($response);
    }

}

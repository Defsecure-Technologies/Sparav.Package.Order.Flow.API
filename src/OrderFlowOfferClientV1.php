<?php

namespace Sparav\OrderFlow;

use Illuminate\Support\Facades\Http;
use Sparav\OrderFlow\Models\OrderFlowOffer;

class OrderFlowOfferClientV1
{

    /**
     * Creates an OrderFlow
     * @param OrderFlowOffer $orderFlowOffer
     * @return \Illuminate\Http\Client\Response
     */
    public function add(OrderFlowOffer $orderFlowOffer) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDERFLOW_API_AUTH_USERNAME'), env('SPARAV_ORDERFLOW_API_AUTH_PASSWORD'))
            ->post('http://sparavorderflowapiprod.azurewebsites.net/api/v1/flow/offer', (array) $orderFlowOffer);
        return $response;
    }

}
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

    /**
     * Gets Order flows Offers  for a order flow
     * @param OrderFlowOffer $orderFlowOffer
     * @return \Illuminate\Http\Client\Response
     */
    public function offers(int $order_flow_id) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDERFLOW_API_AUTH_USERNAME'), env('SPARAV_ORDERFLOW_API_AUTH_PASSWORD'))
            ->get("http://sparavorderflowapiprod.azurewebsites.net/api/v1/flow/offer/{$order_flow_id}");
        return $response;
    }



}
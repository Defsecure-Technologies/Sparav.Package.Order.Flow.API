<?php
namespace Sparav\OrderFlow;

use Sparav\OrderFlow\Models\OrderFlow;
use Illuminate\Support\Facades\Http;

class OrderFlowClientv1
{

    /**
     * Creates an OrderFlow
     * @param OrderFlow $orderFlow
     * @return \Illuminate\Http\Client\Response
     */
    public function add(OrderFlow  $orderFlow): \Illuminate\Http\Client\Response
    {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDERFLOW_API_AUTH_USERNAME'), env('SPARAV_ORDERFLOW_API_AUTH_PASSWORD'))
            ->post("https://sparavorderflowapiprod.azurewebsites.net/api/v1/flow", (array) $orderFlow);
        return $response;
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Client\Response
     */
    public function orderflow(int $id) {
        $response = Http::timeout(30)
            ->withBasicAuth(env('SPARAV_ORDERFLOW_API_AUTH_USERNAME'), env('SPARAV_ORDERFLOW_API_AUTH_PASSWORD'))
            ->get("https://sparavorderflowapiprod.azurewebsites.net/api/v1/flow/{$id}");
        return $response;
    }

}
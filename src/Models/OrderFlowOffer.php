<?php


namespace Sparav\OrderFlow\Models;

class OrderFlowOffer
{

    /**
     * @OA\Property(type="integer", description="The key (ID) to an offer")
     */
    public int $order_flow_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $billing_model_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $offer_id;

    /**
     * @OA\Property(type="integer")
     */
    public int $product_id;

    /**
     * @OA\Property(type="boolean")
     */
    public bool $is_trial;

}
<?php
namespace Sparav\OrderFlow\Models;

/**
 * @OA\Schema(
 *   schema="OrderFlow",
 *   type="object"
 * )
 */
class OrderFlow
{

    /**
     * @OA\Property(type="string")
     */
    public string $name;

    /**
     * @OA\Property(type="integer")
     */
    public int $campaign_id;

}
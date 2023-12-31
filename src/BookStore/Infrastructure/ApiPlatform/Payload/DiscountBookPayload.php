<?php

declare(strict_types=1);

namespace App\BookStore\Infrastructure\ApiPlatform\Payload;

use Symfony\Component\Validator\Constraints as Assert;

final readonly class DiscountBookPayload
{
    public function __construct(
        #[Assert\Range(min: 0, max: 100)]
        public int $discountPercentage,
    ) {
    }
}

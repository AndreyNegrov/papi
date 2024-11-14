<?php

declare(strict_types=1);

namespace Beeclever\Telephony\Dto;

class UserInfoDtoField
{
    public function __construct(
        public readonly string $field,
        public readonly string $label,
        public readonly mixed $value,
    ) {
    }
}

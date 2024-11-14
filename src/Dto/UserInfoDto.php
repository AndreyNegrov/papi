<?php

declare(strict_types=1);

namespace Beeclever\Telephony\Dto;

class UserInfoDto
{
    /**
     * @param UserInfoDtoField[] $userInfoDtoFields
     */
    public function __construct(
        public readonly array $userInfoDtoFields,
    ) {
    }
}

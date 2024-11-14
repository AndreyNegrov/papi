<?php

declare(strict_types=1);

namespace Beeclever\Telephony\Dto;

class UserInfoDtoBuilder
{
    /**
     * @var UserInfoDtoField[]
     */
    private array $userInfoDtoFields = [];

    public function addUserInfoField(string $field, string $label, mixed $value): UserInfoDtoBuilder
    {
        $this->userInfoDtoFields[] = new UserInfoDtoField($field, $label, $value);

        return $this;
    }

    public function build(): UserInfoDto
    {
        return new UserInfoDto($this->userInfoDtoFields);
    }
}

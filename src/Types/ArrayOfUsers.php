<?php

namespace TelegramBot\Api\Types;

abstract class ArrayOfUsers
{
    public static function fromResponse($data)
    {
        $arrayOfUsers = [];
        foreach ($data as $user) {
            $arrayOfUsers[] = User::fromResponse($user);
        }

        return $arrayOfUsers;
    }
}

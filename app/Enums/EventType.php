<?php

namespace App\Enums;

enum EventType: string
{
    case Onsite = 'onsite';
    case Online = 'online';
    case Hybrid = 'hybrid';

    public function label(): string
{
    return match ($this) {
        self::Onsite => 'Presence Training',
        self::Online => 'Online Course',
        self::Hybrid => 'Hybrid Course',
    };
}

}



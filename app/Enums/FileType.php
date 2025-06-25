<?php

declare(strict_types=1);

namespace App\Enums;

enum FileType: string
{
    case PDF = 'pdf';
    case CSV = 'csv';
    case XML = 'xml';
}
<?php

namespace App\Enums;

enum FormBlockType: string
{
    case none = "none";

    case consent = "consent";

    case checkbox = "checkbox";
    case radio = "radio";

    case long = "input-long";
    case short = "input-short";
    case email = "input-email";
    case link = "input-link";
    case number = "input-number";
    case phone = "input-phone";
}

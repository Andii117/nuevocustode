<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Secciones_puerta extends Model implements AuditableContract
{
    use Auditable;

    //
}

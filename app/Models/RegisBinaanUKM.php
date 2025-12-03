<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisBinaanUKM extends Model
{
    protected $fillable = [
        'Name',
        'Age',
        'Gender',
        'Email',
        'NoContactTenant',
        'nameTenant',
        'sectorTenant',
        'addreasTenant',
        'aboutTenant',
        'Logo',
        'LBOM',
        'LHalal',
        'LSNI',
        'LHKI',
        'LNIB',
        'LPIRT',
        'FB',
        'IG',
        'statusTenant',
        'DateRegist',
        'yearTenant',
        'Slug',
    ];
}

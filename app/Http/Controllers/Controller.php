<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function setMetaSeo($object)
    {
        SEOMeta::setTitleDefault($object->meta_title ?? $object->name);
        SEOMeta::setDescription($object->meta_description ?? '');
    }
}

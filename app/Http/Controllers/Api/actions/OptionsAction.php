<?php
namespace App\Http\Controllers\Api\actions;

use Illuminate\Http\Request;
use Illuminate\Routing\RouteAction;

class OptionsAction extends RouteAction
{
    /**
     * @var array the HTTP verbs that are supported by the collection URL
     */
    public $collectionOptions = ['GET', 'POST', 'HEAD', 'OPTIONS'];
    /**
     * @var array the HTTP verbs that are supported by the resource URL
     */
    public $resourceOptions = ['GET', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'];


    /**
     * @param Request $request
     */
    public function run(Request $request)
    {
        $options = $this->collectionOptions;
        $headers = $request->headers;
        $headers->set('Allow', implode(', ', $options));
        $headers->set('Access-Control-Allow-Methods', implode(', ', $options));
    }
}

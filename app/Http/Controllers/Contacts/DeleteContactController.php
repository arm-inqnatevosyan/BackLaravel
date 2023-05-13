<?php

namespace App\Http\Controllers\Contacts;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class DeleteContactController extends BaseController
{
    public function __invoke($id){
        $delete = Contact::query()->find($id)->delete();
        return $this->sendSuccess($delete,'success');
    }
}

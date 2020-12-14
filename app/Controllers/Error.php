<?php

namespace App\Controllers;

class Error extends BaseController
{
    public function delete($id)
    {
        return view('errors/html/error_404');
    }

    //--------------------------------------------------------------------

}

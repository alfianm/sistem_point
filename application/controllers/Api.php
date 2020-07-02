<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->methods['users_get']['limit'] = 10;
        $this->methods['hadiah_get']['limit'] = 10;
    }

    public function users_get()
    {
        // Users from a data store e.g. database
        $users = $this->global->getPointUser();

        // Check if the users data store contains users
        if ( $users )
        {
            // Set the response and exit
            $this->response( $users, 200 );
        }
        else
        {
            // Set the response and exit
            $this->response( [
                'status' => false,
                'message' => 'Data user tidak tersedia.'
            ], 404 );
        }
    }

    public function hadiah_get()
    {
        // Users from a data store e.g. database
        $hadiah = $this->global->getHadiah();

        // Check if the hadiah data store contains hadiah
        if ( $hadiah )
        {
            // Set the response and exit
            $this->response( $hadiah, 200 );
        }
        else
        {
            // Set the response and exit
            $this->response( [
                'status' => false,
                'message' => 'Data hadiah tidak tersedia.'
            ], 404 );
        }   
    }
}
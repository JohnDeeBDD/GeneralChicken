<?php

namespace GeneralChicken;

class API{

    public function doRegisterRoutes()
    {
        //die("line 132");
        register_rest_route(
            "general-chicken/v1",
            "set-data",
            array(
                'methods' => ['POST', 'GET'],
                'callback' => function () {
                    //return [];
                    $this->doSetData($_REQUEST);
                    return;
                },
                'permission_callback' => function () {

                    //Remove this line to active nonce system:
                    return TRUE;

                    if (!(current_user_can("install_plugins"))) {
                        return FALSE;
                    }
                    return TRUE;
                },
                'validate_callback' => function () {
                    return TRUE;
                }
            )
        );
    }

    private function doSetData($data){
        $my_post = array(
            'post_title'    => "Remote Plugin Activation",
            'post_status'   => 'draft',
            'post_type'     => "general-chicken"
);
 
// Insert the post into the database
        $ID = wp_insert_post( $my_post );
        update_post_meta( $ID, 'data', var_export($data, true) );
    }

}
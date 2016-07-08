<?php

/**
 * @file
 * Contains \Drupal\slack_eceive\Controller\SlackReceiveController.
 */

namespace Drupal\slack_receive\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller routines for test_api routes.
 */
class SlackReceiveController extends ControllerBase {

  /**
   * Callback for `my-api/get.json` API method.
   */
  public function get_callback( Request $request ) {

    $response['data'] = 'Some test data to return';
    $response['method'] = 'GET';

    return new JsonResponse( $response );
  }

}

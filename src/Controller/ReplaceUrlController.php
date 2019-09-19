<?php

namespace Drupal\replace_url_file\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class VideoSitemapController.
 *
 * @package Drupal\panoptix_customizations\Controller
 */
class ReplaceUrlFileController extends ControllerBase {

  /**
   * Returns the video sitemap variant.
   */
  public function getSitemap(Request $request, $variant = NULL) {
    $file = drupal_get_path('module', 'replace_url_file') . '/files/video-sitemap.xml';

    return new BinaryFileResponse($file);
  }
}
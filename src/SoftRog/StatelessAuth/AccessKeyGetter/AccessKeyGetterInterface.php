<?php

namespace SoftRog\StatelessAuth\AccessKeyGetter;

interface AccessKeyGetterInterface
{
  /**
   * Get accessKey
   *
   * @param string $accessKeyId
   * @return string Returns the accessKey
   */
  public function get($accessKeyId);
}

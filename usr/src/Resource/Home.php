<?php
/**
 * @file      AblePolecat-Stub/usr/src/Resource/Home.php
 * @brief     Home page data model.
 *
 * @author    Karl Kuhrman
 * @copyright [BDS II License] (https://github.com/kkuhrman/AblePolecat/blob/master/LICENSE.md)
 */

require_once(ABLE_POLECAT_CORE . DIRECTORY_SEPARATOR . 'Resource.php');

class AblePolecat_Stub_Resource_Home extends AblePolecat_ResourceAbstract {
  
  /**
   * @var resource Instance of singleton.
   */
  private static $Resource;
  
  /**
   * Constants.
   */
  const UUID = 'ad37da13-c38e-11e4-a12d-0050569e00a2
';
  const NAME = 'home';
  
  /********************************************************************************
   * Implementation of AblePolecat_CacheObjectInterface
   ********************************************************************************/
  
  /**
   * Create a new instance of object or restore cached object to previous state.
   *
   * @param AblePolecat_AccessControl_SubjectInterface $Subject
   *
   * @return Instance of AblePolecat_Stub_Resource_Home
   */
  public static function wakeup(AblePolecat_AccessControl_SubjectInterface $Subject = NULL) {
    
    if (!isset(self::$Resource)) {
      self::$Resource = new AblePolecat_Stub_Resource_Home();
    }
    return self::$Resource;
  }
  
  /********************************************************************************
   * Helper functions.
   ********************************************************************************/
  
  /**
   * Validates request URI path to ensure resource request can be fulfilled.
   *
   * @throw AblePolecat_Resource_Exception If request URI path is not validated.
   */
  public function validateRequestPath() {
    
    $request_path = AblePolecat_Host::getRequest()->getRequestPath(FALSE);
    if (!isset($request_path[0]) || ($request_path[0] != '') || (count($request_path) > 1)) {
      $request_path = AblePolecat_Host::getRequest()->getRequestPath();
      throw new AblePolecat_Resource_Exception($request_path . ' is not a valid request URI path for ' . __CLASS__ . '.');
    }
  }
  
  /**
   * Extends __construct().
   */
  protected function initialize() {
    parent::initialize();
    $this->setId(self::UUID);
    $this->setName(self::NAME);
  }
}

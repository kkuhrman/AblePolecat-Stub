<?php
/**
 * @file      AblePolecat-Stub/usr/src/Response.php
 * @brief     Base class for all HTTP responses.
 *
 * @author    Karl Kuhrman
 * @copyright [BDS II License] (https://github.com/kkuhrman/AblePolecat/blob/master/LICENSE.md)
 */

require_once(implode(DIRECTORY_SEPARATOR, array(ABLE_POLECAT_CORE, 'Message', 'Response', 'Xhtml', 'Tpl.php')));

class AblePolecat_Stub_Response extends AblePolecat_Message_Response_Xhtml_Tpl {
  
  /**
   * Registry article constants.
   */
  const UUID = '34d689dd-c390-11e4-a12d-0050569e00a2';
  const NAME = 'AblePolecat_Stub_Response';
  
  /********************************************************************************
   * Implementation of AblePolecat_DynamicObjectInterface.
   ********************************************************************************/
  
  /**
   * Create a concrete instance of AblePolecat_MessageInterface.
   *
   * @return AblePolecat_MessageInterface Concrete instance of message or NULL.
   */
  public static function create() {    
    $Response = self::setConcreteInstance(new AblePolecat_Stub_Response());
    $ArgsList = self::unmarshallArgsList(__FUNCTION__, func_get_args());
    return self::getConcreteInstance();
  }
    
  /********************************************************************************
   * Helper functions.
   ********************************************************************************/
  
  /**
   * Post processing of entity body is final edit. Typically simple text substitutions.
   *
   * @param $string entityBody
   *
   * @return string.
   */
  protected function postProcessEntityBody($entityBody) {
    
    //
    // @todo: Standard string substitutions should probably be stored in db or conf file
    //
    $baseUrl = AblePolecat_Host::getRequest()->getBaseUrl(FALSE);
    $themeUrl = implode(AblePolecat_AccessControl_Resource_LocaterInterface::URI_SLASH, array($baseUrl, 'theme', 'default'));
    $this->setSubstitutionMarker('{!AblePolecat_Stub.Title}', 'Able Polecat Stub Project | Home');
    $this->setSubstitutionMarker('{!AblePolecat_Stub.baseUrl}', $baseUrl);
    $this->setSubstitutionMarker('{!AblePolecat_Stub.themeUrl}', $themeUrl);
    
    return parent::postProcessEntityBody($entityBody);
  }
}
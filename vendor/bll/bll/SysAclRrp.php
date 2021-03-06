<?php

/**
 *  Framework 
 *
 * @link       
 * @copyright Copyright (c) 2017
 * @license   
 */
namespace BLL\BLL;

/**
 * Business Layer class for report Configuration entity
 */
class SysAclRrp extends \BLL\BLLSlim {

    /**
     * constructor
     */
    public function __construct() {
        //parent::__construct();
    }

    /**
     * DAta insert function
     * @param array | null $params
     * @return array
     */
    public function insert($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->insert($params);
    }

    /**
     * Data update function
     * @param array $params
     * @return array
     */
    public function update($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->update($params);
    }

    /**
     * Data delete function
     * @param array $params
     * @return array
     */
    public function delete($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->delete($params);
    }

    /**
     * get all data
     * @param array $params
     * @return array
     */
    public function getAll($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->getAll($params);
    }

    /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillGrid($params = array()) {

        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        $resultSet = $DAL->fillGrid($params);
        return $resultSet['resultSet'];
    }

    /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function fillGridRowTotalCount($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        $resultSet = $DAL->fillGridRowTotalCount($params);
        return $resultSet['resultSet'];
    }
  
  
   /**
     * Function to fill datagrid on user interface layer
     * @param array | null $params
     * @return array
     */
    public function fillRrpList ($params = array()) {        
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        $resultSet = $DAL->fillRrpList($params);  
        return $resultSet['resultSet'];
    }
    
    /**
     * Function to get datagrid row count on user interface layer
     * @param array $params
     * @return array
     */
    public function fillRrpListRtc($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        $resultSet = $DAL->fillRrpListRtc($params);  
        return $resultSet['resultSet'];
    }    
    /**
     * public key / private key and value update function
     * @param array | null $params
     * @return array
     */
    public function makeActiveOrPassive($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->makeActiveOrPassive($params);
    } 
    /**
    * DAta insert function
    * @param array | null $params
    * @return array
    */
    public function transferRolesPrivilege($params = array()) {
        $DAL = $this->slimApp->getDALManager()->get('sysAclRrpPDO');
        return $DAL->transferRolesPrivilege($params);
    }  
    

}

<?php

/**
 * @link: https://github.com/aztech/app-enlight-php-client
 * @link: http://appenlight.com
 * @package AppEnlight
 *
 * @author Tomasz Suchanek <tomasz.suchanek@gmail.com>
 */

namespace AppEnlight\Endpoint\Data;

/**
 * Base class for all Metrics
 */
abstract class MetricBase {

  /**
   * @var float
   */
  protected $_main;

  /**
   * @var float
   */
  protected $_nosql;

  /**
   * @var float
   */
  protected $_nosqlCalls;

  /**
   * @var float
   */
  protected $_remote;

  /**
   * @var float
   */
  protected $_remoteCalls;

  /**
   * @var float
   */
  protected $_sql;

  /**
   * @var float
   */
  protected $_sqlCalls;

  /**
   * @var float
   */
  protected $_tmpl;

  /**
   * @var float
   */
  protected $_tmplCalls;

  /**
   * @var float
   */
  protected $_custom;

  /**
   * @var float
   */
  protected $_customCalls;

  /**
   * @var float
   */
  protected $_unknown;

  /**
   *
   * @return float
   */
  public function getMain() {
    return $this->_main;
  }

  /**
   * @return float
   */
  public function getNosql() {
    return $this->_nosql;
  }

  /**
   * @return integer
   */
  public function getNosqlCalls() {
    return $this->_nosqlCalls;
  }

  /**
   * @return float
   */
  public function getRemote() {
    return $this->_remote;
  }

  /**
   * @return integer
   */
  public function getRemoteCalls() {
    return $this->_remoteCalls;
  }

  /**
   * @return float
   */
  public function getSql() {
    return $this->_sql;
  }

  /**
   * @return integer
   */
  public function getSqlCalls() {
    return $this->_sqlCalls;
  }

  /**
   * @return float
   */
  public function getTmpl() {
    return $this->_tmpl;
  }

  /**
   * @return integer
   */
  public function getTmplCalls() {
    return $this->_tmplCalls;
  }

  /**
   * @return float
   */
  public function getCustom() {
    return $this->_custom;
  }

  /**
   * @return integer
   */
  public function getCustomCalls() {
    return $this->_customCalls;
  }

  /**
   * @param float $main
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setMain($main) {
    $this->_main = (float) $main;
    return $this;
  }

  /**
   * @param float $nosql
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setNosql($nosql) {
    $this->_nosql = (float) $nosql;
    return $this;
  }

  /**
   * @param integer $nosql_calls
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setNosqlCalls($nosql_calls) {
    $this->_nosqlCalls = (integer) $nosql_calls;
    return $this;
  }

  /**
   * @param float $remote
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setRemote($remote) {
    $this->_remote = (float) $remote;
    return $this;
  }

  /**
   * @param integer $remote_calls
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setRemoteCalls($remote_calls) {
    $this->_remoteCalls = (integer) $remote_calls;
    return $this;
  }

  /**
   *
   * @param float $sql
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setSql($sql) {
    $this->_sql = (float) $sql;
    return $this;
  }

  /**
   * @param integer $sql_calls
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setSqlCalls($sql_calls) {
    $this->_sqlCalls = (integer) $sql_calls;
    return $this;
  }

  /**
   * @param float $tmpl
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setTmpl($tmpl) {
    $this->_tmpl = (float) $tmpl;
    return $this;
  }

  /**
   * @param integer $tmpl_calls
   * @return AppEnlight\Endpoint\Data\MetricBase
   */
  public function setTmplCalls($tmpl_calls) {
    $this->_tmplCalls = (integer) $tmpl_calls;
    return $this;
  }

  /**
   * @param float $custom
   * @return AppEnlight\Endpoint\Data\MetricBases
   */
  public function setCustom($custom) {
    $this->_custom = (float) $custom;
    return $this;
  }

  /**
   * @param integer $custom_calls
   * @return AppEnlight\Endpoint\Data\MetricBases
   */
  public function setCustomCalls($custom_calls) {
    $this->_customCalls = (integer) $custom_calls;
    return $this;
  }

  /**
   * @return array
   */
  public function toArray() {
    return array(
      "custom" => $this->getCustom(),
      "custom_calls" => $this->getCustomCalls(),
      "main" => $this->getMain(),
      "nosql" => $this->getNosql(),
      "nosql_calls" => $this->getNosqlCalls(),
      "remote" => $this->getRemote(),
      "remote_calls" => $this->getRemoteCalls(),
      "sql" => $this->getSql(),
      "sql_calls" => $this->getSqlCalls(),
      "tmpl" => $this->getTmpl(),
      "tmpl_calls" => $this->getTmplCalls()
    );
  }

}

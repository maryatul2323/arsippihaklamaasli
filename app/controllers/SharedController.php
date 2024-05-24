<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * getcount_datapihak Model Action
     * @return Value
     */
	function getcount_datapihak(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_pihak";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_berkasdihapus Model Action
     * @return Value
     */
	function getcount_berkasdihapus(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tb_hapus";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}

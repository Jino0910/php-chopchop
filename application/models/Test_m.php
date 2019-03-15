<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Test_m extends CI_model {
	
	/**
	 * 리스트 가져오기
	 */
	function get_list($param)
	{
	
		$addWhere = '';
		$addWhere .= ($param['type'] != 'all') ? "and category = '".$param['type']."'" : '';
	
		$sql = "SELECT
					*, ROUND(AVG(rating),1) as aver_rating, COUNT(*) as sum_count
				FROM
					chop
				WHERE
					1 $addWhere
				GROUP BY
					wgs84_x, wgs84_y

		";
		$result = $this->db->query($sql)->result_array();
		return $result;
	}
}

?>
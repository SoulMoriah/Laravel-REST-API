<?php

namespace App\Helpers;
/**
 * 
 */
class APIHelpers
{
	
	public static function createAPIResponse($is_error, $code, $message, $content)
	{
		$result = [];
		if ($is_error) {
			$result['succes'] = false;
			$result['code'] = $code;
			$result['message'] = $message;
		}else{
			$result['succes'] = true;
			$result['code'] = $code;
			if ($content == null) {
				$result['message'] = $message;
			}else{
				$result['data'] = $content;
			}
		}

		return $result;

	}
}
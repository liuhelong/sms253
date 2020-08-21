<?php

namespace Liuhelong\Sms253;
use Log;
use Illuminate\Support\Facades\Http;

class Sms
{
    public function send($mobile,$content){
		$params = [
			"account" => config('sms253.account'),
			"password" => config('sms253.password'),
			"msg" => $content,
			"phone" => $mobile,
		];
		
		$url = config('sms253.api');
		
		$response = Http::post($url,$params);
		//dd($response->json());
		// 接口正常响应
		if($response->successful()){
			$data = $response->json();
			if($data['code']==0){
				return true;
			}
			
			throw new \Exception($data['errorMsg']);
		}
		
		// 非正常响应 抛出异常
		$response->throw();
		
	}
	
}

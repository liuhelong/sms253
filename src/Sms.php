<?php

namespace Liuhelong\Sms;
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
		
		// 接口正常响应
		if($response->successful()){
			if($response->code==0){
				return true;
			}
			
			throw new \Exception($response->errorMsg);
		}
		
		// 非正常响应 抛出异常
		$response->throw();
		
	}
	
}

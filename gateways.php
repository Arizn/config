<?php

return [
    'gates' => 
		[
			[
				'name'=>'paypal',
				'logo'=>'paypal.png', // storage/gateways
				'class'=>'\App\Logic\Gateways\Paypal',
				'currencies'=>[
					'AUD'=>'AUD',
					'BRL'=>'BRL',
					'CAD'=>'CAD',
					'CZK'=>'CZK',
					'DKK'=>'DKK',
					'EUR'=>'EUR',
					'HKD'=>'HKD',
					'ILS'=>'ILS',
					'MYR'=>'MYR',
					'MXN'=>'MXN',
					'NOK'=>'NOK',
					'NZD'=>'NZD',
					'PHP'=>'PHP',
					'PLN'=>'PLN',
					'GBP'=>'GBP',
					'RUB'=>'RUB',
					'SGD'=>'SGD',
					'SEK'=>'SEK',
					'TWD'=>'TWD',
					'THB'=>'THB',
					'TRY'=>'TRY',
					'USD'=>'USD'
					],
				'functions'=>['send','collect'],
				
			],
			[
				'name'=>'perfectmoney',
				'logo'=>'perfectmoney.png',
				'class'=>'\App\Logic\Gateways\PerfectMoney',
				'functions'=>['send','collect'],
				'currencies'=>[],
			],
			[
				'name'=>'Advcash',
				'logo'=>'advcash.png',
				'class'=>'\App\Logic\Gateways\PerfectMoney',
				'functions'=>['send','collect'],
				'currencies'=>[],
				
			],
		]
];

<?php

namespace App;

class UTrust
{

    private static $banks = [
        [
            "website"    => "www.bankofcyprus.com",
            "bic"        => "BCYPCY2N",
            "full_name"  => "ΤΡΑΠΕΖΑ ΚΥΠΡΟΥ (001)",
            "short_name" => "(+357) 2212 8000",
            "bank_id"    => "bda8eb884efcef7082792d45",
            "api"        => "http://api.bocapi.net/v1/api/"
        ],
        [
            "website"    => "www.anotherbank.com",
            "bic"        => "BCYPCY2N02",
            "full_name"  => "Another Bank (002)",
            "short_name" => "(+357) 2212 8000",
            "bank_id"    => "bda8eb884efcef7082792d45",
            "api"        => "http://api.bocapi.net/v1/api/"
        ]

    ];

    public static function getBanks()
    {
        return self::$banks;
    }

    public static function getBOCAuthProviders()
    {
        return [
            [
                'auth'     => '03300910683400',
                'id'       => '123456789',
                'group_id' => '11'
            ],
            [
                'auth'     => '012305004292',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '01730902552000',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '017413024749',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '012805040449',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '013620002040',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '012405014872',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '01790902203700',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '056705004604',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '03300901871400',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '011220002057',
                'id'       => '123456789',
                'group_id' => '11'

            ],
            [
                'auth'     => '01540901198200',
                'id'       => '123456789',
                'group_id' => '11'

            ],
        ];
    }
}
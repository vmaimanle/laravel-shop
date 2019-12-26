<?php

return [
    'alipay' => [
        'app_id'         => '2016101500689966',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAnUMlUHpOyxXVJW8IJvFPYvUE56GFq+VeEWP6W3kz6AL2yiqeE9Z0xgOY+tcQ3NWz5BVQAp6dDUa3Vy1s3NCzkNAIpiIF+rdL/3ofD86+yyph9GqU1th3jpfgrS2CrCjEgVdlxfzNe/CITTwDsADsf4p53LEJgirPX9UhAG6uQltbf8egHnoR7qF4E3qFqL4wFE5CORTtxHMk2mcQ8zhQzwyo3HM189FfYaGsZiPLjMBqwsH0KvBEL9yVH/Y4/2OrLOjfweHfzwfdPAd20s5RKiLjn3IuURrqzC4P/234hkQ5AIqkP+cC9wnqjt54z7b5ip/iUwfh0hGJl3hzYFSIJwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAmpYyYkrcJDs/HV+aM17vxauaK2Szce/JvOToOkgFj3McmnZbOKTgToeyS5jxD+UVvXqND6fR7QUc2gIY3EUhYaC0yftGgodReG3zy5TVtL4f+dp/KWP6k5bm5CxlcVlvN5raO9PcKbGliIKmG9a5+dfgX9BF9HOVW/qSBiI5w4ZtiCtuHJdGD+pwH2PazpFjSNRCgOjw5XfXk4Md7U8npJlf+xptsuUutRJQ+eLhgoZO7APkv6qSUlo/WwWCgsLBSjZpJK8zVkK6Xz2nULatBLo/T+WYz4o0krssiSlzwXyF1efKMHgiR4OxSEZ3NeYrodzm2Hdmj6ur4wv3ZUsctQIDAQABAoIBAQCVXxhkPe2l3NHJsj0v8kZBfOVFlNKH/6mxqoZy+nDVAefboQ3YGAjeGOTBg5E7SKLPKgHv5LtGCbCtP2WCQhJVYZIPsYuaSOMCOUxfpPsy4JvJM8W32vGfdyq3w+Zptn9u/WRudvLAHvXSiFu1frDJqD0YmAlggecKr342CxBByrqDBnI9ubM0AMolO9CnFKnYYrEcVtT4nrGlK5px2ox7fFRJI4Z5Gh4iWmeM2jo9cbOqpx1uTsKAopHQtvywY4iSnoX7L1fmNT/UbMBKT+aCvswUeYfzkX5RtVfZg4BsNeqUK8GC5dj/2YsmhaJISoViVmNuLY/sa3gWtw3IKQXpAoGBAN3by9lxEDa1jlpoYhNkeOpkWQC+j+tr2B9gU2cj7AbDGDwna8FuOCmETJWIghLAYSCKuXRiwSwWr9AkxGbVsVOL7010Qd1wY9WyiNI0iXTyyNK1d/4MFKK0TOFDzvatsbOL8JjVLwEIVuuaw1veDYnm4/ue6wldFC9dOoaI1G/HAoGBALJgMwbGZyDC8Ox24C+F86HvwhGRSYyYpeEcgKPJ7MbWIiom0Ibpj9w4nvK5WmAjg9A1/d05Q3bwfmrEmzQMFXWTwOiRZibLscUYahMFlgHdWht85xs9eXWO02qvszUIH8Cx/u57UELqIAKAiALgt2cy0cNvfQavxsphxyu0OoejAoGAJcoZh9kdVORJ8hZTllAH1IzxKBJNe2EsN/P1YN0ah/BVQXHJhfIbON8jGFlfJoiEQsG+YxerJbJbkg2hMo71nHB6e2vxCCHrr2uwqHVwcG4mTNXCMZCnNyuU6M3fA9+EJDwS6EVvszJTc+AxpIVHMxUUAjkIedjT5llv7ZiC7uMCgYBVzw9c9/7OdNj/eCRa2D6erT8XwmO2XgyWYWbE5DOiZ4qh6nAwJpWNJDPaoi4Gx672b7LDRHPe+MxnwlLDU/jSyhRoDOIuUZkgLqGAqxRBq2FYjdqDcSxH0ECGNyWnolPcGASCZxHyTry9V2WWtNGltH3SXYSwvciMvULaFGZ/rwKBgQCw0iPSNHH0KQXS8uq+jkECVOkozdyIs5nOJNP2DhRJTRw6LlPD4sNTQ6zUph9EZ/1VfPdhprS7Bo2uqHAdP22czdkszyfZWZM3wgHqgnQR0Lfk4BxF4ebasyucSYfWSEaFa3o5mTW+OYjrX1zVp7QwHwieMihsAsVRV2TYSNnNIg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

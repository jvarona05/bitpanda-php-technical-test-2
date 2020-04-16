---
title: API Reference

language_tabs:
- bash
- javascript
- php

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Transactions


<!-- START_e91b0af0278029e1f6c103542135b6be -->
## Get Transactions

Returns the transactions in a json with an extra parameter which will specify the source

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/transactions?source=db" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/transactions"
);

let params = {
    "source": "db",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/v1/transactions',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'query' => [
            'source'=> 'db',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
    "data": [
        {
            "type": "transaction",
            "attributes": {
                "code": "T_218_ljydmgebx",
                "amount": 8617,
                "user_id": 375,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 1
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_335_wmhrbjxld",
                "amount": 6502,
                "user_id": 1847,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 2
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_327_shqnyrctz",
                "amount": 101,
                "user_id": 3031,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 3
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_570_qtbdktdxn",
                "amount": 5032,
                "user_id": 5441,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 4
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_696_yruawfpis",
                "amount": 2710,
                "user_id": 6019,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 5
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_445_qxlmjdoas",
                "amount": 9062,
                "user_id": 948,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 6
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_836_ajvlpejea",
                "amount": 3112,
                "user_id": 4369,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 7
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_681_mefjlmzuz",
                "amount": 6282,
                "user_id": 3814,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 8
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_351_tfdmvutme",
                "amount": 8380,
                "user_id": 1262,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 9
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_271_hlixsoqta",
                "amount": 8353,
                "user_id": 5395,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 10
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_624_vmochibpg",
                "amount": 6026,
                "user_id": 2632,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 11
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_395_hguojrgdl",
                "amount": 175,
                "user_id": 6968,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 12
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_224_himeftdia",
                "amount": 4889,
                "user_id": 3674,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 13
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_894_ykmqjgdwo",
                "amount": 4556,
                "user_id": 8540,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 14
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_771_crijwmlhi",
                "amount": 7464,
                "user_id": 7988,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 15
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_141_dlkkwcvqi",
                "amount": 4353,
                "user_id": 6776,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 16
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_924_jporprlnq",
                "amount": 1583,
                "user_id": 8976,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 17
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_743_anyfqbtai",
                "amount": 5752,
                "user_id": 6887,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 18
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_922_aicbljcdw",
                "amount": 1231,
                "user_id": 1916,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 19
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_246_lvqdeoypx",
                "amount": 8851,
                "user_id": 950,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 20
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_096_hcsqzzvho",
                "amount": 742,
                "user_id": 3412,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 21
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_989_iarrgdtcq",
                "amount": 119,
                "user_id": 9491,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 22
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_763_htmagmnre",
                "amount": 7976,
                "user_id": 6016,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 23
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_752_mjbwdpcge",
                "amount": 5976,
                "user_id": 449,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 24
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_576_bylwniwho",
                "amount": 8035,
                "user_id": 2515,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 25
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_838_lenphejbj",
                "amount": 5507,
                "user_id": 867,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 26
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_126_jpffzmrnj",
                "amount": 7510,
                "user_id": 6472,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 27
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_654_fgrfdhrvt",
                "amount": 6160,
                "user_id": 5167,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 28
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_931_tvsksgtcs",
                "amount": 8925,
                "user_id": 7766,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 29
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_128_oopsjulgg",
                "amount": 2465,
                "user_id": 6598,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 30
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_716_elwcpchjp",
                "amount": 1658,
                "user_id": 6149,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 31
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_035_dihnlsrbi",
                "amount": 5677,
                "user_id": 4457,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 32
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_943_mlvxcuspl",
                "amount": 2621,
                "user_id": 4934,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 33
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_988_jjyaacsxc",
                "amount": 7645,
                "user_id": 7121,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 34
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_524_egtxfmlbc",
                "amount": 4006,
                "user_id": 1420,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 35
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_022_hsrqfsmja",
                "amount": 3492,
                "user_id": 7091,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 36
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_618_vouqdxemh",
                "amount": 148,
                "user_id": 1838,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 37
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_243_dhuskwtoh",
                "amount": 2614,
                "user_id": 2974,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 38
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_216_qorynonhk",
                "amount": 3759,
                "user_id": 3534,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 39
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_509_jpqmoqiaf",
                "amount": 2297,
                "user_id": 5933,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 40
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_516_wfxfzmvpp",
                "amount": 3488,
                "user_id": 2467,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 41
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_011_phzomfguw",
                "amount": 9844,
                "user_id": 2485,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 42
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_057_tpxymzluv",
                "amount": 460,
                "user_id": 8538,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 43
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_069_tmrvtochy",
                "amount": 123,
                "user_id": 7966,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 44
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_996_gmgduxuvt",
                "amount": 5818,
                "user_id": 5412,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 45
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_816_prvlpksih",
                "amount": 2830,
                "user_id": 263,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 46
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_875_pyuxmkgfk",
                "amount": 3065,
                "user_id": 8113,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 47
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_101_fjuxdjumr",
                "amount": 2468,
                "user_id": 1756,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 48
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_818_qnhiwtyyv",
                "amount": 1077,
                "user_id": 9678,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 49
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_631_deojxgntm",
                "amount": 15,
                "user_id": 4032,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 50
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_232_mavowvrci",
                "amount": 2390,
                "user_id": 8511,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 51
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_284_dxbashvbd",
                "amount": 1265,
                "user_id": 8397,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 52
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_817_ewniforqr",
                "amount": 5159,
                "user_id": 2410,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 53
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_132_uulxwnfvc",
                "amount": 3398,
                "user_id": 1360,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 54
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_819_enkzzkimt",
                "amount": 2555,
                "user_id": 1984,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 55
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_905_lejtvumsz",
                "amount": 6903,
                "user_id": 942,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 56
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_679_fedvlpgta",
                "amount": 6064,
                "user_id": 8560,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 57
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_184_fbteapfyy",
                "amount": 9343,
                "user_id": 2025,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 58
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_494_arbpsymku",
                "amount": 6462,
                "user_id": 6095,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 59
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_803_wyosijzjf",
                "amount": 1676,
                "user_id": 6440,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 60
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_300_ttqhpimht",
                "amount": 5572,
                "user_id": 4134,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 61
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_263_iobpsxzxa",
                "amount": 2844,
                "user_id": 5729,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 62
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_154_jdetfixgq",
                "amount": 3885,
                "user_id": 3317,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 63
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_666_qggzhlheg",
                "amount": 5708,
                "user_id": 5211,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 64
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_486_exsahbagp",
                "amount": 342,
                "user_id": 824,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 65
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_453_sekdfamvg",
                "amount": 6874,
                "user_id": 5937,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 66
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_373_ybyfrsiqz",
                "amount": 2138,
                "user_id": 4604,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 67
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_389_qmclahzhw",
                "amount": 446,
                "user_id": 8619,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 68
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_811_bdlggytjn",
                "amount": 3366,
                "user_id": 9324,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 69
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_700_niljtmoaa",
                "amount": 9811,
                "user_id": 8654,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 70
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_483_ajasuxzcr",
                "amount": 8163,
                "user_id": 3801,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 71
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_050_agtrqgynk",
                "amount": 5132,
                "user_id": 5666,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 72
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_630_ocmulkkjx",
                "amount": 7838,
                "user_id": 8288,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 73
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_907_zcceufqyj",
                "amount": 5006,
                "user_id": 3369,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 74
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_486_ogsgahzjw",
                "amount": 4156,
                "user_id": 7076,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 75
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_227_pkcwunxtr",
                "amount": 8479,
                "user_id": 1764,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 76
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_845_wzijrfdfx",
                "amount": 6666,
                "user_id": 648,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 77
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_557_zwguofjny",
                "amount": 2513,
                "user_id": 1724,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 78
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_509_qrzpxfnbk",
                "amount": 3357,
                "user_id": 8574,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 79
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_242_tyglkcjxo",
                "amount": 240,
                "user_id": 4005,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 80
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_514_jicraifpj",
                "amount": 9252,
                "user_id": 541,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 81
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_714_ofpomwdfw",
                "amount": 7475,
                "user_id": 9655,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 82
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_550_jvltclqwp",
                "amount": 4910,
                "user_id": 1619,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 83
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_148_wdcznkgic",
                "amount": 4571,
                "user_id": 8642,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 84
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_705_galluaqty",
                "amount": 8504,
                "user_id": 5727,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 85
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_899_vlpnztojx",
                "amount": 7566,
                "user_id": 1936,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 86
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_722_dqfnksnqo",
                "amount": 6881,
                "user_id": 9900,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 87
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_411_jptxwbety",
                "amount": 7166,
                "user_id": 4828,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 88
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_000_xmnzboeld",
                "amount": 9589,
                "user_id": 2684,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 89
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_678_hcxdmmcde",
                "amount": 5286,
                "user_id": 1338,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 90
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_613_pnyymkeho",
                "amount": 9400,
                "user_id": 4653,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 91
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_489_omimaakqo",
                "amount": 2058,
                "user_id": 8807,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 92
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_748_vephvwnjn",
                "amount": 4831,
                "user_id": 420,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 93
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_911_dloibftfj",
                "amount": 1804,
                "user_id": 514,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 94
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_677_tpxmkdabf",
                "amount": 4800,
                "user_id": 2289,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 95
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_011_qwhmkrhql",
                "amount": 5164,
                "user_id": 9116,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 96
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_346_ivqjhurnv",
                "amount": 6423,
                "user_id": 2214,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 97
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_463_jqixkploc",
                "amount": 2547,
                "user_id": 485,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 98
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_217_orikmnjie",
                "amount": 2977,
                "user_id": 1399,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 99
        },
        {
            "type": "transaction",
            "attributes": {
                "code": "T_924_zduerrqxw",
                "amount": 3491,
                "user_id": 7253,
                "created_at": "2020-01-19T16:08:59.000000Z"
            },
            "id": 100
        }
    ]
}
```

### HTTP Request
`GET api/v1/transactions`

#### Query Parameters

Parameter | Status | Description
--------- | ------- | ------- | -----------
    `source` |  required  | The source of the data(db or csv).

<!-- END_e91b0af0278029e1f6c103542135b6be -->



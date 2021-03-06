<?php

namespace ccxt;

class hitbtc2 extends hitbtc {

    public function describe () {
        return array_replace_recursive (parent::describe (), array (
            'id' => 'hitbtc2',
            'name' => 'HitBTC v2',
            'countries' => 'HK', // Hong Kong
            'rateLimit' => 1500,
            'version' => '2',
            'hasCORS' => true,
            // older metainfo interface
            'hasFetchOHLCV' => true,
            'hasFetchTickers' => true,
            'hasFetchOrder' => true,
            'hasFetchOrders' => false,
            'hasFetchOpenOrders' => true,
            'hasFetchClosedOrders' => true,
            'hasFetchMyTrades' => true,
            'hasWithdraw' => true,
            'hasFetchCurrencies' => true,
            // new metainfo interface
            'has' => array (
                'fetchCurrencies' => true,
                'fetchOHLCV' => true,
                'fetchTickers' => true,
                'fetchOrder' => true,
                'fetchOrders' => false,
                'fetchOpenOrders' => true,
                'fetchClosedOrders' => true,
                'fetchMyTrades' => true,
                'withdraw' => true,
            ),
            'timeframes' => array (
                '1m' => 'M1',
                '3m' => 'M3',
                '5m' => 'M5',
                '15m' => 'M15',
                '30m' => 'M30', // default
                '1h' => 'H1',
                '4h' => 'H4',
                '1d' => 'D1',
                '1w' => 'D7',
                '1M' => '1M',
            ),
            'urls' => array (
                'logo' => 'https://user-images.githubusercontent.com/1294454/27766555-8eaec20e-5edc-11e7-9c5b-6dc69fc42f5e.jpg',
                'api' => 'https://api.hitbtc.com',
                'www' => 'https://hitbtc.com',
                'doc' => 'https://api.hitbtc.com',
                'fees' => array (
                    'https://hitbtc.com/fees-and-limits',
                    'https://support.hitbtc.com/hc/en-us/articles/115005148605-Fees-and-limits',
                ),
            ),
            'api' => array (
                'public' => array (
                    'get' => array (
                        'symbol', // Available Currency Symbols
                        'symbol/{symbol}', // Get symbol info
                        'currency', // Available Currencies
                        'currency/{currency}', // Get currency info
                        'ticker', // Ticker list for all symbols
                        'ticker/{symbol}', // Ticker for symbol
                        'trades/{symbol}', // Trades
                        'orderbook/{symbol}', // Orderbook
                        'candles/{symbol}', // Candles
                    ),
                ),
                'private' => array (
                    'get' => array (
                        'order', // List your current open orders
                        'order/{clientOrderId}', // Get a single order by clientOrderId
                        'trading/balance', // Get trading balance
                        'trading/fee/{symbol}', // Get trading fee rate
                        'history/trades', // Get historical trades
                        'history/order', // Get historical orders
                        'history/order/{id}/trades', // Get historical trades by specified order
                        'account/balance', // Get main acccount balance
                        'account/transactions', // Get account transactions
                        'account/transactions/{id}', // Get account transaction by id
                        'account/crypto/address/{currency}', // Get deposit crypro address
                    ),
                    'post' => array (
                        'order', // Create new order
                        'account/crypto/withdraw', // Withdraw crypro
                        'account/crypto/address/{currency}', // Create new deposit crypro address
                        'account/transfer', // Transfer amount to trading
                    ),
                    'put' => array (
                        'order/{clientOrderId}', // Create new order
                        'account/crypto/withdraw/{id}', // Commit withdraw crypro
                    ),
                    'delete' => array (
                        'order', // Cancel all open orders
                        'order/{clientOrderId}', // Cancel order
                        'account/crypto/withdraw/{id}', // Rollback withdraw crypro
                    ),
                    'patch' => array (
                        'order/{clientOrderId}', // Cancel Replace order
                    ),
                ),
            ),
            'fees' => array (
                'trading' => array (
                    'tierBased' => false,
                    'percentage' => true,
                    'maker' => -0.01 / 100,
                    'taker' => 0.1 / 100,
                ),
                'funding' => array (
                    'tierBased' => false,
                    'percentage' => false,
                    'withdraw' => array (
                        'BTC' => 0.00085,
                        'BCC' => 0.0018,
                        'ETH' => 0.00215,
                        'BCH' => 0.0018,
                        'USDT' => 100,
                        'DASH' => 0.03,
                        'BTG' => 0.0005,
                        'LTC' => 0.003,
                        'ZEC' => 0.0001,
                        'XMR' => 0.09,
                        '1ST' => 0.84,
                        'ADX' => 5.7,
                        'AE' => 6.7,
                        'AEON' => 0.01006,
                        'AIR' => 565,
                        'AMP' => 9,
                        'ANT' => 6.7,
                        'ARDR' => 1,
                        'ARN' => 18.5,
                        'ART' => 26,
                        'ATB' => 0.0004,
                        'ATL' => 27,
                        'ATM' => 504,
                        'ATS' => 860,
                        'AVT' => 1.9,
                        'BAS' => 113,
                        'BCN' => 0.1,
                        'BET' => 124,
                        'BKB' => 46,
                        'BMC' => 32,
                        'BMT' => 100,
                        'BNT' => 2.57,
                        'BQX' => 4.7,
                        'BTM' => 40,
                        'BTX' => 0.04,
                        'BUS' => 0.004,
                        'CCT' => 115,
                        'CDT' => 100,
                        'CDX' => 30,
                        'CFI' => 61,
                        'CLD' => 0.88,
                        'CND' => 574,
                        'CNX' => 0.04,
                        'COSS' => 65,
                        'CSNO' => 16,
                        'CTR' => 15,
                        'CTX' => 146,
                        'CVC' => 8.46,
                        'DBIX' => 0.0168,
                        'DCN' => 120000,
                        'DCT' => 0.02,
                        'DDF' => 342,
                        'DENT' => 6240,
                        'DGB' => 0.4,
                        'DGD' => 0.01,
                        'DICE' => 0.32,
                        'DLT' => 0.26,
                        'DNT' => 0.21,
                        'DOGE' => 2,
                        'DOV' => 34,
                        'DRPU' => 24,
                        'DRT' => 240,
                        'DSH' => 0.017,
                        'EBET' => 84,
                        'EBTC' => 20,
                        'EBTCOLD' => 6.6,
                        'ECAT' => 14,
                        'EDG' => 2,
                        'EDO' => 2.9,
                        'ELE' => 0.00172,
                        'ELM' => 0.004,
                        'EMC' => 0.03,
                        'EMGO' => 14,
                        'ENJ' => 163,
                        'EOS' => 1.5,
                        'ERO' => 34,
                        'ETBS' => 15,
                        'ETC' => 0.002,
                        'ETP' => 0.004,
                        'EVX' => 5.4,
                        'EXN' => 456,
                        'FRD' => 65,
                        'FUEL' => 123.00105,
                        'FUN' => 202.9598309,
                        'FYN' => 1.849,
                        'FYP' => 66.13,
                        'GNO' => 0.0034,
                        'GUP' => 4,
                        'GVT' => 1.2,
                        'HAC' => 144,
                        'HDG' => 7,
                        'HGT' => 1082,
                        'HPC' => 0.4,
                        'HVN' => 120,
                        'ICN' => 0.55,
                        'ICO' => 34,
                        'ICOS' => 0.35,
                        'IND' => 76,
                        'INDI' => 5913,
                        'ITS' => 15.0012,
                        'IXT' => 11,
                        'KBR' => 143,
                        'KICK' => 112,
                        'LA' => 41,
                        'LAT' => 1.44,
                        'LIFE' => 13000,
                        'LRC' => 27,
                        'LSK' => 0.3,
                        'LUN' => 0.34,
                        'MAID' => 5,
                        'MANA' => 143,
                        'MCAP' => 5.44,
                        'MIPS' => 43,
                        'MNE' => 1.33,
                        'MSP' => 121,
                        'MTH' => 92,
                        'MYB' => 3.9,
                        'NDC' => 165,
                        'NEBL' => 0.04,
                        'NET' => 3.96,
                        'NTO' => 998,
                        'NXC' => 13.39,
                        'NXT' => 3,
                        'OAX' => 15,
                        'ODN' => 0.004,
                        'OMG' => 2,
                        'OPT' => 335,
                        'ORME' => 2.8,
                        'OTN' => 0.57,
                        'PAY' => 3.1,
                        'PIX' => 96,
                        'PLBT' => 0.33,
                        'PLR' => 114,
                        'PLU' => 0.87,
                        'POE' => 784,
                        'POLL' => 3.5,
                        'PPT' => 2,
                        'PRE' => 32,
                        'PRG' => 39,
                        'PRO' => 41,
                        'PRS' => 60,
                        'PTOY' => 0.5,
                        'QAU' => 63,
                        'QCN' => 0.03,
                        'QTUM' => 0.04,
                        'QVT' => 64,
                        'REP' => 0.02,
                        'RKC' => 15,
                        'RVT' => 14,
                        'SAN' => 2.24,
                        'SBD' => 0.03,
                        'SCL' => 2.6,
                        'SISA' => 1640,
                        'SKIN' => 407,
                        'SMART' => 0.4,
                        'SMS' => 0.0375,
                        'SNC' => 36,
                        'SNGLS' => 4,
                        'SNM' => 48,
                        'SNT' => 233,
                        'STEEM' => 0.01,
                        'STRAT' => 0.01,
                        'STU' => 14,
                        'STX' => 11,
                        'SUB' => 17,
                        'SUR' => 3,
                        'SWT' => 0.51,
                        'TAAS' => 0.91,
                        'TBT' => 2.37,
                        'TFL' => 15,
                        'TIME' => 0.03,
                        'TIX' => 7.1,
                        'TKN' => 1,
                        'TKR' => 84,
                        'TNT' => 90,
                        'TRST' => 1.6,
                        'TRX' => 1395,
                        'UET' => 480,
                        'UGT' => 15,
                        'VEN' => 14,
                        'VERI' => 0.037,
                        'VIB' => 50,
                        'VIBE' => 145,
                        'VOISE' => 618,
                        'WEALTH' => 0.0168,
                        'WINGS' => 2.4,
                        'WTC' => 0.75,
                        'XAUR' => 3.23,
                        'XDN' => 0.01,
                        'XEM' => 15,
                        'XUC' => 0.9,
                        'YOYOW' => 140,
                        'ZAP' => 24,
                        'ZRX' => 23,
                        'ZSC' => 191,
                    ),
                    'deposit' => array (
                        'BTC' => 0.0003,
                        'ETH' => 0,
                        'BCH' => 0,
                        'USDT' => 0,
                        'BTG' => 0,
                        'LTC' => 0,
                        'ZEC' => 0,
                        'XMR' => 0,
                        '1ST' => 0,
                        'ADX' => 0,
                        'AE' => 0,
                        'AEON' => 0,
                        'AIR' => 0,
                        'AMP' => 0,
                        'ANT' => 0,
                        'ARDR' => 0,
                        'ARN' => 0,
                        'ART' => 0,
                        'ATB' => 0,
                        'ATL' => 0,
                        'ATM' => 0,
                        'ATS' => 0,
                        'AVT' => 0,
                        'BAS' => 0,
                        'BCN' => 0,
                        'BET' => 0,
                        'BKB' => 0,
                        'BMC' => 0,
                        'BMT' => 0,
                        'BNT' => 0,
                        'BQX' => 0,
                        'BTM' => 0,
                        'BTX' => 0,
                        'BUS' => 0,
                        'CCT' => 0,
                        'CDT' => 0,
                        'CDX' => 0,
                        'CFI' => 0,
                        'CLD' => 0,
                        'CND' => 0,
                        'CNX' => 0,
                        'COSS' => 0,
                        'CSNO' => 0,
                        'CTR' => 0,
                        'CTX' => 0,
                        'CVC' => 0,
                        'DBIX' => 0,
                        'DCN' => 0,
                        'DCT' => 0,
                        'DDF' => 0,
                        'DENT' => 0,
                        'DGB' => 0,
                        'DGD' => 0,
                        'DICE' => 0,
                        'DLT' => 0,
                        'DNT' => 0,
                        'DOGE' => 0,
                        'DOV' => 0,
                        'DRPU' => 0,
                        'DRT' => 0,
                        'DSH' => 0,
                        'EBET' => 0,
                        'EBTC' => 0,
                        'EBTCOLD' => 0,
                        'ECAT' => 0,
                        'EDG' => 0,
                        'EDO' => 0,
                        'ELE' => 0,
                        'ELM' => 0,
                        'EMC' => 0,
                        'EMGO' => 0,
                        'ENJ' => 0,
                        'EOS' => 0,
                        'ERO' => 0,
                        'ETBS' => 0,
                        'ETC' => 0,
                        'ETP' => 0,
                        'EVX' => 0,
                        'EXN' => 0,
                        'FRD' => 0,
                        'FUEL' => 0,
                        'FUN' => 0,
                        'FYN' => 0,
                        'FYP' => 0,
                        'GNO' => 0,
                        'GUP' => 0,
                        'GVT' => 0,
                        'HAC' => 0,
                        'HDG' => 0,
                        'HGT' => 0,
                        'HPC' => 0,
                        'HVN' => 0,
                        'ICN' => 0,
                        'ICO' => 0,
                        'ICOS' => 0,
                        'IND' => 0,
                        'INDI' => 0,
                        'ITS' => 0,
                        'IXT' => 0,
                        'KBR' => 0,
                        'KICK' => 0,
                        'LA' => 0,
                        'LAT' => 0,
                        'LIFE' => 0,
                        'LRC' => 0,
                        'LSK' => 0,
                        'LUN' => 0,
                        'MAID' => 0,
                        'MANA' => 0,
                        'MCAP' => 0,
                        'MIPS' => 0,
                        'MNE' => 0,
                        'MSP' => 0,
                        'MTH' => 0,
                        'MYB' => 0,
                        'NDC' => 0,
                        'NEBL' => 0,
                        'NET' => 0,
                        'NTO' => 0,
                        'NXC' => 0,
                        'NXT' => 0,
                        'OAX' => 0,
                        'ODN' => 0,
                        'OMG' => 0,
                        'OPT' => 0,
                        'ORME' => 0,
                        'OTN' => 0,
                        'PAY' => 0,
                        'PIX' => 0,
                        'PLBT' => 0,
                        'PLR' => 0,
                        'PLU' => 0,
                        'POE' => 0,
                        'POLL' => 0,
                        'PPT' => 0,
                        'PRE' => 0,
                        'PRG' => 0,
                        'PRO' => 0,
                        'PRS' => 0,
                        'PTOY' => 0,
                        'QAU' => 0,
                        'QCN' => 0,
                        'QTUM' => 0,
                        'QVT' => 0,
                        'REP' => 0,
                        'RKC' => 0,
                        'RVT' => 0,
                        'SAN' => 0,
                        'SBD' => 0,
                        'SCL' => 0,
                        'SISA' => 0,
                        'SKIN' => 0,
                        'SMART' => 0,
                        'SMS' => 0,
                        'SNC' => 0,
                        'SNGLS' => 0,
                        'SNM' => 0,
                        'SNT' => 0,
                        'STEEM' => 0,
                        'STRAT' => 0,
                        'STU' => 0,
                        'STX' => 0,
                        'SUB' => 0,
                        'SUR' => 0,
                        'SWT' => 0,
                        'TAAS' => 0,
                        'TBT' => 0,
                        'TFL' => 0,
                        'TIME' => 0,
                        'TIX' => 0,
                        'TKN' => 0,
                        'TKR' => 0,
                        'TNT' => 0,
                        'TRST' => 0,
                        'TRX' => 0,
                        'UET' => 0,
                        'UGT' => 0,
                        'VEN' => 0,
                        'VERI' => 0,
                        'VIB' => 0,
                        'VIBE' => 0,
                        'VOISE' => 0,
                        'WEALTH' => 0,
                        'WINGS' => 0,
                        'WTC' => 0,
                        'XAUR' => 0,
                        'XDN' => 0,
                        'XEM' => 0,
                        'XUC' => 0,
                        'YOYOW' => 0,
                        'ZAP' => 0,
                        'ZRX' => 0,
                        'ZSC' => 0,
                    ),
                ),
            ),
        ));
    }

    public function common_currency_code ($currency) {
        if ($currency == 'XBT')
            return 'BTC';
        if ($currency == 'DRK')
            return 'DASH';
        if ($currency == 'CAT')
            return 'BitClave';
        if ($currency == 'USD')
            return 'USDT';
        return $currency;
    }

    public function fee_to_precision ($symbol, $fee) {
        return $this->truncate ($fee, 8);
    }

    public function fetch_markets () {
        $markets = $this->publicGetSymbol ();
        $result = array ();
        for ($i = 0; $i < count ($markets); $i++) {
            $market = $markets[$i];
            $id = $market['id'];
            $baseId = $market['baseCurrency'];
            $quoteId = $market['quoteCurrency'];
            $base = $this->common_currency_code($baseId);
            $quote = $this->common_currency_code($quoteId);
            $symbol = $base . '/' . $quote;
            $lot = floatval ($market['quantityIncrement']);
            $step = floatval ($market['tickSize']);
            $precision = array (
                'price' => $this->precision_from_string($market['tickSize']),
                'amount' => $this->precision_from_string($market['quantityIncrement']),
            );
            $taker = floatval ($market['takeLiquidityRate']);
            $maker = floatval ($market['provideLiquidityRate']);
            $result[] = array_merge ($this->fees['trading'], array (
                'info' => $market,
                'id' => $id,
                'symbol' => $symbol,
                'base' => $base,
                'quote' => $quote,
                'baseId' => $baseId,
                'quoteId' => $quoteId,
                'active' => true,
                'lot' => $lot,
                'step' => $step,
                'taker' => $taker,
                'maker' => $maker,
                'precision' => $precision,
                'limits' => array (
                    'amount' => array (
                        'min' => $lot,
                        'max' => null,
                    ),
                    'price' => array (
                        'min' => $step,
                        'max' => null,
                    ),
                    'cost' => array (
                        'min' => $lot * $step,
                        'max' => null,
                    ),
                ),
            ));
        }
        return $result;
    }

    public function fetch_currencies ($params = array ()) {
        $currencies = $this->publicGetCurrency ($params);
        $result = array ();
        for ($i = 0; $i < count ($currencies); $i++) {
            $currency = $currencies[$i];
            $id = $currency['id'];
            // todo => will need to rethink the fees
            // to add support for multiple withdrawal/deposit methods and
            // differentiated fees for each particular method
            $precision = 8; // default $precision, todo => fix "magic constants"
            $code = $this->common_currency_code($id);
            $payin = $currency['payinEnabled'];
            $payout = $currency['payoutEnabled'];
            $transfer = $currency['transferEnabled'];
            $active = $payin && $payout && $transfer;
            $status = 'ok';
            if (is_array ($currency) && array_key_exists ('disabled', $currency))
                if ($currency['disabled'])
                    $status = 'disabled';
            $type = ($currency['crypto']) ? 'crypto' : 'fiat';
            $result[$code] = array (
                'id' => $id,
                'code' => $code,
                'type' => $type,
                'payin' => $payin,
                'payout' => $payout,
                'transfer' => $transfer,
                'info' => $currency,
                'name' => $currency['fullName'],
                'active' => $active,
                'status' => $status,
                'fee' => null, // todo => redesign
                'precision' => $precision,
                'limits' => array (
                    'amount' => array (
                        'min' => pow (10, -$precision),
                        'max' => pow (10, $precision),
                    ),
                    'price' => array (
                        'min' => pow (10, -$precision),
                        'max' => pow (10, $precision),
                    ),
                    'cost' => array (
                        'min' => null,
                        'max' => null,
                    ),
                    'withdraw' => array (
                        'min' => null,
                        'max' => pow (10, $precision),
                    ),
                ),
            );
        }
        return $result;
    }

    public function fetch_balance ($params = array ()) {
        $this->load_markets();
        $type = $this->safe_string($params, 'type', 'trading');
        $method = 'privateGet' . $this->capitalize ($type) . 'Balance';
        $balances = $this->$method ();
        $result = array ( 'info' => $balances );
        for ($b = 0; $b < count ($balances); $b++) {
            $balance = $balances[$b];
            $code = $balance['currency'];
            $currency = $this->common_currency_code($code);
            $account = array (
                'free' => floatval ($balance['available']),
                'used' => floatval ($balance['reserved']),
                'total' => 0.0,
            );
            $account['total'] = $this->sum ($account['free'], $account['used']);
            $result[$currency] = $account;
        }
        return $this->parse_balance($result);
    }

    public function parse_ohlcv ($ohlcv, $market = null, $timeframe = '1d', $since = null, $limit = null) {
        $timestamp = $this->parse8601 ($ohlcv['timestamp']);
        return [
            $timestamp,
            floatval ($ohlcv['open']),
            floatval ($ohlcv['max']),
            floatval ($ohlcv['min']),
            floatval ($ohlcv['close']),
            floatval ($ohlcv['volumeQuote']),
        ];
    }

    public function fetch_ohlcv ($symbol, $timeframe = '1m', $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $request = array (
            'symbol' => $market['id'],
            'period' => $this->timeframes[$timeframe],
        );
        if ($limit)
            $request['limit'] = $limit;
        $response = $this->publicGetCandlesSymbol (array_merge ($request, $params));
        return $this->parse_ohlcvs($response, $market, $timeframe, $since, $limit);
    }

    public function fetch_order_book ($symbol, $params = array ()) {
        $this->load_markets();
        $orderbook = $this->publicGetOrderbookSymbol (array_merge (array (
            'symbol' => $this->market_id($symbol),
            // 'limit' => 100, // default = 100, 0 = unlimited
        ), $params));
        return $this->parse_order_book($orderbook, null, 'bid', 'ask', 'price', 'size');
    }

    public function parse_ticker ($ticker, $market = null) {
        $timestamp = $this->parse8601 ($ticker['timestamp']);
        $symbol = null;
        if ($market)
            $symbol = $market['symbol'];
        return array (
            'symbol' => $symbol,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'high' => $this->safe_float($ticker, 'high'),
            'low' => $this->safe_float($ticker, 'low'),
            'bid' => $this->safe_float($ticker, 'bid'),
            'ask' => $this->safe_float($ticker, 'ask'),
            'vwap' => null,
            'open' => $this->safe_float($ticker, 'open'),
            'close' => $this->safe_float($ticker, 'close'),
            'first' => null,
            'last' => $this->safe_float($ticker, 'last'),
            'change' => null,
            'percentage' => null,
            'average' => null,
            'baseVolume' => $this->safe_float($ticker, 'volume'),
            'quoteVolume' => $this->safe_float($ticker, 'volumeQuote'),
            'info' => $ticker,
        );
    }

    public function fetch_tickers ($symbols = null, $params = array ()) {
        $this->load_markets();
        $tickers = $this->publicGetTicker ($params);
        $result = array ();
        for ($i = 0; $i < count ($tickers); $i++) {
            $ticker = $tickers[$i];
            $id = $ticker['symbol'];
            $market = $this->markets_by_id[$id];
            $symbol = $market['symbol'];
            $result[$symbol] = $this->parse_ticker($ticker, $market);
        }
        return $result;
    }

    public function fetch_ticker ($symbol, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $ticker = $this->publicGetTickerSymbol (array_merge (array (
            'symbol' => $market['id'],
        ), $params));
        if (is_array ($ticker) && array_key_exists ('message', $ticker))
            throw new ExchangeError ($this->id . ' ' . $ticker['message']);
        return $this->parse_ticker($ticker, $market);
    }

    public function parse_trade ($trade, $market = null) {
        $timestamp = $this->parse8601 ($trade['timestamp']);
        $symbol = null;
        if ($market) {
            $symbol = $market['symbol'];
        } else {
            $id = $trade['symbol'];
            if (is_array ($this->markets_by_id) && array_key_exists ($id, $this->markets_by_id)) {
                $market = $this->markets_by_id[$id];
                $symbol = $market['symbol'];
            } else {
                $symbol = $id;
            }
        }
        $fee = null;
        if (is_array ($trade) && array_key_exists ('fee', $trade)) {
            $currency = $market ? $market['quote'] : null;
            $fee = array (
                'cost' => floatval ($trade['fee']),
                'currency' => $currency,
            );
        }
        $orderId = null;
        if (is_array ($trade) && array_key_exists ('clientOrderId', $trade))
            $orderId = $trade['clientOrderId'];
        $price = floatval ($trade['price']);
        $amount = floatval ($trade['quantity']);
        $cost = $price * $amount;
        return array (
            'info' => $trade,
            'id' => (string) $trade['id'],
            'order' => $orderId,
            'timestamp' => $timestamp,
            'datetime' => $this->iso8601 ($timestamp),
            'symbol' => $symbol,
            'type' => null,
            'side' => $trade['side'],
            'price' => $price,
            'amount' => $amount,
            'cost' => $cost,
            'fee' => $fee,
        );
    }

    public function fetch_trades ($symbol, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        $response = $this->publicGetTradesSymbol (array_merge (array (
            'symbol' => $market['id'],
        ), $params));
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function create_order ($symbol, $type, $side, $amount, $price = null, $params = array ()) {
        $this->load_markets();
        $market = $this->market ($symbol);
        // their max accepted length is 32 characters
        $uuid = $this->uuid ();
        $parts = explode ('-', $uuid);
        $clientOrderId = implode ('', $parts);
        $clientOrderId = mb_substr ($clientOrderId, 0, 32);
        $amount = floatval ($amount);
        $request = array (
            'clientOrderId' => $clientOrderId,
            'symbol' => $market['id'],
            'side' => $side,
            'quantity' => $this->amount_to_precision($symbol, $amount),
            'type' => $type,
        );
        if ($type == 'limit') {
            $request['price'] = $this->price_to_precision($symbol, $price);
        } else {
            $request['timeInForce'] = 'FOK';
        }
        $response = $this->privatePostOrder (array_merge ($request, $params));
        $order = $this->parse_order($response);
        $id = $order['id'];
        $this->orders[$id] = $order;
        return $order;
    }

    public function cancel_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        return $this->privateDeleteOrderClientOrderId (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
    }

    public function parse_order ($order, $market = null) {
        $created = null;
        if (is_array ($order) && array_key_exists ('createdAt', $order))
            $created = $this->parse8601 ($order['createdAt']);
        $updated = null;
        if (is_array ($order) && array_key_exists ('updatedAt', $order))
            $updated = $this->parse8601 ($order['updatedAt']);
        if (!$market)
            $market = $this->markets_by_id[$order['symbol']];
        $symbol = $market['symbol'];
        $amount = $this->safe_float($order, 'quantity');
        $filled = $this->safe_float($order, 'cumQuantity');
        $status = $order['status'];
        if ($status == 'new') {
            $status = 'open';
        } else if ($status == 'suspended') {
            $status = 'open';
        } else if ($status == 'partiallyFilled') {
            $status = 'open';
        } else if ($status == 'filled') {
            $status = 'closed';
        }
        $id = (string) $order['clientOrderId'];
        $price = $this->safe_float($order, 'price');
        if ($price === null) {
            if (is_array ($this->orders) && array_key_exists ($id, $this->orders))
                $price = $this->orders[$id]['price'];
        }
        $remaining = null;
        $cost = null;
        if ($amount !== null) {
            if ($filled !== null) {
                $remaining = $amount - $filled;
                if ($price !== null) {
                    $cost = $filled * $price;
                }
            }
        }
        return array (
            'id' => $id,
            'timestamp' => $created,
            'datetime' => $this->iso8601 ($created),
            'created' => $created,
            'updated' => $updated,
            'status' => $status,
            'symbol' => $symbol,
            'type' => $order['type'],
            'side' => $order['side'],
            'price' => $price,
            'amount' => $amount,
            'cost' => $cost,
            'filled' => $filled,
            'remaining' => $remaining,
            'fee' => null,
            'info' => $order,
        );
    }

    public function fetch_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        $response = $this->privateGetHistoryOrder (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
        $numOrders = is_array ($response) ? count ($response) : 0;
        if ($numOrders > 0)
            return $this->parse_order($response[0]);
        throw new OrderNotFound ($this->id . ' order ' . $id . ' not found');
    }

    public function fetch_open_order ($id, $symbol = null, $params = array ()) {
        $this->load_markets();
        $response = $this->privateGetOrderClientOrderId (array_merge (array (
            'clientOrderId' => $id,
        ), $params));
        return $this->parse_order($response);
    }

    public function fetch_open_orders ($symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = null;
        $request = array ();
        if ($symbol) {
            $market = $this->market ($symbol);
            $request['symbol'] = $market['id'];
        }
        $response = $this->privateGetOrder (array_merge ($request, $params));
        return $this->parse_orders($response, $market, $since, $limit);
    }

    public function fetch_closed_orders ($symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $market = null;
        $request = array ();
        if ($symbol) {
            $market = $this->market ($symbol);
            $request['symbol'] = $market['id'];
        }
        if ($limit)
            $request['limit'] = $limit;
        if ($since) {
            $request['from'] = $this->iso8601 ($since);
        }
        $response = $this->privateGetHistoryOrder (array_merge ($request, $params));
        return $this->parse_orders($response, $market, $since, $limit);
    }

    public function fetch_my_trades ($symbol = null, $since = null, $limit = null, $params = array ()) {
        $this->load_markets();
        $request = array (
            // 'symbol' => 'BTC/USD', // optional
            // 'sort' => 'DESC', // or 'ASC'
            // 'by' => 'timestamp', // or 'id'	String	timestamp by default, or id
            // 'from':	'Datetime or Number', // ISO 8601
            // 'till':	'Datetime or Number',
            // 'limit' => 100,
            // 'offset' => 0,
        );
        $market = null;
        if ($symbol) {
            $market = $this->market ($symbol);
            $request['symbol'] = $market['id'];
        }
        if ($since)
            $request['from'] = $this->iso8601 ($since);
        if ($limit)
            $request['limit'] = $limit;
        $response = $this->privateGetHistoryTrades (array_merge ($request, $params));
        return $this->parse_trades($response, $market, $since, $limit);
    }

    public function fetch_order_trades ($id, $symbol = null, $params = array ()) {
        // The $id needed here is the exchange's $id, and not the clientOrderID, which is
        // the $id that is stored in the unified api order $id. In order the get the exchange's $id,
        // you need to grab it from order['info']['id']
        $this->load_markets();
        $trades = $this->privateGetHistoryOrderIdTrades (array_merge (array (
            'id' => $id,
        ), $params));
        return $this->parse_trades($trades);
    }

    public function create_deposit_address ($code, $params = array ()) {
        $this->load_markets();
        $currency = $this->currency ($code);
        $response = $this->privatePostAccountCryptoAddressCurrency (array (
            'currency' => $currency['id'],
        ));
        $address = $response['address'];
        return array (
            'currency' => $currency,
            'address' => $address,
            'status' => 'ok',
            'info' => $response,
        );
    }

    public function fetch_deposit_address ($code, $params = array ()) {
        $this->load_markets();
        $currency = $this->currency ($code);
        $response = $this->privateGetAccountCryptoAddressCurrency (array (
            'currency' => $currency['id'],
        ));
        $address = $response['address'];
        return array (
            'currency' => $currency,
            'address' => $address,
            'status' => 'ok',
            'info' => $response,
        );
    }

    public function withdraw ($code, $amount, $address, $params = array ()) {
        $currency = $this->currency ($code);
        $response = $this->privatePostAccountCryptoWithdraw (array_merge (array (
            'currency' => $currency['id'],
            'amount' => floatval ($amount),
            'address' => $address,
        ), $params));
        return array (
            'info' => $response,
            'id' => $response['id'],
        );
    }

    public function sign ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $url = '/api' . '/' . $this->version . '/';
        $query = $this->omit ($params, $this->extract_params($path));
        if ($api == 'public') {
            $url .= $api . '/' . $this->implode_params($path, $params);
            if ($query)
                $url .= '?' . $this->urlencode ($query);
        } else {
            $this->check_required_credentials();
            $url .= $this->implode_params($path, $params);
            if ($method == 'GET') {
                if ($query)
                    $url .= '?' . $this->urlencode ($query);
            } else {
                if ($query)
                    $body = $this->json ($query);
            }
            $payload = $this->encode ($this->apiKey . ':' . $this->secret);
            $auth = base64_encode ($payload);
            $headers = array (
                'Authorization' => "Basic " . $this->decode ($auth),
                'Content-Type' => 'application/json',
            );
        }
        $url = $this->urls['api'] . $url;
        return array ( 'url' => $url, 'method' => $method, 'body' => $body, 'headers' => $headers );
    }

    public function handle_errors ($code, $reason, $url, $method, $headers, $body) {
        if ($code === 400) {
            if ($body[0] === "{") {
                $response = json_decode ($body, $as_associative_array = true);
                if (is_array ($response) && array_key_exists ('error', $response)) {
                    if (is_array ($response['error']) && array_key_exists ('message', $response['error'])) {
                        $message = $response['error']['message'];
                        if ($message === 'Order not found') {
                            throw new OrderNotFound ($this->id . ' order not found in active orders');
                        } else if ($message === 'Insufficient funds') {
                            throw new InsufficientFunds ($this->id . ' ' . $body);
                        } else if ($message === 'Duplicate clientOrderId') {
                            throw new InvalidOrder ($this->id . ' ' . $body);
                        }
                    }
                }
            }
            throw new ExchangeError ($this->id . ' ' . $body);
        }
    }

    public function request ($path, $api = 'public', $method = 'GET', $params = array (), $headers = null, $body = null) {
        $response = $this->fetch2 ($path, $api, $method, $params, $headers, $body);
        if (is_array ($response) && array_key_exists ('error', $response))
            throw new ExchangeError ($this->id . ' ' . $this->json ($response));
        return $response;
    }
}

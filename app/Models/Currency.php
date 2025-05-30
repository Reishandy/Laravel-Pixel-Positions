<?php

namespace App\Models;

class Currency
{
    private array $currencies = [
        'USD' => [
            'name' => 'US Dollar',
            'symbol' => '$',
            'format' => '$%s',
        ],
        'EUR' => [
            'name' => 'Euro',
            'symbol' => '€',
            'format' => '€%s',
        ],
        'GBP' => [
            'name' => 'British Pound',
            'symbol' => '£',
            'format' => '£%s',
        ],
        'JPY' => [
            'name' => 'Japanese Yen',
            'symbol' => '¥',
            'format' => '¥%s',
            'decimals' => 0,
        ],
        'CNY' => [
            'name' => 'Chinese Yuan',
            'symbol' => '¥',
            'format' => '¥%s',
        ],
        'IDR' => [
            'name' => 'Indonesian Rupiah',
            'symbol' => 'Rp',
            'format' => 'Rp%s',
            'decimals' => 0,
        ],
        'CAD' => [
            'name' => 'Canadian Dollar',
            'symbol' => 'C$',
            'format' => 'C$%s',
        ],
        'AUD' => [
            'name' => 'Australian Dollar',
            'symbol' => 'A$',
            'format' => 'A$%s',
        ],
        'INR' => [
            'name' => 'Indian Rupee',
            'symbol' => '₹',
            'format' => '₹%s',
        ],
        'CHF' => [
            'name' => 'Swiss Franc',
            'symbol' => 'CHF',
            'format' => 'CHF %s',
        ],
        'SGD' => [
            'name' => 'Singapore Dollar',
            'symbol' => 'S$',
            'format' => 'S$%s',
        ],
        'HKD' => [
            'name' => 'Hong Kong Dollar',
            'symbol' => 'HK$',
            'format' => 'HK$%s',
        ],
        'NZD' => [
            'name' => 'New Zealand Dollar',
            'symbol' => 'NZ$',
            'format' => 'NZ$%s',
        ],
        'MYR' => [
            'name' => 'Malaysian Ringgit',
            'symbol' => 'RM',
            'format' => 'RM%s',
        ],
        'THB' => [
            'name' => 'Thai Baht',
            'symbol' => '฿',
            'format' => '฿%s',
        ],
        'KRW' => [
            'name' => 'South Korean Won',
            'symbol' => '₩',
            'format' => '₩%s',
            'decimals' => 0,
        ],
        'BRL' => [
            'name' => 'Brazilian Real',
            'symbol' => 'R$',
            'format' => 'R$%s',
        ],
        'MXN' => [
            'name' => 'Mexican Peso',
            'symbol' => 'Mex$',
            'format' => 'Mex$%s',
        ],
        'AED' => [
            'name' => 'United Arab Emirates Dirham',
            'symbol' => 'د.إ',
            'format' => 'د.إ%s',
        ],
        'RUB' => [
            'name' => 'Russian Ruble',
            'symbol' => '₽',
            'format' => '%s₽',
        ],
    ];

    public function all(): array
    {
        return $this->currencies;
    }

    public function getSymbol(string $code): ?string
    {
        return $this->currencies[$code]['symbol'] ?? null;
    }

    public function format(string $code, int $amount): string
    {
        if (!isset($this->currencies[$code])) {
            return number_format($amount, 0, '.', ',') . ' ' . $code;
        }

        $currency = $this->currencies[$code];
        $formattedAmount = number_format($amount, 0, '.', ',');

        return sprintf($currency['format'], $formattedAmount);
    }

    public function getCodes(): array
    {
        return array_keys($this->currencies);
    }

    public function exists(string $code): bool
    {
        return isset($this->currencies[$code]);
    }
}

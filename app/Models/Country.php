<?php

namespace App\Models;

class Country
{
    private array $countries = [
        'US' => [
            'name' => 'United States',
            'currency' => 'USD',
            'currency_name' => 'US Dollar',
            'currency_symbol' => '$',
            'currency_format' => '$%s',
        ],
        'EU' => [
            'name' => 'European Union',
            'currency' => 'EUR',
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
            'currency_format' => '€%s',
        ],
        'GB' => [
            'name' => 'United Kingdom',
            'currency' => 'GBP',
            'currency_name' => 'British Pound',
            'currency_symbol' => '£',
            'currency_format' => '£%s',
        ],
        'JP' => [
            'name' => 'Japan',
            'currency' => 'JPY',
            'currency_name' => 'Japanese Yen',
            'currency_symbol' => '¥',
            'currency_format' => '¥%s',
            'decimals' => 0,
        ],
        'CN' => [
            'name' => 'China',
            'currency' => 'CNY',
            'currency_name' => 'Chinese Yuan',
            'currency_symbol' => '¥',
            'currency_format' => '¥%s',
        ],
        'ID' => [
            'name' => 'Indonesia',
            'currency' => 'IDR',
            'currency_name' => 'Indonesian Rupiah',
            'currency_symbol' => 'Rp',
            'currency_format' => 'Rp%s',
            'decimals' => 0,
        ],
        'CA' => [
            'name' => 'Canada',
            'currency' => 'CAD',
            'currency_name' => 'Canadian Dollar',
            'currency_symbol' => 'C$',
            'currency_format' => 'C$%s',
        ],
        'AU' => [
            'name' => 'Australia',
            'currency' => 'AUD',
            'currency_name' => 'Australian Dollar',
            'currency_symbol' => 'A$',
            'currency_format' => 'A$%s',
        ],
        'SG' => [
            'name' => 'Singapore',
            'currency' => 'SGD',
            'currency_name' => 'Singapore Dollar',
            'currency_symbol' => 'S$',
            'currency_format' => 'S$%s',
        ],
        'HK' => [
            'name' => 'Hong Kong',
            'currency' => 'HKD',
            'currency_name' => 'Hong Kong Dollar',
            'currency_symbol' => 'HK$',
            'currency_format' => 'HK$%s',
        ],
        'NZ' => [
            'name' => 'New Zealand',
            'currency' => 'NZD',
            'currency_name' => 'New Zealand Dollar',
            'currency_symbol' => 'NZ$',
            'currency_format' => 'NZ$%s',
        ],
    ];

    public function all(): array
    {
        return $this->countries;
    }

    public function getCountryCodes(): array
    {
        return array_keys($this->countries);
    }

    public function getCountry(string $code): ?array
    {
        return $this->countries[$code] ?? null;
    }

    public function getSymbol(string $countryCode): ?string
    {
        return $this->countries[$countryCode]['currency_symbol'] ?? null;
    }

    public function getCurrency(string $countryCode): ?string
    {
        return $this->countries[$countryCode]['currency'] ?? null;
    }

    public function format(string $countryCode, int $amount): string
    {
        if (!isset($this->countries[$countryCode])) {
            return number_format($amount, 0, '.', ',') . ' Unknown';
        }

        $country = $this->countries[$countryCode];
        $decimals = $country['decimals'] ?? 0;
        $formattedAmount = number_format($amount, $decimals, '.', ',');

        return sprintf($country['currency_format'], $formattedAmount);
    }

    public function exists(string $code): bool
    {
        return isset($this->countries[$code]);
    }
}

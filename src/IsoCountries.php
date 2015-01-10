<?php
namespace BrightfishSoftware;

use Exception;
/**
 * Class IsoCountries
 * Author: Ed Eliot
 * Copyright (c) Brightfish Software/Ed Eliot
 * License: FreeBSD (see https://github.com/BrightfishSoftware/IsoCountries/blob/master/README.md)
 */
class IsoCountries {
	const RETURN_AS_ISO2 = 1;
	const RETURN_AS_ISO3 = 2;

	/** @var array */
	protected $completeIso3 = [
		'AFG' => 'Afghanistan',
		'ALA' => 'Åland Islands',
		'ALB' => 'Albania',
		'DZA' => 'Algeria',
		'ASM' => 'American Samoa',
		'AND' => 'Andorra',
		'AGO' => 'Angola',
		'AIA' => 'Anguilla',
		'ATA' => 'Antarctica',
		'ATG' => 'Antigua and Barbuda',
		'ARG' => 'Argentina',
		'ARM' => 'Armenia',
		'ABW' => 'Aruba',
		'AUS' => 'Australia',
		'AUT' => 'Austria',
		'AZE' => 'Azerbaijan',
		'BHS' => 'Bahamas',
		'BHR' => 'Bahrain',
		'BGD' => 'Bangladesh',
		'BRB' => 'Barbados',
		'BLR' => 'Belarus',
		'BEL' => 'Belgium',
		'BLZ' => 'Belize',
		'BEN' => 'Benin',
		'BMU' => 'Bermuda',
		'BTN' => 'Bhutan',
		'BOL' => 'Bolivia, Plurinational State of',
		'BES' => 'Bonaire, Sint Eustatius and Saba',
		'BIH' => 'Bosnia and Herzegovina',
		'BWA' => 'Botswana',
		'BVT' => 'Bouvet Island',
		'BRA' => 'Brazil',
		'IOT' => 'British Indian Ocean Territory',
		'BRN' => 'Brunei Darussalam',
		'BGR' => 'Bulgaria',
		'BFA' => 'Burkina Faso',
		'BDI' => 'Burundi',
		'CPV' => 'Cabo Verde',
		'KHM' => 'Cambodia',
		'CMR' => 'Cameroon',
		'CAN' => 'Canada',
		'CYM' => 'Cayman Islands',
		'CAF' => 'Central African Republic',
		'TCD' => 'Chad',
		'CHL' => 'Chile',
		'CHN' => 'China',
		'CXR' => 'Christmas Island',
		'CCK' => 'Cocos (Keeling) Islands',
		'COL' => 'Colombia',
		'COM' => 'Comoros',
		'COG' => 'Congo',
		'COD' => 'Congo, the Democratic Republic of the',
		'COK' => 'Cook Islands',
		'CRI' => 'Costa Rica',
		'CIV' => 'Côte d\'Ivoire',
		'HRV' => 'Croatia',
		'CUB' => 'Cuba',
		'CUW' => 'Curaçao',
		'CYP' => 'Cyprus',
		'CZE' => 'Czech Republic',
		'DNK' => 'Denmark',
		'DJI' => 'Djibouti',
		'DMA' => 'Dominica',
		'DOM' => 'Dominican Republic',
		'ECU' => 'Ecuador',
		'EGY' => 'Egypt',
		'SLV' => 'El Salvador',
		'GNQ' => 'Equatorial Guinea',
		'ERI' => 'Eritrea',
		'EST' => 'Estonia',
		'ETH' => 'Ethiopia',
		'FLK' => 'Falkland Islands (Malvinas)',
		'FRO' => 'Faroe Islands',
		'FJI' => 'Fiji',
		'FIN' => 'Finland',
		'FRA' => 'France',
		'GUF' => 'French Guiana',
		'PYF' => 'French Polynesia',
		'ATF' => 'French Southern Territories',
		'GAB' => 'Gabon',
		'GMB' => 'Gambia',
		'GEO' => 'Georgia',
		'DEU' => 'Germany',
		'GHA' => 'Ghana',
		'GIB' => 'Gibraltar',
		'GRC' => 'Greece',
		'GRL' => 'Greenland',
		'GRD' => 'Grenada',
		'GLP' => 'Guadeloupe',
		'GUM' => 'Guam',
		'GTM' => 'Guatemala',
		'GGY' => 'Guernsey',
		'GIN' => 'Guinea',
		'GNB' => 'Guinea-Bissau',
		'GUY' => 'Guyana',
		'HTI' => 'Haiti',
		'HMD' => 'Heard Island and McDonald Islands',
		'VAT' => 'Holy See (Vatican City State)',
		'HND' => 'Honduras',
		'HKG' => 'Hong Kong',
		'HUN' => 'Hungary',
		'ISL' => 'Iceland',
		'IND' => 'India',
		'IDN' => 'Indonesia',
		'IRN' => 'Iran, Islamic Republic of',
		'IRQ' => 'Iraq',
		'IRL' => 'Ireland',
		'IMN' => 'Isle of Man',
		'ISR' => 'Israel',
		'ITA' => 'Italy',
		'JAM' => 'Jamaica',
		'JPN' => 'Japan',
		'JEY' => 'Jersey',
		'JOR' => 'Jordan',
		'KAZ' => 'Kazakhstan',
		'KEN' => 'Kenya',
		'KIR' => 'Kiribati',
		'PRK' => 'Korea, Democratic People\'s Republic of',
		'KOR' => 'Korea, Republic of',
		'KWT' => 'Kuwait',
		'KGZ' => 'Kyrgyzstan',
		'LAO' => 'Lao People\'s Democratic Republic',
		'LVA' => 'Latvia',
		'LBN' => 'Lebanon',
		'LSO' => 'Lesotho',
		'LBR' => 'Liberia',
		'LBY' => 'Libya',
		'LIE' => 'Liechtenstein',
		'LTU' => 'Lithuania',
		'LUX' => 'Luxembourg',
		'MAC' => 'Macao',
		'MKD' => 'Macedonia, the former Yugoslav Republic of',
		'MDG' => 'Madagascar',
		'MWI' => 'Malawi',
		'MYS' => 'Malaysia',
		'MDV' => 'Maldives',
		'MLI' => 'Mali',
		'MLT' => 'Malta',
		'MHL' => 'Marshall Islands',
		'MTQ' => 'Martinique',
		'MRT' => 'Mauritania',
		'MUS' => 'Mauritius',
		'MYT' => 'Mayotte',
		'MEX' => 'Mexico',
		'FSM' => 'Micronesia, Federated States of',
		'MDA' => 'Moldova, Republic of',
		'MCO' => 'Monaco',
		'MNG' => 'Mongolia',
		'MNE' => 'Montenegro',
		'MSR' => 'Montserrat',
		'MAR' => 'Morocco',
		'MOZ' => 'Mozambique',
		'MMR' => 'Myanmar',
		'NAM' => 'Namibia',
		'NRU' => 'Nauru',
		'NPL' => 'Nepal',
		'NLD' => 'Netherlands',
		'NCL' => 'New Caledonia',
		'NZL' => 'New Zealand',
		'NIC' => 'Nicaragua',
		'NER' => 'Niger',
		'NGA' => 'Nigeria',
		'NIU' => 'Niue',
		'NFK' => 'Norfolk Island',
		'MNP' => 'Northern Mariana Islands',
		'NOR' => 'Norway',
		'OMN' => 'Oman',
		'PAK' => 'Pakistan',
		'PLW' => 'Palau',
		'PSE' => 'Palestine, State of',
		'PAN' => 'Panama',
		'PNG' => 'Papua New Guinea',
		'PRY' => 'Paraguay',
		'PER' => 'Peru',
		'PHL' => 'Philippines',
		'PCN' => 'Pitcairn',
		'POL' => 'Poland',
		'PRT' => 'Portugal',
		'PRI' => 'Puerto Rico',
		'QAT' => 'Qatar',
		'REU' => 'Réunion',
		'ROU' => 'Romania',
		'RUS' => 'Russian Federation',
		'RWA' => 'Rwanda',
		'BLM' => 'Saint Barthélemy',
		'SHN' => 'Saint Helena, Ascension and Tristan da Cunha',
		'KNA' => 'Saint Kitts and Nevis',
		'LCA' => 'Saint Lucia',
		'MAF' => 'Saint Martin (French part)',
		'SPM' => 'Saint Pierre and Miquelon',
		'VCT' => 'Saint Vincent and the Grenadines',
		'WSM' => 'Samoa',
		'SMR' => 'San Marino',
		'STP' => 'Sao Tome and Principe',
		'SAU' => 'Saudi Arabia',
		'SEN' => 'Senegal',
		'SRB' => 'Serbia',
		'SYC' => 'Seychelles',
		'SLE' => 'Sierra Leone',
		'SGP' => 'Singapore',
		'SXM' => 'Sint Maarten (Dutch part)',
		'SVK' => 'Slovakia',
		'SVN' => 'Slovenia',
		'SLB' => 'Solomon Islands',
		'SOM' => 'Somalia',
		'ZAF' => 'South Africa',
		'SGS' => 'South Georgia and the South Sandwich Islands',
		'SSD' => 'South Sudan',
		'ESP' => 'Spain',
		'LKA' => 'Sri Lanka',
		'SDN' => 'Sudan',
		'SUR' => 'Suriname',
		'SJM' => 'Svalbard and Jan Mayen',
		'SWZ' => 'Swaziland',
		'SWE' => 'Sweden',
		'CHE' => 'Switzerland',
		'SYR' => 'Syrian Arab Republic',
		'TWN' => 'Taiwan, Province of China',
		'TJK' => 'Tajikistan',
		'TZA' => 'Tanzania, United Republic of',
		'THA' => 'Thailand',
		'TLS' => 'Timor-Leste',
		'TGO' => 'Togo',
		'TKL' => 'Tokelau',
		'TON' => 'Tonga',
		'TTO' => 'Trinidad and Tobago',
		'TUN' => 'Tunisia',
		'TUR' => 'Turkey',
		'TKM' => 'Turkmenistan',
		'TCA' => 'Turks and Caicos Islands',
		'TUV' => 'Tuvalu',
		'UGA' => 'Uganda',
		'UKR' => 'Ukraine',
		'ARE' => 'United Arab Emirates',
		'GBR' => 'United Kingdom',
		'USA' => 'United States',
		'UMI' => 'United States Minor Outlying Islands',
		'URY' => 'Uruguay',
		'UZB' => 'Uzbekistan',
		'VUT' => 'Vanuatu',
		'VEN' => 'Venezuela, Bolivarian Republic of',
		'VNM' => 'Viet Nam',
		'VGB' => 'Virgin Islands, British',
		'VIR' => 'Virgin Islands, U.S.',
		'WLF' => 'Wallis and Futuna',
		'ESH' => 'Western Sahara',
		'YEM' => 'Yemen',
		'ZMB' => 'Zambia',
		'ZWE' => 'Zimbabwe'
	];
	/** @var array */
	protected $euCompleteIso3 = [
		'AUT', 'BEL', 'BGR', 'HRV', 'CYP', 'CZE', 'DNK', 'EST', 'FIN', 'FRA',
		'DEU', 'GRC', 'HUN', 'IRL', 'ITA', 'LVA', 'LTU', 'LUX', 'MLT', 'NLD',
		'POL', 'PRT', 'ROU', 'SVK', 'SVN', 'ESP', 'SWE', 'GBR'
	];
	/** @var array */
	protected $europeCompleteIso3 = [
		'ALB', 'AND', 'AUT', 'BLR', 'BEL', 'BIH', 'BGR', 'HRV', 'CYP', 'CZE',
		'DNK', 'EST', 'FRO', 'FIN', 'FRA', 'DEU', 'GIB', 'GRC', 'HUN', 'ISL',
		'IRL', 'ITA', 'LVA', 'LIE', 'LTU', 'LUX', 'MKD', 'MLT', 'MDA', 'MCO',
		'NLD', 'NOR', 'POL', 'PRT', 'ROU', 'RUS', 'SMR', 'SRB', 'SVK', 'SVN',
		'ESP', 'SWE', 'CHE', 'UKR', 'GBR', 'VAT', 'RSB', 'IMN', 'MNE'
	];
	/** @var array */
	protected $northAmericaCompleteIso3 = [
		'AIA', 'ATG', 'ABW', 'BHS', 'BRB', 'BLZ', 'BMU', 'VGB', 'CAN', 'CYM',
		'CRI', 'CUB', 'CUW', 'DMA', 'DOM', 'SLV', 'GRL', 'GRD', 'GLP', 'GTM',
		'HTI', 'HND', 'JAM', 'MTQ', 'MEX', 'SPM', 'MSR', 'ANT', 'KNA', 'NIC',
		'PAN', 'PRI', 'KNA', 'LCA', 'SPM', 'VCT', 'TTO', 'TCA', 'VIR', 'USA',
		'SXM'
	];
	/** @var array */
	protected $southAmericaCompleteIso3 = [
		'ARG', 'BOL', 'BRA', 'CHL', 'COL', 'ECU', 'FLK', 'GUF', 'GUY', 'PRY',
		'PER', 'SUR', 'URY', 'VEN'
	];
	/** @var array */
	protected $africaCompleteIso3 = [
		'DZA', 'AGO', 'SHN', 'BEN', 'BWA', 'BFA', 'BDI', 'CMR', 'CPV', 'CAF',
		'TCD', 'COM', 'COG', 'DJI', 'EGY', 'GNQ', 'ERI', 'ETH', 'GAB', 'GMB',
		'GHA', 'GNB', 'GIN', 'CIV', 'KEN', 'LSO', 'LBR', 'LBY', 'MDG', 'MWI',
		'MLI', 'MRT', 'MUS', 'MYT', 'MAR', 'MOZ', 'NAM', 'NER', 'NGA', 'STP',
		'REU', 'RWA', 'STP', 'SEN', 'SYC', 'SLE', 'SOM', 'ZAF', 'SHN', 'SDN',
		'SWZ', 'TZA', 'TGO', 'TUN', 'UGA', 'COD', 'ZMB', 'TZA', 'ZWE', 'SSD',
		'COD'
	];
	/** @var array */
	protected $asiaCompleteIso3 = [
		'AFG', 'ARM', 'AZE', 'BHR', 'BGD', 'BTN', 'BRN', 'KHM', 'CHN', 'CXR',
		'CCK', 'IOT', 'GEO', 'HKG', 'IND', 'IDN', 'IRN', 'IRQ', 'ISR', 'JPN',
		'JOR', 'KAZ', 'PRK', 'KOR', 'KWT', 'KGZ', 'LAO', 'LBN', 'MAC', 'MYS',
		'MDV', 'MNG', 'MMR', 'NPL', 'OMN', 'PAK', 'PHL', 'QAT', 'SAU', 'SGP',
		'LKA', 'SYR', 'TWN', 'TJK', 'THA', 'TUR', 'TKM', 'ARE', 'UZB', 'VNM',
		'YEM', 'PSE'
	];
	/** @var array */
	protected $oceaniaCompleteIso3 = [
		'ASM', 'AUS', 'NZL', 'COK', 'FJI', 'PYF', 'GUM', 'KIR', 'MNP', 'MHL',
		'FSM', 'UMI', 'NRU', 'NCL', 'NZL', 'NIU', 'NFK', 'PLW', 'PNG', 'MNP',
		'SLB', 'TKL', 'TON', 'TUV', 'VUT', 'UMI', 'WLF', 'WSM', 'TLS'
	];
	/** @var array */
	protected $iso2ToIso3 = [
		'AF' => 'AFG',
		'AX' => 'ALA',
		'AL' => 'ALB',
		'DZ' => 'DZA',
		'AS' => 'ASM',
		'AD' => 'AND',
		'AO' => 'AGO',
		'AI' => 'AIA',
		'AQ' => 'ATA',
		'AG' => 'ATG',
		'AR' => 'ARG',
		'AM' => 'ARM',
		'AW' => 'ABW',
		'AU' => 'AUS',
		'AT' => 'AUT',
		'AZ' => 'AZE',
		'BS' => 'BHS',
		'BH' => 'BHR',
		'BD' => 'BGD',
		'BB' => 'BRB',
		'BY' => 'BLR',
		'BE' => 'BEL',
		'BZ' => 'BLZ',
		'BJ' => 'BEN',
		'BM' => 'BMU',
		'BT' => 'BTN',
		'BO' => 'BOL',
		'BA' => 'BIH',
		'BW' => 'BWA',
		'BV' => 'BVT',
		'BR' => 'BRA',
		'IO' => 'IOT',
		'BN' => 'BRN',
		'BG' => 'BGR',
		'BF' => 'BFA',
		'BI' => 'BDI',
		'KH' => 'KHM',
		'CM' => 'CMR',
		'CA' => 'CAN',
		'CV' => 'CPV',
		'KY' => 'CYM',
		'CF' => 'CAF',
		'TD' => 'TCD',
		'CL' => 'CHL',
		'CN' => 'CHN',
		'CX' => 'CXR',
		'CC' => 'CCK',
		'CO' => 'COL',
		'KM' => 'COM',
		'CG' => 'COG',
		'CK' => 'COK',
		'CR' => 'CRI',
		'CI' => 'CIV',
		'HR' => 'HRV',
		'CU' => 'CUB',
		'CY' => 'CYP',
		'CZ' => 'CZE',
		'DK' => 'DNK',
		'DJ' => 'DJI',
		'DM' => 'DMA',
		'DO' => 'DOM',
		'EC' => 'ECU',
		'EG' => 'EGY',
		'SV' => 'SLV',
		'GQ' => 'GNQ',
		'ER' => 'ERI',
		'EE' => 'EST',
		'ET' => 'ETH',
		'FK' => 'FLK',
		'FO' => 'FRO',
		'FJ' => 'FJI',
		'FI' => 'FIN',
		'FR' => 'FRA',
		'GF' => 'GUF',
		'PF' => 'PYF',
		'TF' => 'ATF',
		'GA' => 'GAB',
		'GM' => 'GMB',
		'GE' => 'GEO',
		'DE' => 'DEU',
		'GH' => 'GHA',
		'GI' => 'GIB',
		'GR' => 'GRC',
		'GL' => 'GRL',
		'GD' => 'GRD',
		'GP' => 'GLP',
		'GU' => 'GUM',
		'GT' => 'GTM',
		'GN' => 'GIN',
		'GW' => 'GNB',
		'GY' => 'GUY',
		'HT' => 'HTI',
		'HM' => 'HMD',
		'VA' => 'VAT',
		'HN' => 'HND',
		'HK' => 'HKG',
		'HU' => 'HUN',
		'IS' => 'ISL',
		'IN' => 'IND',
		'ID' => 'IDN',
		'IR' => 'IRN',
		'IQ' => 'IRQ',
		'IE' => 'IRL',
		'IL' => 'ISR',
		'IT' => 'ITA',
		'JM' => 'JAM',
		'JP' => 'JPN',
		'JO' => 'JOR',
		'KZ' => 'KAZ',
		'KE' => 'KEN',
		'KI' => 'KIR',
		'KP' => 'PRK',
		'KR' => 'KOR',
		'KW' => 'KWT',
		'KG' => 'KGZ',
		'LA' => 'LAO',
		'LV' => 'LVA',
		'LB' => 'LBN',
		'LS' => 'LSO',
		'LR' => 'LBR',
		'LY' => 'LBY',
		'LI' => 'LIE',
		'LT' => 'LTU',
		'LU' => 'LUX',
		'MO' => 'MAC',
		'MK' => 'MKD',
		'MG' => 'MDG',
		'MW' => 'MWI',
		'MY' => 'MYS',
		'MV' => 'MDV',
		'ML' => 'MLI',
		'MT' => 'MLT',
		'MH' => 'MHL',
		'MQ' => 'MTQ',
		'MR' => 'MRT',
		'MU' => 'MUS',
		'YT' => 'MYT',
		'MX' => 'MEX',
		'FM' => 'FSM',
		'MD' => 'MDA',
		'MC' => 'MCO',
		'MN' => 'MNG',
		'MS' => 'MSR',
		'MA' => 'MAR',
		'MZ' => 'MOZ',
		'MM' => 'MMR',
		'NA' => 'NAM',
		'NR' => 'NRU',
		'NP' => 'NPL',
		'NL' => 'NLD',
		'NC' => 'NCL',
		'NZ' => 'NZL',
		'NI' => 'NIC',
		'NE' => 'NER',
		'NG' => 'NGA',
		'NU' => 'NIU',
		'NF' => 'NFK',
		'MP' => 'MNP',
		'NO' => 'NOR',
		'OM' => 'OMN',
		'PK' => 'PAK',
		'PW' => 'PLW',
		'PA' => 'PAN',
		'PG' => 'PNG',
		'PY' => 'PRY',
		'PE' => 'PER',
		'PH' => 'PHL',
		'PN' => 'PCN',
		'PL' => 'POL',
		'PT' => 'PRT',
		'PR' => 'PRI',
		'QA' => 'QAT',
		'RE' => 'REU',
		'RO' => 'ROU',
		'RU' => 'RUS',
		'RW' => 'RWA',
		'KN' => 'KNA',
		'LC' => 'LCA',
		'VC' => 'VCT',
		'WS' => 'WSM',
		'SM' => 'SMR',
		'ST' => 'STP',
		'SA' => 'SAU',
		'SN' => 'SEN',
		'SC' => 'SYC',
		'SL' => 'SLE',
		'SG' => 'SGP',
		'SK' => 'SVK',
		'SI' => 'SVN',
		'SB' => 'SLB',
		'SO' => 'SOM',
		'ZA' => 'ZAF',
		'GS' => 'SGS',
		'ES' => 'ESP',
		'LK' => 'LKA',
		'SH' => 'SHN',
		'PM' => 'SPM',
		'SD' => 'SDN',
		'SR' => 'SUR',
		'SJ' => 'SJM',
		'SZ' => 'SWZ',
		'SE' => 'SWE',
		'CH' => 'CHE',
		'SY' => 'SYR',
		'TW' => 'TWN',
		'TJ' => 'TJK',
		'TZ' => 'TZA',
		'TH' => 'THA',
		'TG' => 'TGO',
		'TK' => 'TKL',
		'TO' => 'TON',
		'TT' => 'TTO',
		'TN' => 'TUN',
		'TR' => 'TUR',
		'TM' => 'TKM',
		'TC' => 'TCA',
		'TV' => 'TUV',
		'UG' => 'UGA',
		'UA' => 'UKR',
		'AE' => 'ARE',
		'GB' => 'GBR',
		'US' => 'USA',
		'UM' => 'UMI',
		'UY' => 'URY',
		'UZ' => 'UZB',
		'VU' => 'VUT',
		'VE' => 'VEN',
		'VN' => 'VNM',
		'VG' => 'VGB',
		'VI' => 'VIR',
		'WF' => 'WLF',
		'EH' => 'ESH',
		'YE' => 'YEM',
		'ZM' => 'ZMB',
		'ZW' => 'ZWE',
		'BQ' => 'BES',
		'CD' => 'COD',
		'CW' => 'CUW',
		'GG' => 'GGY',
		'IM' => 'IMN',
		'JE' => 'JEY',
		'ME' => 'MNE',
		'PS' => 'PSE',
		'BL' => 'BLM',
		'MF' => 'MAF',
		'RS' => 'SRB',
		'SX' => 'SXM',
		'SS' => 'SSD',
		'TL' => 'TLS'
	];
	/** @var array */
	protected $exclude = [];
	/** @var array */
	protected $toTop = [];


	/**
	 * @param string|array $exclude
	 * @return $this
     */
	public function exclude($exclude)
	{
		$exclude = is_array($exclude) ? $exclude : [$exclude];
		foreach ($exclude as $current) {
			if (strlen($current) === 2) {
				$current = $this->convertIso2($current);
			}
			$this->exclude[$current] = $current;
		}
		return $this;
	}

	/**
	 * @param string|array $toTop
	 * @return $this
     */
	public function toTop($toTop)
	{
		$toTop = is_array($toTop) ? $toTop : [$toTop];
		foreach ($toTop as $current) {
			if (strlen($current) === 2) {
				$current = $this->convertIso2($current);
			}
			$this->toTop[$current] = $current;
		}
		return $this;
	}

	/**
	 * @return $this
     */
	public function reset()
	{
		$this->exclude = $this->toTop = [];
		return $this;
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function get($as = self::RETURN_AS_ISO3)
	{
		$list = empty($this->exclude) ? $this->completeIso3 : array_diff_key($this->completeIso3, $this->exclude);
		if (!empty($this->toTop)) {
			$list = array_merge(array_intersect_key($list, $this->toTop), array_diff_key($list, $this->toTop));
		}
		return $as === static::RETURN_AS_ISO2 ? $this->convertListToIso2($list) : $list;
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getEu($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->euCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getEurope($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->europeCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getNorthAmerica($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->northAmericaCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getSouthAmerica($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->southAmericaCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getAfrica($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->africaCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getAsia($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->asiaCompleteIso3, $as);
	}

	/**
	 * @param int $as
	 * @return array
     */
	public function getOceania($as = self::RETURN_AS_ISO3)
	{
		return $this->getRegion($this->oceaniaCompleteIso3, $as);
	}

	/**
	 * @param string $code
	 * @return string
	 * @throws Exception
     */
	public function convertIso2($code)
	{
		if (array_key_exists($code, $this->iso2ToIso3)) {
			return $this->iso2ToIso3[$code];
		}
		throw new Exception(sprintf('Mapping not found for ISO2 code %s', $code));
	}

	/**
	 * @param string $code
	 * @return string
	 * @throws Exception
     */
	public function convertIso3($code)
	{
		static $iso3ToIso2 = null;
		if (is_null($iso3ToIso2)) {
			$iso3ToIso2 = array_flip($this->iso2ToIso3);
		}
		if (array_key_exists($code, $iso3ToIso2)) {
			return $iso3ToIso2[$code];
		}
		throw new Exception(sprintf('Mapping not found for ISO3 code %s', $code));
	}

	/**
	 * @param array $region
	 * @param int $as
	 * @return array
     */
	protected function getRegion(array $region, $as = self::RETURN_AS_ISO3)
	{
		$this->exclude = [];
		foreach (array_keys($this->completeIso3) as $current) {
			if (!in_array($current, $region)) {
				$this->exclude[$current] = $current;
			}
		}
		return $this->get($as);
	}

	/**
	 * @param array $list
	 * @return array
	 * @throws Exception
     */
	protected function convertListToIso2(array $list)
	{
		$iso2List = [];
		foreach ($list as $code => $name) {
			$iso2List[$this->convertIso3($code)] = $name;
		}
		return $iso2List;
	}
}

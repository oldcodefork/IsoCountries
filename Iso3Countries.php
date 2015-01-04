<?php
/**
 * Class Iso3Countries
 * Author: Ed Eliot
 */
class Iso3Countries {
	/** @var array */
	protected $complete = array(
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
	);
	/** @var array */
	protected $euComplete = array(
		'AUT', 'BEL', 'BGR', 'HRV', 'CYP', 'CZE', 'DNK', 'EST', 'FIN', 'FRA',
		'DEU', 'GRC', 'HUN', 'IRL', 'ITA', 'LVA', 'LTU', 'LUX', 'MLT', 'NLD',
		'POL', 'PRT', 'ROU', 'SVK', 'SVN', 'ESP', 'SWE', 'GBR'
	);
	/** @var array */
	protected $europeComplete = array(
		'ALB', 'AND', 'AUT', 'BLR', 'BEL', 'BIH', 'BGR', 'HRV', 'CYP', 'CZE',
		'DNK', 'EST', 'FRO', 'FIN', 'FRA', 'DEU', 'GIB', 'GRC', 'HUN', 'ISL',
		'IRL', 'ITA', 'LVA', 'LIE', 'LTU', 'LUX', 'MKD', 'MLT', 'MDA', 'MCO',
		'NLD', 'NOR', 'POL', 'PRT', 'ROU', 'RUS', 'SMR', 'SRB', 'SVK', 'SVN',
		'ESP', 'SWE', 'CHE', 'UKR', 'GBR', 'VAT', 'RSB', 'IMN', 'MNE'
	);
	/** @var array */
	protected $northAmericaComplete = array(
		'AIA', 'ATG', 'ABW', 'BHS', 'BRB', 'BLZ', 'BMU', 'VGB', 'CAN', 'CYM',
		'CRI', 'CUB', 'CUW', 'DMA', 'DOM', 'SLV', 'GRL', 'GRD', 'GLP', 'GTM',
		'HTI', 'HND', 'JAM', 'MTQ', 'MEX', 'SPM', 'MSR', 'ANT', 'KNA', 'NIC',
		'PAN', 'PRI', 'KNA', 'LCA', 'SPM', 'VCT', 'TTO', 'TCA', 'VIR', 'USA',
		'SXM'
	);
	/** @var array */
	protected $southAmericaComplete = array(
		'ARG', 'BOL', 'BRA', 'CHL', 'COL', 'ECU', 'FLK', 'GUF', 'GUY', 'PRY',
		'PER', 'SUR', 'URY', 'VEN'
	);
	/** @var array */
	protected $africaComplete = array(
		'DZA', 'AGO', 'SHN', 'BEN', 'BWA', 'BFA', 'BDI', 'CMR', 'CPV', 'CAF',
		'TCD', 'COM', 'COG', 'DJI', 'EGY', 'GNQ', 'ERI', 'ETH', 'GAB', 'GMB',
		'GHA', 'GNB', 'GIN', 'CIV', 'KEN', 'LSO', 'LBR', 'LBY', 'MDG', 'MWI',
		'MLI', 'MRT', 'MUS', 'MYT', 'MAR', 'MOZ', 'NAM', 'NER', 'NGA', 'STP',
		'REU', 'RWA', 'STP', 'SEN', 'SYC', 'SLE', 'SOM', 'ZAF', 'SHN', 'SDN',
		'SWZ', 'TZA', 'TGO', 'TUN', 'UGA', 'COD', 'ZMB', 'TZA', 'ZWE', 'SSD',
		'COD'
	);
	/** @var array */
	protected $asiaComplete = array(
		'AFG', 'ARM', 'AZE', 'BHR', 'BGD', 'BTN', 'BRN', 'KHM', 'CHN', 'CXR',
		'CCK', 'IOT', 'GEO', 'HKG', 'IND', 'IDN', 'IRN', 'IRQ', 'ISR', 'JPN',
		'JOR', 'KAZ', 'PRK', 'KOR', 'KWT', 'KGZ', 'LAO', 'LBN', 'MAC', 'MYS',
		'MDV', 'MNG', 'MMR', 'NPL', 'OMN', 'PAK', 'PHL', 'QAT', 'SAU', 'SGP',
		'LKA', 'SYR', 'TWN', 'TJK', 'THA', 'TUR', 'TKM', 'ARE', 'UZB', 'VNM',
		'YEM', 'PSE'
	);
	/** @var array */
	protected $oceaniaComplete = array(
		'ASM', 'AUS', 'NZL', 'COK', 'FJI', 'PYF', 'GUM', 'KIR', 'MNP', 'MHL',
		'FSM', 'UMI', 'NRU', 'NCL', 'NZL', 'NIU', 'NFK', 'PLW', 'PNG', 'MNP',
		'SLB', 'TKL', 'TON', 'TUV', 'VUT', 'UMI', 'WLF', 'WSM', 'TLS'
	);
	/** @var array */
	protected $exclude = array();
	/** @var array */
	protected $toTop = array();

	/**
	 * @param string|array $exclude
	 * @return $this
     */
	public function exclude($exclude)
	{
		$exclude = is_array($exclude) ? $exclude : array($exclude);
		foreach ($exclude as $current) {
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
		$toTop = is_array($toTop) ? $toTop : array($toTop);
		foreach ($toTop as $current) {
			$this->toTop[$current] = $current;
		}
		return $this;
	}

	/**
	 * @return $this
     */
	public function reset()
	{
		$this->exclude = $this->toTop = array();
		return $this;
	}

	/**
	 * @return array
     */
	public function get()
	{
		$list = empty($this->exclude) ? $this->complete : array_diff_key($this->complete, $this->exclude);
		if (!empty($this->toTop)) {
			$list = array_merge(array_intersect_key($list, $this->toTop), array_diff_key($list, $this->toTop));
		}
		return $list;
	}

	/**
	 * @return array
     */
	public function get_eu()
	{
		return $this->get_region($this->euComplete);
	}

	/**
	 * @return array
     */
	public function get_europe()
	{
		return $this->get_region($this->europeComplete);
	}

	/**
	 * @return array
     */
	public function get_north_america()
	{
		return $this->get_region($this->northAmericaComplete);
	}

	/**
	 * @return array
     */
	public function get_south_america()
	{
		return $this->get_region($this->southAmericaComplete);
	}

	/**
	 * @return array
     */
	public function get_africa()
	{
		return $this->get_region($this->africaComplete);
	}

	/**
	 * @return array
     */
	public function get_asia()
	{
		return $this->get_region($this->asiaComplete);
	}

	/**
	 * @return array
     */
	public function get_oceania()
	{
		return $this->get_region($this->oceaniaComplete);
	}

	/**
	 * @param array $region
	 * @return array
	 */
	protected function get_region(array $region)
	{
		$this->exclude = array();
		foreach (array_keys($this->complete) as $current) {
			if (!in_array($current, $region)) {
				$this->exclude[$current] = $current;
			}
		}
		return $this->get();
	}
}

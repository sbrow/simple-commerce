<?php

namespace DoubleThreeDigital\SimpleCommerce\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Country extends Model
{
    use Sushi;

    protected $rows = [
        ['iso' => 'US', 'name' => 'United States'],
        ['iso' => 'CA', 'name' => 'Canada'],
        ['iso' => 'AF', 'name' => 'Afghanistan'],
        ['iso' => 'AL', 'name' => 'Albania'],
        ['iso' => 'DZ', 'name' => 'Algeria'],
        ['iso' => 'AS', 'name' => 'American Samoa'],
        ['iso' => 'AD', 'name' => 'Andorra'],
        ['iso' => 'AO', 'name' => 'Angola'],
        ['iso' => 'AI', 'name' => 'Anguilla'],
        ['iso' => 'AQ', 'name' => 'Antarctica'],
        ['iso' => 'AG', 'name' => 'Antigua and/or Barbuda'],
        ['iso' => 'AR', 'name' => 'Argentina'],
        ['iso' => 'AM', 'name' => 'Armenia'],
        ['iso' => 'AW', 'name' => 'Aruba'],
        ['iso' => 'AU', 'name' => 'Australia'],
        ['iso' => 'AT', 'name' => 'Austria'],
        ['iso' => 'AZ', 'name' => 'Azerbaijan'],
        ['iso' => 'BS', 'name' => 'Bahamas'],
        ['iso' => 'BH', 'name' => 'Bahrain'],
        ['iso' => 'BD', 'name' => 'Bangladesh'],
        ['iso' => 'BB', 'name' => 'Barbados'],
        ['iso' => 'BY', 'name' => 'Belarus'],
        ['iso' => 'BE', 'name' => 'Belgium'],
        ['iso' => 'BZ', 'name' => 'Belize'],
        ['iso' => 'BJ', 'name' => 'Benin'],
        ['iso' => 'BM', 'name' => 'Bermuda'],
        ['iso' => 'BT', 'name' => 'Bhutan'],
        ['iso' => 'BO', 'name' => 'Bolivia'],
        ['iso' => 'BA', 'name' => 'Bosnia and Herzegovina'],
        ['iso' => 'BW', 'name' => 'Botswana'],
        ['iso' => 'BV', 'name' => 'Bouvet Island'],
        ['iso' => 'BR', 'name' => 'Brazil'],
        ['iso' => 'IO', 'name' => 'British lndian Ocean Territory'],
        ['iso' => 'BN', 'name' => 'Brunei Darussalam'],
        ['iso' => 'BG', 'name' => 'Bulgaria'],
        ['iso' => 'BF', 'name' => 'Burkina Faso'],
        ['iso' => 'BI', 'name' => 'Burundi'],
        ['iso' => 'KH', 'name' => 'Cambodia'],
        ['iso' => 'CM', 'name' => 'Cameroon'],
        ['iso' => 'CV', 'name' => 'Cape Verde'],
        ['iso' => 'KY', 'name' => 'Cayman Islands'],
        ['iso' => 'CF', 'name' => 'Central African Republic'],
        ['iso' => 'TD', 'name' => 'Chad'],
        ['iso' => 'CL', 'name' => 'Chile'],
        ['iso' => 'CN', 'name' => 'China'],
        ['iso' => 'CX', 'name' => 'Christmas Island'],
        ['iso' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
        ['iso' => 'CO', 'name' => 'Colombia'],
        ['iso' => 'KM', 'name' => 'Comoros'],
        ['iso' => 'CG', 'name' => 'Congo'],
        ['iso' => 'CK', 'name' => 'Cook Islands'],
        ['iso' => 'CR', 'name' => 'Costa Rica'],
        ['iso' => 'HR', 'name' => 'Croatia (Hrvatska)'],
        ['iso' => 'CU', 'name' => 'Cuba'],
        ['iso' => 'CY', 'name' => 'Cyprus'],
        ['iso' => 'CZ', 'name' => 'Czech Republic'],
        ['iso' => 'CD', 'name' => 'Democratic Republic of Congo'],
        ['iso' => 'DK', 'name' => 'Denmark'],
        ['iso' => 'DJ', 'name' => 'Djibouti'],
        ['iso' => 'DM', 'name' => 'Dominica'],
        ['iso' => 'DO', 'name' => 'Dominican Republic'],
        ['iso' => 'TP', 'name' => 'East Timor'],
        ['iso' => 'EC', 'name' => 'Ecudaor'],
        ['iso' => 'EG', 'name' => 'Egypt'],
        ['iso' => 'SV', 'name' => 'El Salvador'],
        ['iso' => 'GQ', 'name' => 'Equatorial Guinea'],
        ['iso' => 'ER', 'name' => 'Eritrea'],
        ['iso' => 'EE', 'name' => 'Estonia'],
        ['iso' => 'ET', 'name' => 'Ethiopia'],
        ['iso' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
        ['iso' => 'FO', 'name' => 'Faroe Islands'],
        ['iso' => 'FJ', 'name' => 'Fiji'],
        ['iso' => 'FI', 'name' => 'Finland'],
        ['iso' => 'FR', 'name' => 'France'],
        ['iso' => 'FX', 'name' => 'France, Metropolitan'],
        ['iso' => 'GF', 'name' => 'French Guiana'],
        ['iso' => 'PF', 'name' => 'French Polynesia'],
        ['iso' => 'TF', 'name' => 'French Southern Territories'],
        ['iso' => 'GA', 'name' => 'Gabon'],
        ['iso' => 'GM', 'name' => 'Gambia'],
        ['iso' => 'GE', 'name' => 'Georgia'],
        ['iso' => 'DE', 'name' => 'Germany'],
        ['iso' => 'GH', 'name' => 'Ghana'],
        ['iso' => 'GI', 'name' => 'Gibraltar'],
        ['iso' => 'GR', 'name' => 'Greece'],
        ['iso' => 'GL', 'name' => 'Greenland'],
        ['iso' => 'GD', 'name' => 'Grenada'],
        ['iso' => 'GP', 'name' => 'Guadeloupe'],
        ['iso' => 'GU', 'name' => 'Guam'],
        ['iso' => 'GT', 'name' => 'Guatemala'],
        ['iso' => 'GN', 'name' => 'Guinea'],
        ['iso' => 'GW', 'name' => 'Guinea-Bissau'],
        ['iso' => 'GY', 'name' => 'Guyana'],
        ['iso' => 'HT', 'name' => 'Haiti'],
        ['iso' => 'HM', 'name' => 'Heard and Mc Donald Islands'],
        ['iso' => 'HN', 'name' => 'Honduras'],
        ['iso' => 'HK', 'name' => 'Hong Kong'],
        ['iso' => 'HU', 'name' => 'Hungary'],
        ['iso' => 'IS', 'name' => 'Iceland'],
        ['iso' => 'IN', 'name' => 'India'],
        ['iso' => 'ID', 'name' => 'Indonesia'],
        ['iso' => 'IR', 'name' => 'Iran (Islamic Republic of)'],
        ['iso' => 'IQ', 'name' => 'Iraq'],
        ['iso' => 'IE', 'name' => 'Ireland'],
        ['iso' => 'IL', 'name' => 'Israel'],
        ['iso' => 'IT', 'name' => 'Italy'],
        ['iso' => 'CI', 'name' => 'Ivory Coast'],
        ['iso' => 'JM', 'name' => 'Jamaica'],
        ['iso' => 'JP', 'name' => 'Japan'],
        ['iso' => 'JO', 'name' => 'Jordan'],
        ['iso' => 'KZ', 'name' => 'Kazakhstan'],
        ['iso' => 'KE', 'name' => 'Kenya'],
        ['iso' => 'KI', 'name' => 'Kiribati'],
        ['iso' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of'],
        ['iso' => 'KR', 'name' => 'Korea, Republic of'],
        ['iso' => 'KW', 'name' => 'Kuwait'],
        ['iso' => 'KG', 'name' => 'Kyrgyzstan'],
        ['iso' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
        ['iso' => 'LV', 'name' => 'Latvia'],
        ['iso' => 'LB', 'name' => 'Lebanon'],
        ['iso' => 'LS', 'name' => 'Lesotho'],
        ['iso' => 'LR', 'name' => 'Liberia'],
        ['iso' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
        ['iso' => 'LI', 'name' => 'Liechtenstein'],
        ['iso' => 'LT', 'name' => 'Lithuania'],
        ['iso' => 'LU', 'name' => 'Luxembourg'],
        ['iso' => 'MO', 'name' => 'Macau'],
        ['iso' => 'MK', 'name' => 'Macedonia'],
        ['iso' => 'MG', 'name' => 'Madagascar'],
        ['iso' => 'MW', 'name' => 'Malawi'],
        ['iso' => 'MY', 'name' => 'Malaysia'],
        ['iso' => 'MV', 'name' => 'Maldives'],
        ['iso' => 'ML', 'name' => 'Mali'],
        ['iso' => 'MT', 'name' => 'Malta'],
        ['iso' => 'MH', 'name' => 'Marshall Islands'],
        ['iso' => 'MQ', 'name' => 'Martinique'],
        ['iso' => 'MR', 'name' => 'Mauritania'],
        ['iso' => 'MU', 'name' => 'Mauritius'],
        ['iso' => 'TY', 'name' => 'Mayotte'],
        ['iso' => 'MX', 'name' => 'Mexico'],
        ['iso' => 'FM', 'name' => 'Micronesia, Federated States of'],
        ['iso' => 'MD', 'name' => 'Moldova, Republic of'],
        ['iso' => 'MC', 'name' => 'Monaco'],
        ['iso' => 'MN', 'name' => 'Mongolia'],
        ['iso' => 'MS', 'name' => 'Montserrat'],
        ['iso' => 'MA', 'name' => 'Morocco'],
        ['iso' => 'MZ', 'name' => 'Mozambique'],
        ['iso' => 'MM', 'name' => 'Myanmar'],
        ['iso' => 'NA', 'name' => 'Namibia'],
        ['iso' => 'NR', 'name' => 'Nauru'],
        ['iso' => 'NP', 'name' => 'Nepal'],
        ['iso' => 'NL', 'name' => 'Netherlands'],
        ['iso' => 'AN', 'name' => 'Netherlands Antilles'],
        ['iso' => 'NC', 'name' => 'New Caledonia'],
        ['iso' => 'NZ', 'name' => 'New Zealand'],
        ['iso' => 'NI', 'name' => 'Nicaragua'],
        ['iso' => 'NE', 'name' => 'Niger'],
        ['iso' => 'NG', 'name' => 'Nigeria'],
        ['iso' => 'NU', 'name' => 'Niue'],
        ['iso' => 'NF', 'name' => 'Norfork Island'],
        ['iso' => 'MP', 'name' => 'Northern Mariana Islands'],
        ['iso' => 'NO', 'name' => 'Norway'],
        ['iso' => 'OM', 'name' => 'Oman'],
        ['iso' => 'PK', 'name' => 'Pakistan'],
        ['iso' => 'PW', 'name' => 'Palau'],
        ['iso' => 'PA', 'name' => 'Panama'],
        ['iso' => 'PG', 'name' => 'Papua New Guinea'],
        ['iso' => 'PY', 'name' => 'Paraguay'],
        ['iso' => 'PE', 'name' => 'Peru'],
        ['iso' => 'PH', 'name' => 'Philippines'],
        ['iso' => 'PN', 'name' => 'Pitcairn'],
        ['iso' => 'PL', 'name' => 'Poland'],
        ['iso' => 'PT', 'name' => 'Portugal'],
        ['iso' => 'PR', 'name' => 'Puerto Rico'],
        ['iso' => 'QA', 'name' => 'Qatar'],
        ['iso' => 'SS', 'name' => 'Republic of South Sudan'],
        ['iso' => 'RE', 'name' => 'Reunion'],
        ['iso' => 'RO', 'name' => 'Romania'],
        ['iso' => 'RU', 'name' => 'Russian Federation'],
        ['iso' => 'RW', 'name' => 'Rwanda'],
        ['iso' => 'KN', 'name' => 'Saint Kitts and Nevis'],
        ['iso' => 'LC', 'name' => 'Saint Lucia'],
        ['iso' => 'VC', 'name' => 'Saint Vincent and the Grenadines'],
        ['iso' => 'WS', 'name' => 'Samoa'],
        ['iso' => 'SM', 'name' => 'San Marino'],
        ['iso' => 'ST', 'name' => 'Sao Tome and Principe'],
        ['iso' => 'SA', 'name' => 'Saudi Arabia'],
        ['iso' => 'SN', 'name' => 'Senegal'],
        ['iso' => 'RS', 'name' => 'Serbia'],
        ['iso' => 'SC', 'name' => 'Seychelles'],
        ['iso' => 'SL', 'name' => 'Sierra Leone'],
        ['iso' => 'SG', 'name' => 'Singapore'],
        ['iso' => 'SK', 'name' => 'Slovakia'],
        ['iso' => 'SI', 'name' => 'Slovenia'],
        ['iso' => 'SB', 'name' => 'Solomon Islands'],
        ['iso' => 'SO', 'name' => 'Somalia'],
        ['iso' => 'ZA', 'name' => 'South Africa'],
        ['iso' => 'GS', 'name' => 'South Georgia South Sandwich Islands'],
        ['iso' => 'ES', 'name' => 'Spain'],
        ['iso' => 'LK', 'name' => 'Sri Lanka'],
        ['iso' => 'SH', 'name' => 'St. Helena'],
        ['iso' => 'PM', 'name' => 'St. Pierre and Miquelon'],
        ['iso' => 'SD', 'name' => 'Sudan'],
        ['iso' => 'SR', 'name' => 'Suriname'],
        ['iso' => 'SJ', 'name' => 'Svalbarn and Jan Mayen Islands'],
        ['iso' => 'SZ', 'name' => 'Swaziland'],
        ['iso' => 'SE', 'name' => 'Sweden'],
        ['iso' => 'CH', 'name' => 'Switzerland'],
        ['iso' => 'SY', 'name' => 'Syrian Arab Republic'],
        ['iso' => 'TW', 'name' => 'Taiwan'],
        ['iso' => 'TJ', 'name' => 'Tajikistan'],
        ['iso' => 'TZ', 'name' => 'Tanzania, United Republic of'],
        ['iso' => 'TH', 'name' => 'Thailand'],
        ['iso' => 'TG', 'name' => 'Togo'],
        ['iso' => 'TK', 'name' => 'Tokelau'],
        ['iso' => 'TO', 'name' => 'Tonga'],
        ['iso' => 'TT', 'name' => 'Trinidad and Tobago'],
        ['iso' => 'TN', 'name' => 'Tunisia'],
        ['iso' => 'TR', 'name' => 'Turkey'],
        ['iso' => 'TM', 'name' => 'Turkmenistan'],
        ['iso' => 'TC', 'name' => 'Turks and Caicos Islands'],
        ['iso' => 'TV', 'name' => 'Tuvalu'],
        ['iso' => 'UG', 'name' => 'Uganda'],
        ['iso' => 'UA', 'name' => 'Ukraine'],
        ['iso' => 'AE', 'name' => 'United Arab Emirates'],
        ['iso' => 'GB', 'name' => 'United Kingdom'],
        ['iso' => 'UM', 'name' => 'United States minor outlying islands'],
        ['iso' => 'UY', 'name' => 'Uruguay'],
        ['iso' => 'UZ', 'name' => 'Uzbekistan'],
        ['iso' => 'VU', 'name' => 'Vanuatu'],
        ['iso' => 'VA', 'name' => 'Vatican City State'],
        ['iso' => 'VE', 'name' => 'Venezuela'],
        ['iso' => 'VN', 'name' => 'Vietnam'],
        ['iso' => 'VG', 'name' => 'Virgin Islands (British)'],
        ['iso' => 'VI', 'name' => 'Virgin Islands (U.S.)'],
        ['iso' => 'WF', 'name' => 'Wallis and Futuna Islands'],
        ['iso' => 'EH', 'name' => 'Western Sahara'],
        ['iso' => 'YE', 'name' => 'Yemen'],
        ['iso' => 'YU', 'name' => 'Yugoslavia'],
        ['iso' => 'ZR', 'name' => 'Zaire'],
        ['iso' => 'ZM', 'name' => 'Zambia'],
        ['iso' => 'ZW', 'name' => 'Zimbabwe'],
    ];
}

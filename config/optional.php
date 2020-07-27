<?php

define('IPS_TO_EXCLUDE',[
	'129.237.229.',
	'129.237.201.',
	'24.143.45.91',
	'195.26.95.208',
	'24.124.121.150',
	'24.143.33.129',
	'24.143.39.179',
	'24.143.45.91',
	'24.143.60.228',
	'99.184.64.68',
	'129.237.92.172',
	'129.237.183.',
	'172.58.139.',
	'172.58.142.',
]);

define('SITES_DICTIONARY',[
	'gbif' => 'GBIF Backbone Taxonomy',
	'col' => 'CoL',
	'col_upload' => 'CoL (zip file upload)',
	'itis' => 'CoL (zip file upload)',
	'gbif_col' => 'GBIF Catalogue of Life',
]);

define('OPTIONS_DICTIONARY',[
	'include_guids' => 'Include GUIDs',
	'include_authors' => 'Include Authors',
	'include_sources' => 'Include Sources',
	'include_common_names' => 'Include links to source',
	'fill_in_links' => 'Include links to source',
	'use_file_splitter' => 'Use file splitter',
	'exclude_extinct' => 'Use file splitter',
]);

define('DATE_FORMATTER','Y F j D');

$files_destination = WORKING_LOCATION.'data/';


# Specifies background and border colors for charts
# Both arrays should have the same number of elements since background and border colors go in pairs
const CHART_BACKGROUND_COLORS = ["rgba(86,206,255,0.2)", "rgba(162,235,54,0.2)", "rgba(86,255,206,0.2)", "rgba(235,54,162,0.2)", "rgba(54,162,235,0.2)", "rgba(192,192,75,0.2)", "rgba(162,54,235,0.2)", "rgba(255,206,86,0.2)", "rgba(75,192,192,0.2)", "rgba(99,255,132,0.2)", "rgba(206,255,86,0.2)", "rgba(255,99,132,0.2)", "rgba(153,255,102,0.2)", "rgba(64,159,255,0.2)", "rgba(235,162,54,0.2)", "rgba(64,255,159,0.2)", "rgba(99,132,255,0.2)", "rgba(153,102,255,0.2)", "rgba(192,192,75,0.2)", "rgba(192,75,192,0.2)", "rgba(255,132,99,0.2)", "rgba(255,86,206,0.2)", "rgba(255,102,153,0.2)", "rgba(132,99,255,0.2)", "rgba(159,64,255,0.2)", "rgba(255,64,159,0.2)", "rgba(102,255,153,0.2)", "rgba(54,235,162,0.2)", "rgba(255,153,102,0.2)", "rgba(75,192,192,0.2)", "rgba(255,159,64,0.2)", "rgba(159,255,64,0.2)", "rgba(192,75,192,0.2)", "rgba(132,255,99,0.2)", "rgba(102,153,255,0.2)", "rgba(206,86,255,0.2)"];
const CHART_BORDER_COLORS = ["rgba(86,206,255,1)", "rgba(162,235,54,1)", "rgba(86,255,206,1)", "rgba(235,54,162,1)", "rgba(54,162,235,1)", "rgba(192,192,75,1)", "rgba(162,54,235,1)", "rgba(255,206,86,1)", "rgba(75,192,192,1)", "rgba(99,255,132,1)", "rgba(206,255,86,1)", "rgba(255,99,132,1)", "rgba(153,255,102,1)", "rgba(64,159,255,1)", "rgba(235,162,54,1)", "rgba(64,255,159,1)", "rgba(99,132,255,1)", "rgba(153,102,255,1)", "rgba(192,192,75,1)", "rgba(192,75,192,1)", "rgba(255,132,99,1)", "rgba(255,86,206,1)", "rgba(255,102,153,1)", "rgba(132,99,255,1)", "rgba(159,64,255,1)", "rgba(255,64,159,1)", "rgba(102,255,153,1)", "rgba(54,235,162,1)", "rgba(255,153,102,1)", "rgba(75,192,192,1)", "rgba(255,159,64,1)", "rgba(159,255,64,1)", "rgba(192,75,192,1)", "rgba(132,255,99,1)", "rgba(102,153,255,1)", "rgba(206,86,255,1)"];
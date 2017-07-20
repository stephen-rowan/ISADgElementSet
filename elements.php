<?php
$elementSetMetadata = array(
	    'name'        => "GATE", 
	    'description' => "ISAD(G) (General International Standard Archival Description) defines the elements that should be included in an archival finding aid. It was approved by the International Council on Archives (ICA/CIA) as a standard to register archival documents produced by corporations, persons and families. See http://www.icacds.org.uk/eng/ISAD(G).pdf",
	);
	$elements = array(
	//GATE Reference code - equivalent to Dublin Core [Identifier]
		array(
			'label' => 'GATE Reference code', 
			'name'  => 'GATE Reference code',
			'description' => 'GATE Reference code - equivalent to Dublin Core [Identifier]. To identify uniquely the unit of description and to provide a link to the description that represents it.',
			'data_type'   => 'Tiny Text',
		),
	//GATE Title equivalent to Dublin Core [Title]
		array(
			'label' => 'GATE Title', 
			'name'  => 'GATE Title',
			'description' => 'GATE Title - equivalent to Dublin Core [Title]. To name the unit of description.',
			'data_type'   => 'Tiny Text',
		),
	//GATE Name of Creator equivalent to Dublin Core [Creator]
	    array(
			'label' => 'GATE Name of Creator', 
			'name'  => 'GATE Name of Creator',
			'description' => 'GATE Name of Creator - equivalent to Dublin Core [Creator]. To identify the creator (or creators) of the unit of description.',
			'data_type'   => 'Tiny Text',
	    ),
	//GATE Dates of Creation equivalent to Dublin Core [Date]
	    array(
			'label' => 'GATE Dates of Creation', 
	        	'name'  => 'GATE Dates of Creation',
			'description' => 'GATE Dates of Creation - equivalent to Dublin Core [Date]. To identify and record the date(s) of the unit of description.',
			'data_type'	=> 'Tiny Text',
	    ),
	//GATE Extent of the Unit of Description - equivalent to Dublin Core [Extent of unit of description]. Needs to be added to all item types.
		array(
	   		'label' => 'GATE Extent of the Unit of Description', 
	   		'name'  => 'GATE Extent of the Unit of Description',
	   		'description' => 'GATE Extent of the Unit of Description - equivalent to Dublin Core [Extent of unit of description]. Needs to be added to all item types.',
	   		'data_type'   => 'Tiny Text',
	      ), 
	//GATE Level of description - equivalent to Dublin Core [Level of description]. Needs to be added to all item types.
		array(
	  		'label' => 'GATE Level of description', 
	  		'name'  => 'GATE Level of description',
	  		'description' =>'GATE Level of description - equivalent to Dublin Core [Level of description].. Needs to be added to all item types.',
	  		'data_type'   => 'Tiny Text',
	        ),
	//GATE Language of material - equivalent to Dublin Core [Language]
	    array(
			'label' => 'GATE Language of material', 
			'name'  => 'GATE Language of material',
			'description' => 'GATE Language of material - equivalent to Dublin Core [Language].',
			'data_type'   => 'Tiny Text',
	     ),
	//GATE Conditions governing access - equivalent to Dublin Core [Rights]
	    array(
			'label' => 'GATE Conditions governing access', 
			'name'  => 'GATE Conditions governing access',
			'description' => 'GATE Conditions governing access - equivalent to Dublin Core [Rights].',
			'data_type'   => 'Tiny Text',
	     ),
	
	//GATE Collection Scope and Content - collection level element.
	    array(
			'label' => 'GATE Collection Scope and Content', 
			'name'  => 'GATE Collection Scope and Content',
			'description'	=> 'GATE Collection Scope and Content - collection level element.',
			'data_type'   => 'Tiny Text',
		     ),
	//GATE Description - equivalent to Dublin Core [Description].    
	    array(
			'label' => 'GATE Description', 
			'name'  => 'GATE Description',
			'description' => 'GATE Description - equivalent to Dublin Core [Description].',
			'data_type'   => 'Text',
	     ),
	//GATE Location it came from - equivalent to Dublin Core [Location it came from]. ("Immediate source of acquisition or transfer")
		array(
			'label' => 'GATE Location it came from', 
			'name'  => 'GATE Location it came from',
			'description'	=> 'GATE Location it came from - equivalent to Dublin Core [Location it came from]. ("Immediate source of acquisition or transfer"). Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',	
		),
	//GATE Current location - equivalent to Dublin Core [Current location] - (needs to be added to all item types)
		array(
			'label'  => 'GATE Current location', 
			'name'  => 'GATE Current location', 
			'description' => 'GATE Current location - equivalent to Dublin Core [Current location]. Needs to be added to all item types.', 
			'data_type'   => 'Tiny Text',
		),
	//GATE medium/material/format - equivalent to Dublin Core [Format]. 
		array(
			'label' => 'GATE medium/material/format', 
			'name'  => 'GATE medium/material/format',
		'description' => 'GATE medium/material/format - equivalent to Dublin Core [Format].', 
			'data_type'   => 'Tiny Text',
		),
	//GATE Purpose - equivalent to Dublin Core [Purpose]. Needs to be added to all item types.
		array(
			'label' => 'GATE Purpose', 
			'name'  => 'GATE Purpose',
			'description' => 'GATE Purpose - equivalent to Dublin Core [Purpose]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		 ),
	//GATE Notes - equivalent to Dublin Core [Notes]. Needs to be added to all item types.
		array(
			'label' => 'GATE Notes', 
			'name'  => 'GATE Notes',
			'description' => 'GATE Notes - equivalent to Dublin Core [Notes]. Needs to be added to all item types.',
			'data_type'   => 'Text',
		  ),
	//GATE size/dimensions - equivalent to Dublin Core [size/dimensions]. Needs to be added to all item types.
		array(
			'label' => 'GATE size/dimensions', 
			'name'  => 'GATE size/dimensions',
			'description'	=> 'GATE size/dimensions - no equivalent in Dublin Core. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//GATE Collection Administrative and biographical history - - collection level element.
		array(
			'label'       => 'GATE Collection Administrative and biographical history', 
			'name'        => 'GATE Collection Administrative and biographical history', 
			'description' => 'GATE Collection Administrative and biographical history - - collection level element.',
			'data_type'   => 'Text',
		),
	//GATE Collection Archival history - - collection level element.
		array(
	   		'label' => 'GATE Collection Archival history', 
	   		'name'  => 'GATE Collection Archival history',
	   		'description' => 'GATE Collection Archival history - - collection level element.',
	   		'data_type'   => 'Text',
	       ),
	//GATE related units of description - equivalent to Dublin Core [related]. 
		array(
			'label'       => 'GATE related units of description', 
			'name'        => 'GATE related units of description', 
			'description' => 'GATE related units of description - equivalent to Dublin Core [related].',
			'data_type'   => 'Tiny Text',
		),
	//GATE date of description- equivalent to Dublin Core [date of description]. Needs to be added to all item types.
		array(
			'label'       => 'GATE date of description', 
			'name'        => 'GATE date of description', 
			'description' => 'GATE date of description- equivalent to Dublin Core [date of description]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//GATE physical characteristics and technical requirements- equivalent to Dublin Core [condition]. Needs to be added to all item types. 
		array(
			'label'       => 'GATE physical characteristics and technical requirements', 
			'name'        => 'GATE physical characteristics and technical requirements', 
			'description' => 'GATE physical characteristics and technical requirements - equivalent to Dublin Core [condition]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//GATE community it belongs to - equivalent to Dublin Core [community it belongs to]. Needs to be added to all item types.
		array(
			'label'       => 'GATE community it belongs to', 
			'name'        => 'GATE community it belongs to', 
			'description' => 'GATE community it belongs to - equivalent to Dublin Core [community it belongs to]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//GATE families it relates to - equivalent to Dublin Core [Family names]. Needs to be added to all item types.
		array(
			'label'       => 'GATE families it relates to', 
			'name'        => 'GATE families it relates to', 
			'description' => 'GATE families it relates to - equivalent to Dublin Core [Family names]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//GATE comments - equivalent to Dublin Core [Comments]. Needs to be added to all item types.
		array(
			'label'       => 'GATE comments', 
			'name'        => 'GATE comments', 
			'description' => 'GATE comments - equivalent to Dublin Core [Comments]. Needs to be added to all item types.',
			'data_type'   => 'Text',
		),
	);

<?php
$elementSetMetadata = array(
	    'name'        => "ISAD-G", 
	    'description' => "ISAD(G) (General International Standard Archival Description) defines the elements that should be included in an archival finding aid. It was approved by the International Council on Archives (ICA/CIA) as a standard to register archival documents produced by corporations, persons and families. See http://www.icacds.org.uk/eng/ISAD(G).pdf",
	);
	$elements = array(
	//ISAD-G Reference code - equivalent to Dublin Core [Identifier]
		array(
			'label' => 'ISAD-G Reference code', 
			'name'  => 'ISAD-G Reference code',
			'description' => 'ISAD-G Reference code - equivalent to Dublin Core [Identifier]. To identify uniquely the unit of description and to provide a link to the description that represents it.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G Title equivalent to Dublin Core [Title]
		array(
			'label' => 'ISAD-G Title', 
			'name'  => 'ISAD-G Title',
			'description' => 'ISAD-G Title - equivalent to Dublin Core [Title]. To name the unit of description.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G Name of Creator equivalent to Dublin Core [Creator]
	    array(
			'label' => 'ISAD-G Name of Creator', 
			'name'  => 'ISAD-G Name of Creator',
			'description' => 'ISAD-G Name of Creator - equivalent to Dublin Core [Creator]. To identify the creator (or creators) of the unit of description.',
			'data_type'   => 'Tiny Text',
	    ),
	//ISAD-G Dates of Creation equivalent to Dublin Core [Date]
	    array(
			'label' => 'ISAD-G Dates of Creation', 
	        	'name'  => 'ISAD-G Dates of Creation',
			'description' => 'ISAD-G Dates of Creation - equivalent to Dublin Core [Date]. To identify and record the date(s) of the unit of description.',
			'data_type'	=> 'Tiny Text',
	    ),
	//ISAD-G Extent of the Unit of Description - equivalent to Dublin Core [Extent of unit of description]. Needs to be added to all item types.
		array(
	   		'label' => 'ISAD-G Extent of the Unit of Description', 
	   		'name'  => 'ISAD-G Extent of the Unit of Description',
	   		'description' => 'ISAD-G Extent of the Unit of Description - equivalent to Dublin Core [Extent of unit of description]. Needs to be added to all item types.',
	   		'data_type'   => 'Tiny Text',
	      ), 
	//ISAD-G Level of description - equivalent to Dublin Core [Level of description]. Needs to be added to all item types.
		array(
	  		'label' => 'ISAD-G Level of description', 
	  		'name'  => 'ISAD-G Level of description',
	  		'description' =>'ISAD-G Level of description - equivalent to Dublin Core [Level of description].. Needs to be added to all item types.',
	  		'data_type'   => 'Tiny Text',
	        ),
	//ISAD-G Language of material - equivalent to Dublin Core [Language]
	    array(
			'label' => 'ISAD-G Language of material', 
			'name'  => 'ISAD-G Language of material',
			'description' => 'ISAD-G Language of material - equivalent to Dublin Core [Language].',
			'data_type'   => 'Tiny Text',
	     ),
	//ISAD-G Conditions governing access - equivalent to Dublin Core [Rights]
	    array(
			'label' => 'ISAD-G Conditions governing access', 
			'name'  => 'ISAD-G Conditions governing access',
			'description' => 'ISAD-G Conditions governing access - equivalent to Dublin Core [Rights].',
			'data_type'   => 'Tiny Text',
	     ),
	
	//ISAD-G Collection Scope and Content - collection level element.
	    array(
			'label' => 'ISAD-G Collection Scope and Content', 
			'name'  => 'ISAD-G Collection Scope and Content',
			'description'	=> 'ISAD-G Collection Scope and Content - collection level element.',
			'data_type'   => 'Tiny Text',
		     ),
	//ISAD-G Description - equivalent to Dublin Core [Description].    
	    array(
			'label' => 'ISAD-G Description', 
			'name'  => 'ISAD-G Description',
			'description' => 'ISAD-G Description - equivalent to Dublin Core [Description].',
			'data_type'   => 'Text',
	     ),
	//ISAD-G Location it came from - equivalent to Dublin Core [Location it came from]. ("Immediate source of acquisition or transfer")
		array(
			'label' => 'ISAD-G Location it came from', 
			'name'  => 'ISAD-G Location it came from',
			'description'	=> 'ISAD-G Location it came from - equivalent to Dublin Core [Location it came from]. ("Immediate source of acquisition or transfer"). Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',	
		),
	//ISAD-G Current location - equivalent to Dublin Core [Current location] - (needs to be added to all item types)
		array(
			'label'  => 'ISAD-G Current location', 
			'name'  => 'ISAD-G Current location', 
			'description' => 'ISAD-G Current location - equivalent to Dublin Core [Current location]. Needs to be added to all item types.', 
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G medium/material/format - equivalent to Dublin Core [Format]. 
		array(
			'label' => 'ISAD-G medium/material/format', 
			'name'  => 'ISAD-G medium/material/format',
		'description' => 'ISAD-G medium/material/format - equivalent to Dublin Core [Format].', 
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G Purpose - equivalent to Dublin Core [Purpose]. Needs to be added to all item types.
		array(
			'label' => 'ISAD-G Purpose', 
			'name'  => 'ISAD-G Purpose',
			'description' => 'ISAD-G Purpose - equivalent to Dublin Core [Purpose]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		 ),
	//ISAD-G Notes - equivalent to Dublin Core [Notes]. Needs to be added to all item types.
		array(
			'label' => 'ISAD-G Notes', 
			'name'  => 'ISAD-G Notes',
			'description' => 'ISAD-G Notes - equivalent to Dublin Core [Notes]. Needs to be added to all item types.',
			'data_type'   => 'Text',
		  ),
	//ISAD-G size/dimensions - equivalent to Dublin Core [size/dimensions]. Needs to be added to all item types.
		array(
			'label' => 'ISAD-G size/dimensions', 
			'name'  => 'ISAD-G size/dimensions',
			'description'	=> 'Provides a timestamp for the overall length or duration of the audio. Represents the playback time. Format: HH:MM:SS',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G Collection Administrative and biographical history - - collection level element.
		array(
			'label'       => 'ISAD-G Collection Administrative and biographical history', 
			'name'        => 'ISAD-G Collection Administrative and biographical history', 
			'description' => 'ISAD-G Collection Administrative and biographical history - - collection level element.',
			'data_type'   => 'Text',
		),
	//ISAD-G Collection Archival history - - collection level element.
		array(
	   		'label' => 'ISAD-G Collection Archival history', 
	   		'name'  => 'ISAD-G Collection Archival history',
	   		'description' => 'ISAD-G Collection Archival history - - collection level element.',
	   		'data_type'   => 'Text',
	       ),
	//ISAD-G related units of description - equivalent to Dublin Core [related]. 
		array(
			'label'       => 'ISAD-G related units of description', 
			'name'        => 'ISAD-G related units of description', 
			'description' => 'ISAD-G related units of description - equivalent to Dublin Core [related].',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G date of description- equivalent to Dublin Core [date of description]. Needs to be added to all item types.
		array(
			'label'       => 'ISAD-G date of description', 
			'name'        => 'ISAD-G date of description', 
			'description' => 'ISAD-G date of description- equivalent to Dublin Core [date of description]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G physical characteristics and technical requirements- equivalent to Dublin Core [condition]. Needs to be added to all item types. 
		array(
			'label'       => 'ISAD-G physical characteristics and technical requirements', 
			'name'        => 'ISAD-G physical characteristics and technical requirements', 
			'description' => 'ISAD-G physical characteristics and technical requirements - equivalent to Dublin Core [condition]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G community it belongs to - equivalent to Dublin Core [community it belongs to]. Needs to be added to all item types.
		array(
			'label'       => 'ISAD-G community it belongs to', 
			'name'        => 'ISAD-G community it belongs to', 
			'description' => 'ISAD-G community it belongs to - equivalent to Dublin Core [community it belongs to]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G families it relates to - equivalent to Dublin Core [Family names]. Needs to be added to all item types.
		array(
			'label'       => 'ISAD-G families it relates to', 
			'name'        => 'ISAD-G families it relates to', 
			'description' => 'ISAD-G families it relates to - equivalent to Dublin Core [Family names]. Needs to be added to all item types.',
			'data_type'   => 'Tiny Text',
		),
	//ISAD-G comments - equivalent to Dublin Core [Comments]. Needs to be added to all item types.
		array(
			'label'       => 'ISAD-G comments', 
			'name'        => 'ISAD-G comments', 
			'description' => 'ISAD-G comments - equivalent to Dublin Core [Comments]. Needs to be added to all item types.',
			'data_type'   => 'Text',
		),
	);

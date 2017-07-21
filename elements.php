<?php
$elementSetMetadata = array(
	    'name'        => "Leeds-GATE element set", 
	    'description' => "The Leeds-GATE element set is based upon ISAD(G) (General International Standard Archival Description). ISAD(G) defines the elements that should be included in an archival finding aid. It was approved by the International Council on Archives (ICA/CIA) as a standard to register archival documents produced by corporations, persons and families. See http://www.icacds.org.uk/",
	);
	$elements = array(
	//01. GATE Reference code - equivalent to Dublin Core [Identifier]
    //Give the unique identifier for the unit of description.
    //This is the 4-part number that is marked somewhere on the item, usually in pencil.
    //An example is 2016.3.1.0015.
		array(
			'label' => 'GATE Reference code', 
			'name'  => 'GATE Reference code',
			'description' => 'Give the unique identifier for the unit of description. This is the 4-part number that is marked somewhere on the item, usually in pencil. An example is 2016.3.1.0015.',
			'data_type'   => 'Tiny Text',
		),
	//02. GATE Title equivalent to Dublin Core [Title]
    //Give a name for the unit of description.
    //This should be either its formal title (e.g. if it is a book, the title of the book); or a brief title that describes what it is.
    //Note that a title should be unique (i.e. do not title 2 different items “Photograph of wedding” - use, for example, "Bride and groom outside church" and "Bride at reception").
	//Also note that a title should not include information that is given elsewhere: for example, there are other fields that tell us the item is a photograph, so do not title something "Photograph of wedding".
	//Examples: Leeds Trav Ed Collection (collection/fonds) - Gypsies and Traveller In Their Own Words production records (series) -Smoke In The Lanes (item)
		array(
			'label' => 'GATE Title', 
			'name'  => 'GATE Title',
			'description' => 'Give a name for the unit of description. This should be either its formal title (e.g. if it is a book, the title of the book); or a brief title that describes what it is. Note that a title should be unique (i.e. do not title 2 different items “Photograph of wedding” - use, for example, "Bride and groom outside church" and "Bride at reception"). Also note that a title should not include information that is given elsewhere: for example, there are other fields that tell us the item is a photograph, so do not title something "Photograph of wedding". Examples: Leeds Trav Ed Collection (collection/fonds) - Gypsies and Traveller In Their Own Words production records (series) - Smoke In The Lanes (item)',
			'data_type'   => 'Tiny Text',
		),
	//03. GATE Name of Creator equivalent to Dublin Core [Creator]
	//Give the name of the creator (or creators) of the unit of description.
	//At item level, this will be the name of the creator of the item (e.g. the author of a book, writer of a letter, etc). At collection level, it is the person or organisation who brought the collection together (e.g. Leeds Trav Ed).
	    array(
			'label' => 'GATE Name of Creator', 
			'name'  => 'GATE Name of Creator',
			'description' => 'Give the name of the creator (or creators) of the unit of description. At item level, this will be the name of the creator of the item (e.g. the author of a book, writer of a letter, etc). At collection level, it is the person or organisation who brought the collection together (e.g. Leeds Trav Ed).',
			'data_type'   => 'Tiny Text',
	    ),
	//04. GATE Dates of Creation equivalent to Dublin Core [Date]
	//Give a date(s) for the unit of description.
	//There are different types of dates that you could record - give at least one of the following types, as appropriate to the materials and the level of description:
	//Date(s)when the records were accumulated; (this would be usual at Fonds/Collection level)
	//Date(s) when documents were created or published, before they became archival records; including dates of copies, editions, or versions. (This would be usual at Item level).
	//Say what type of date(s) it is, if it is unclear.
	//You can give a single date or a range of dates, as appropriate. A range of dates should be inclusive (so "2000-2015" goes up to the end of 2015). Use the abbreviation "c." (= circa) for approximate dates.
	    array(
			'label' => 'GATE Dates of Creation', 
	       	'name'  => 'GATE Dates of Creation',
			'description' => 'Give a date(s) for the unit of description. There are different types of dates that you could record - give at least one of the following types, as appropriate to the materials and the level of description: Date(s)when the records were accumulated; (this would be usual at Fonds/Collection level) Date(s) when documents were created or published, before they became archival records; including dates of copies, editions, or versions. (This would be usual at Item level). Say what type of date(s) it is, if it is unclear. You can give a single date or a range of dates, as appropriate. A range of dates should be inclusive (so "2000-2015" goes up to the end of 2015). Use the abbreviation "c." (= circa) for approximate dates.',
			'data_type'	=> 'Tiny Text',
	    ),
	//05. GATE Level of description - equivalent to Dublin Core [Level of description]. Needs to be added to all item types.
	//Record the level of this unit of description; for example, “Collection/Fonds”, “Series” or “Item”.
	    array(
	        'label' => 'GATE Level of description',
	        'name'  => 'GATE Level of description',
	        'description' =>'Record the level of this unit of description; for example, “Collection/Fonds”, “Series” or “Item”.',
	        'data_type'   => 'Tiny Text',
	    ),
	//06. GATE Collection.
	//For units of description below Collection/Fonds level, record the name of the collection that the item is part of (NB this will also be indicated by its reference code)
	    array(
	        'label' => 'GATE Collection',
	        'name'  => 'GATE Collection',
	        'description' =>'For units of description below Collection/Fonds level, record the name of the collection that the item is part of (NB this will also be indicated by its reference code)',
	        'data_type'   => 'Tiny Text',
	    ),
	//07. GATE Sub-collection.
	//For units of description below Collection/Fonds level, record the name of the collection that the item is part of (NB this will also be indicated by its reference code)
	    array(
	        'label' => 'GATE Sub-collection',
	        'name'  => 'GATE Sub-collection',
	        'description' =>'For units of description below sub-collection level, record the name of the sub-collection that the item is part of (NB this will also be indicated by its reference code)',
	        'data_type'   => 'Tiny Text',
	    ),
	//08. GATE Extent and medium of the unit of description.
	//Give the physical or logical extent of the unit of description, in terms of quantity, bulk or size.
	//Record the extent of a unit of description by giving the number of physical or logical units in arabic numerals, and the unit of measurement. Where relevant, give the size of the unit of description as well as the number of logical units. Give the specific medium(s) of the unit of description. (e.g. "1 book". "2 mp3 files") and where relevant, the materials that the unit of description consists of.
	//Alternatively (especially when describing a whole fonds/collection), give the linear shelf space or cubic storage space of the unit of description. If you give the linear shelf space, and additional information is desirable, add the additional information in brackets.
	//Examples:
	//13 containers of graphic material and textual records (Series)
	//103.5 cubic feet (98 boxes)  (Fonds)
	//1 folder, containing 38 items (File)
	//1 colour photographic print (Item)
		array(
	   		'label' => 'GATE Extent and medium of the unit of description', 
	   		'name'  => 'GATE Extent and medium of the unit of description',
	   		'description' => 'Give the physical or logical extent of the unit of description, in terms of quantity, bulk or size. Record the extent of a unit of description by giving the number of physical or logical units in arabic numerals, and the unit of measurement. Where relevant, give the size of the unit of description as well as the number of logical units. Give the specific medium(s) of the unit of description. (e.g. "1 book". "2 mp3 files") and where relevant, the materials that the unit of description consists of. Alternatively (especially when describing a whole fonds/collection), give the linear shelf space or cubic storage space of the unit of description. If you give the linear shelf space, and additional information is desirable, add the additional information in brackets. Examples: 13 containers of graphic material and textual records (Series). 103.5 cubic feet (98 boxes)  (Fonds). 1 folder, containing 38 items (File). 1 colour photographic print (Item)',
	   		'data_type'   => 'Tiny Text',
	      ), 
	 //09. GATE Physical characteristics and technical requirements
     //Indicate any important physical conditions, such as preservation requirements, that affect the use of the unit of description. Note any software and/or hardware required to access the unit of description.
	    array(
			'label' => 'GATE Physical characteristics and technical requirements', 
			'name'  => 'GATE Physical characteristics and technical requirements',
			'description' => 'Indicate any important physical conditions, such as preservation requirements, that affect the use of the unit of description. Note any software and/or hardware required to access the unit of description.',
			'data_type'   => 'Tiny Text',
	     ),
	//10. GATE Conditions governing access.
	//Provide information on the legal status or other regulations that restrict or affect access to the unit of description.
	//Specify the law or legal status, contract, regulation or policy that affects access to the unit of description. If material is closed (unavailable to the public), indicate if possible the extent of the period of closure and the date at which the material will open when appropriate.
	//NB If you are cataloguing at Item level, this information has probably already been completed for the whole collection/fonds; please check. If it has, you do not have to add it at individual Item level.
	//Examples:
	//Unrestricted access, including display rights and consultation rights (Fonds)
	//Patient records contain private data; records are closed for 50 years from date of creation. Researchers may apply to use these records in accordance with State Archives access statement. (Series)
	//Material restricted by 5 USC 552 (b)(1) - National Security (Series)
	//Material restricted by terms of donor's deed of gift (Series)
	//Use of audio, video, or film materials may require production of viewing copy. (Fonds)
	//All materials of living persons other than Louis D. Rubin, Jr., are closed to research until January 2018 (25 years) or until date of death of such persons, whichever occurs first, except with the written permission of the persons involved. This restriction chiefly affects materials in Series 1.1., 6.2., and 7.1. LDR material is without restriction. (Fonds) 
	//Access to the entire fonds is restricted until 2025. Series 3 (Business ventures) is closed until 31 December 2020. (Fonds) 
	    array(
			'label' => 'GATE Conditions governing access', 
			'name'  => 'GATE Conditions governing access',
			'description' => 'Provide information on the legal status or other regulations that restrict or affect access to the unit of description. Specify the law or legal status, contract, regulation or policy that affects access to the unit of description. If material is closed (unavailable to the public), indicate if possible the extent of the period of closure and the date at which the material will open when appropriate. NB If you are cataloguing at Item level, this information has probably already been completed for the whole collection/fonds; please check. If it has, you do not have to add it at individual Item level. Examples: Unrestricted access, including display rights and consultation rights (Fonds). Patient records contain private data; records are closed for 50 years from date of creation. Researchers may apply to use these records in accordance with State Archives access statement. (Series). Material restricted by 5 USC 552 (b)(1) - National Security (Series). Material restricted by terms of donors deed of gift (Series). Use of audio, video, or film materials may require production of viewing copy. (Fonds).All materials of living persons other than Louis D. Rubin, Jr., are closed to research until January 2018 (25 years) or until date of death of such persons, whichever occurs first, except with the written permission of the persons involved. This restriction chiefly affects materials in Series 1.1., 6.2., and 7.1. LDR material is without restriction. (Fonds). Access to the entire fonds is restricted until 2025. Series 3 (Business ventures) is closed until 31 December 2020. (Fonds)',
		    'data_type'   => 'Tiny Text',
	     ),
    //11. GATE Conditions governing reproduction 
    //For our Archives, this usually means naming the copyright holder, which will almost always be Leeds GATE Archives, or in the case of a book, the publisher of the book; and the type of Creative Commons license under which the unit of description is published on our website, which will almost always be CC BY/NC/ND. 
	    array(
	        'label' => 'GATE Conditions governing reproduction',
	        'name'  => 'GATE Conditions governing reproduction',
	        'description'	=> 'For our Archives, this usually means naming the copyright holder, which will almost always be Leeds GATE Archives, or in the case of a book, the publisher of the book; and the type of Creative Commons license under which the unit of description is published on our website, which will almost always be CC BY/NC/ND. ',
	        'data_type'   => 'Tiny Text',
	    ),
	 //12. GATE Language of Material
	 //Identify the language(s), script(s) and symbol system(s) employed in the unit of description if you do not recognise them; do not guess.
	 //Record the language(s) and/or script(s) of the materials in the unit of description. Note any distinctive alphabets, scripts, or symbol systems employed.
	 //Examples:
	 //In Romani, with partial English translation (Item)
	 //Chinese (Series)
	 //English, Romani, Welsh (Collection) 
	    array(
	        'label' => 'GATE Language of Material',
	        'name'  => 'GATE Language of Material',
	        'description'	=> 'Identify the language(s), script(s) and symbol system(s) employed in the unit of description if you do not recognise them; do not guess. Record the language(s) and/or script(s) of the materials in the unit of description. Note any distinctive alphabets, scripts, or symbol systems employed. Examples: In Romani, with partial English translation (Item). Chinese (Series). English, Romani, Welsh (Collection) ',
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

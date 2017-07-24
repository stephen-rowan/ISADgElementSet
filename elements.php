<?php
$elementSetMetadata = array(
	    'name'        => "Leeds-GATE element set", 
	    'description' => "The Leeds-GATE element set is based upon ISAD(G) (General International Standard Archival Description). ISAD(G) defines the elements that should be included in an archival finding aid. It was approved by the International Council on Archives (ICA/CIA) as a standard to register archival documents produced by corporations, persons and families. See http://www.icacds.org.uk/",
	);
	$elements = array(
	//01. GATE Reference code - equivalent to Dublin Core [Identifier]
        array(
			'label' => 'GATE Reference code', 
			'name'  => 'GATE Reference code',
			'description' => 'Give the unique identifier for the unit of description. This is the 4-part number that is marked somewhere on the item, usually in pencil. An example is 2016.3.1.0015.',
			'data_type'   => 'Tiny Text',
		),
	//02. GATE Title equivalent to Dublin Core [Title]
        array(
			'label' => 'GATE Title', 
			'name'  => 'GATE Title',
			'description' => 'Give a name for the unit of description. This should be either its formal title (e.g. if it is a book, the title of the book); or a brief title that describes what it is. Note that a title should be unique (i.e. do not title 2 different items “Photograph of wedding” - use, for example, "Bride and groom outside church" and "Bride at reception"). Also note that a title should not include information that is given elsewhere: for example, there are other fields that tell us the item is a photograph, so do not title something "Photograph of wedding". Examples: Leeds Trav Ed Collection (collection/fonds) - Gypsies and Traveller In Their Own Words production records (series) - Smoke In The Lanes (item)',
			'data_type'   => 'Tiny Text',
		),
	//03. GATE Name of Creator equivalent to Dublin Core [Creator]
	   array(
			'label' => 'GATE Name of Creator', 
			'name'  => 'GATE Name of Creator',
			'description' => 'Give the name of the creator (or creators) of the unit of description. At item level, this will be the name of the creator of the item (e.g. the author of a book, writer of a letter, etc). At collection level, it is the person or organisation who brought the collection together (e.g. Leeds Trav Ed).',
			'data_type'   => 'Tiny Text',
	    ),
	//04. GATE Dates of Creation equivalent to Dublin Core [Date]
	   array(
			'label' => 'GATE Dates of Creation', 
	       	'name'  => 'GATE Dates of Creation',
			'description' => 'Give a date(s) for the unit of description. There are different types of dates that you could record - give at least one of the following types, as appropriate to the materials and the level of description: Date(s)when the records were accumulated; (this would be usual at Fonds/Collection level) Date(s) when documents were created or published, before they became archival records; including dates of copies, editions, or versions. (This would be usual at Item level). Say what type of date(s) it is, if it is unclear. You can give a single date or a range of dates, as appropriate. A range of dates should be inclusive (so "2000-2015" goes up to the end of 2015). Use the abbreviation "c." (= circa) for approximate dates.',
			'data_type'	=> 'Tiny Text',
	    ),
	//05. GATE Level of description - equivalent to Dublin Core [Level of description]. Needs to be added to all item types.
	   array(
	        'label' => 'GATE Level of description',
	        'name'  => 'GATE Level of description',
	        'description' =>'Record the level of this unit of description; for example, “Collection/Fonds”, “Series” or “Item”.',
	        'data_type'   => 'Tiny Text',
	    ),
	//06. GATE Collection.
	   array(
	        'label' => 'GATE Collection',
	        'name'  => 'GATE Collection',
	        'description' =>'For units of description below Collection/Fonds level, record the name of the collection that the item is part of (NB this will also be indicated by its reference code)',
	        'data_type'   => 'Tiny Text',
	    ),
	//07. GATE Sub-collection.
	   array(
	        'label' => 'GATE Sub-collection',
	        'name'  => 'GATE Sub-collection',
	        'description' =>'For units of description below sub-collection level, record the name of the sub-collection that the item is part of (NB this will also be indicated by its reference code)',
	        'data_type'   => 'Tiny Text',
	    ),
	//08. GATE Extent and medium of the unit of description.
	    array(
	   		'label' => 'GATE Extent and medium of the unit of description', 
	   		'name'  => 'GATE Extent and medium of the unit of description',
	   		'description' => 'Give the physical or logical extent of the unit of description, in terms of quantity, bulk or size. Record the extent of a unit of description by giving the number of physical or logical units in arabic numerals, and the unit of measurement. Where relevant, give the size of the unit of description as well as the number of logical units. Give the specific medium(s) of the unit of description. (e.g. "1 book". "2 mp3 files") and where relevant, the materials that the unit of description consists of. Alternatively (especially when describing a whole fonds/collection), give the linear shelf space or cubic storage space of the unit of description. If you give the linear shelf space, and additional information is desirable, add the additional information in brackets. Examples: 13 containers of graphic material and textual records (Series). 103.5 cubic feet (98 boxes)  (Fonds). 1 folder, containing 38 items (File). 1 colour photographic print (Item)',
	   		'data_type'   => 'Tiny Text',
	      ), 
	 //09. GATE Physical characteristics and technical requirements
        array(
			'label' => 'GATE Physical characteristics and technical requirements', 
			'name'  => 'GATE Physical characteristics and technical requirements',
			'description' => 'Indicate any important physical conditions, such as preservation requirements, that affect the use of the unit of description. Note any software and/or hardware required to access the unit of description.',
			'data_type'   => 'Tiny Text',
	     ),
	//10. GATE Conditions governing access.
	   array(
			'label' => 'GATE Conditions governing access', 
			'name'  => 'GATE Conditions governing access',
			'description' => 'Provide information on the legal status or other regulations that restrict or affect access to the unit of description. Specify the law or legal status, contract, regulation or policy that affects access to the unit of description. If material is closed (unavailable to the public), indicate if possible the extent of the period of closure and the date at which the material will open when appropriate. NB If you are cataloguing at Item level, this information has probably already been completed for the whole collection/fonds; please check. If it has, you do not have to add it at individual Item level. Examples: Unrestricted access, including display rights and consultation rights (Fonds). Patient records contain private data; records are closed for 50 years from date of creation. Researchers may apply to use these records in accordance with State Archives access statement. (Series). Material restricted by 5 USC 552 (b)(1) - National Security (Series). Material restricted by terms of donors deed of gift (Series). Use of audio, video, or film materials may require production of viewing copy. (Fonds).All materials of living persons other than Louis D. Rubin, Jr., are closed to research until January 2018 (25 years) or until date of death of such persons, whichever occurs first, except with the written permission of the persons involved. This restriction chiefly affects materials in Series 1.1., 6.2., and 7.1. LDR material is without restriction. (Fonds). Access to the entire fonds is restricted until 2025. Series 3 (Business ventures) is closed until 31 December 2020. (Fonds)',
		    'data_type'   => 'Tiny Text',
	     ),
    //11. GATE Conditions governing reproduction 
        array(
	        'label' => 'GATE Conditions governing reproduction',
	        'name'  => 'GATE Conditions governing reproduction',
	        'description'	=> 'For our Archives, this usually means naming the copyright holder, which will almost always be Leeds GATE Archives, or in the case of a book, the publisher of the book; and the type of Creative Commons license under which the unit of description is published on our website, which will almost always be CC BY/NC/ND. ',
	        'data_type'   => 'Tiny Text',
	    ),
	 //12. GATE Language of material
	    array(
	        'label' => 'GATE Language of material',
	        'name'  => 'GATE Language of material',
	        'description'	=> 'Identify the language(s), script(s) and symbol system(s) employed in the unit of description if you do not recognise them; do not guess. Record the language(s) and/or script(s) of the materials in the unit of description. Note any distinctive alphabets, scripts, or symbol systems employed. Examples: In Romani, with partial English translation (Item). Chinese (Series). English, Romani, Welsh (Collection) ',
	        'data_type'   => 'Tiny Text',
	    ),
	  //13. GATE Description.
	    array(
	        'label' => 'GATE Description',
	        'name'  => 'GATE Description',
	        'description'	=> 'The aim of this field is to enable users to judge whether the unit of description might be useful and relevant for them. At item level, give a summary of what the item is - try to include information that you think will be important to users. You could include the scope (such as time periods, geographical area it covers) and the content, (such as subject matter, materials that the unit of description is made of - creator), appropriate to the level of description - and information about what the unit of description is, what it means, and what its relevance is. Make your description unique (so for example, do not describe 5 different photos as “A photo of the wedding of Mr X and Miss Y” - be more specific about what each photo shows). Focus on the unit of description itself, not (for example) its creator, the place it came from, etc.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //14. GATE Date(s) of description
	    array(
	        'label' => 'GATE Date(s) of description',
	        'name'  => 'GATE Date(s) of description',
	        'description'	=> 'Give the date when you are writing this description. If you are revising or adding to an existing description, add “Revised on (date)”.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //15. GATE Geographical area
	    array(
	        'label'  => 'GATE Geographical area',
	        'name'  => 'GATE Geographical area',
	        'description' => 'Give the location (suburb, town, area, or country) that the unit of description relates to, at an appropriate level of detail. For example, a letter or photograph might relate to a specific area of Leeds- a collection/fonds might include material about West Yorkshire, Ireland, and Spain- a film might be set in a specific town.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //16. GATE Immediate source of acquisition or transfer
	    array(
	        'label' => 'GATE Immediate source of acquisition or transfer',
	        'name'  => 'GATE Immediate source of acquisition or transfer',
	        'description' => 'This field is only compulsory at collection/fonds level. Give donor, name of organisation it came from, or place it was sourced from. At lower levels, all items will usually come from the same source.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //17. GATE Current location
	    array(
	        'label' => 'GATE Current location',
	        'name'  => 'GATE Current location',
	        'description' => 'Say where the unit of description is stored now. This will usually be "Leeds GATE Archives", but for items that are being held by community members, it might be another address. If the person is happy for their address to be catalogued, add it here- but most people will probably prefer to keep this private. In this case, please write: "At the address of private owner- details held by Leeds GATE. Details may be available to researchers on request - please contact us, giving the reference code and title of the item."',
	        'data_type'   => 'Tiny Text',
	    ),
	    //18. GATE Related units of description
	    array(
	        'label' => 'GATE Related units of description',
	        'name'  => 'GATE Related units of description',
	        'description' => 'Give the reference code of any item within Leeds GATEs collections which is related to the unit of description. If the relationship is not clear, explain it. Also give the title and reference code of any item you have found in any other repository which relates to it, and the name of the repository. ',
	        'data_type'   => 'Text',
	    ),
	    //19. GATE Archival history
	    array(
	        'label' => 'GATE Archival history',
	        'name'  => 'GATE Archival history',
	        'description'	=> 'This field is compulsory at collection/fonds level. Record the successive transfers of ownership, responsibility and/or custody of the unit of description, and indicate those actions, such as history of the arrangement, production of contemporary finding aids, re-use of the records for other purposes or software migrations, that have contributed to its present structure and arrangement. Give the dates of these actions, insofar as they can be ascertained. If the archival history is unknown, record that information. At lower levels, do not repeat the information above- only record any information specific to the individual item. Special emphasis should be placed on where a unit of description has been used, since it has been part of Leeds GATE Archives, to produce artworks or to inform research. ',
	        'data_type'   => 'Tiny Text',
	    ),
	    //20. GATE Archivists note
	    array(
	        'label'       => 'GATE Archivists note',
	        'name'        => 'GATE Archivists note',
	        'description' => 'Record the name of the person who wrote the description, if they are willing. If relevant, record the sources consulted in preparing the description.',
	        'data_type'   => 'Text',
	    ),
	    //21. GATE Families
	    array(
	        'label' => 'GATE Families',
	        'name'  => 'GATE Families',
	        'description' => 'The purpose of this field is to help Gypsy and Traveller people who are looking for information about their relatives in the Archives - and to include this information permanently in the Catalogue, rather than only as a tag on the website. Give the family names of any Gypsy or Traveller people associated with the unit of description. If you cannot be sure whether a person is a Traveller, include their family name in case.',
	        'data_type'   => 'Text',
	    ),
	    //22. GATE Gypsy & Traveller voices
	    array(
	        'label'       => 'GATE Gypsy & Traveller voices',
	        'name'        => 'GATE Gypsy & Traveller voices',
	        'description' => 'The purpose of this field is to ensure that the comments of Gypsies and Travellers about a unit of description are included in the catalogue. If a Gypsy or Traveller person is cataloguing the unit of description, s/he can simply copy and paste what s/he has written in the [description] field into this field. Alternatively, if s/he has time, s/he can use this field to add comment, narrative, or personal memory about the unit of description. His/her name will be included under “archivists’ note”. If Gypsy/Traveller people give comments about the item after it has been catalogued, those comments should be places in this field, together with a date, and if possible, the persons name. If the person cataloguing is not a Gypsy or Traveller, s/he should leave this field blank. This will enable us to see which units of description still need comment and opinion from G/T people.',
	        'data_type'   => 'Text',
	    ),
	    //23. GATE Contentions
	    array(
	        'label'       => 'GATE Contentions',
	        'name'        => 'GATE Contentions',
	        'description' => 'The purpose of this field is to highlight situations where there is a clear disagreement about what an item is or what it means. This field can be completed at the time of cataloguing, or later. If you notice a clear disagreement in, for example, the comments in “Gypsy and Traveller Voices”, or a discrepancy between the catalogued “Name of Creator” and something that has been said in another field, highlight it here.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //24. GATE System of arrangement
	    array(
	        'label'       => 'GATE System of arrangement',
	        'name'        => 'GATE System of arrangement',
	        'description' => 'This is only likely to be used at Collection level. Specify the internal structure, order and/or the system of classification of the unit of description. Note how these have been treated by the archivist. For electronic records, record or reference information on system design. ',
	        'data_type'   => 'Tiny Text',
	    ),
	    //25. GATE Biographical history
	    array(
	        'label'       => 'GATE Biographical history',
	        'name'        => 'GATE Biographical history',
	        'description' => 'At the HIGHEST level of description possible, add a name, relating to the unit of description, that is contained in our Biographical Index. So at collection/fonds level, this would include the collector - but this does not need to be repeated at lower levels. At item level, this might include the creator, or a person mentioned or depicted in the item. If there is a relevant person who does not yet appear in our biographical index, consider adding them to the biographical index, and then adding their name to this field.',
	        'data_type'   => 'Tiny Text',
	    ),
	    //26. GATE Existence and location of originals
	    array(
	        'label'       => 'GATE Existence and location of originals',
	        'name'        => 'GATE Existence and location of originals',
	        'description' => 'If the unit of description is not an original, record where the original is kept.',
	        'data_type'   => 'Text',
	    ),
	    //27. GATE Existence and location of copies
	    array(
	        'label'       => 'GATE Existence and location of copies',
	        'name'        => 'GATE Existence and location of copies',
	        'description' => 'If copies are made, record their location, who made them, and where they are kept.',
	        'data_type'   => 'Text',
	    ),
	);

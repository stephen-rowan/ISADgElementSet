<?php echo '<?xml version="1.0" encoding="UTF-8"?>
<pbcoreCollection xsi:schemaLocation="http://www.PBCore.org/PBCore/PBCoreNamespace.html http://pbcore.org/xsd/pbcore-2.0.xsd" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.pbcore.org/PBCore/PBCoreNamespace.html">
'; ?>
<?php foreach(loop('items') as $item): ?>
<?php $item = get_current_record('item'); ?>
	<pbcoreDescriptionDocument>
<?php foreach (metadata($item, array('PBCore', 'Date Broadcast'), array('all'=>true)) as $datebroadcast) { ?>
		<pbcoreAssetDate dateType="Broadcast"><?php echo html_escape($datebroadcast); ?></pbcoreAssetDate>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Date Created'), array('all'=>true)) as $datecreated) { ?>
		<pbcoreAssetDate dateType="Created"><?php echo html_escape($datecreated); ?></pbcoreAssetDate>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Identifier'), array('all'=>true)) as $identifier) { ?>
		<pbcoreIdentifier source="Omeka"><?php echo html_escape($identifier); ?></pbcoreIdentifier>
<?php } ?>
<?php if (empty($identifier)) { ?>
		<pbcoreIdentifier source="None">No Identifier Available</pbcoreIdentifier>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Title'), array('all'=>true)) as $title) { ?>
		<pbcoreTitle><?php echo html_escape($title); ?></pbcoreTitle>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Episode Title'), array('all'=>true)) as $episodetitle) { ?>
		<pbcoreTitle titleType="Episode"><?php echo html_escape($episodetitle); ?></pbcoreTitle>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Series Title'), array('all'=>true)) as $seriestitle) { ?>
		<pbcoreTitle titleType="Series"><?php echo html_escape($seriestitle); ?></pbcoreTitle>
<?php } ?>
<?php if (empty($title) && empty($episodetitle) && empty($seriestitle)) { ?>
		<pbcoreTitle>No Title Available</pbcoreTitle>
<?php } ?>
<?php foreach ($item->Tags as $tag) { ?>
		<pbcoreSubject source="Free tags"><?php echo html_escape($tag); ?></pbcoreSubject>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Description'), array('all'=>true)) as $description) { ?>
		<pbcoreDescription><?php echo html_escape($description); ?></pbcoreDescription>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Transcription'), array('all'=>true)) as $transcription) { ?>
		<pbcoreDescription descriptionType="Transcript"><?php echo html_escape($transcription); ?></pbcoreDescription>
<?php } ?>
<?php if (empty($description) && empty($transcription)) { ?>
		<pbcoreDescription>No Description Available</pbcoreDescription>
<?php } ?>
		<pbcoreRelation>
			<pbcoreRelationType>Is Part Of</pbcoreRelationType>
			<pbcoreRelationIdentifier source="<?php echo "Omeka:" ; echo  html_escape(get_option('site_title')); ?>"><?php echo metadata('item', 'collection name'); ?></pbcoreRelationIdentifier>
		</pbcoreRelation>
		<?php /*		<pbcoreCoverage>
			<coverage><?php if (function_exists('geolocation_get_location_for_item') && geolocation_get_location_for_item($item, true)) { $location = geolocation_get_location_for_item($item, true); echo html_escape($location->address); } ?></coverage>
			<coverageType>Spatial</coverageType>
		</pbcoreCoverage> */ ?>
<?php foreach (metadata($item, array('PBCore', 'Creator'), array('all'=>true)) as $creator) { ?>
		<pbcoreCreator>
			<creator><?php echo html_escape($creator); ?></creator>
			<creatorRole>Creator</creatorRole>
		</pbcoreCreator>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Interviewee'), array('all'=>true)) as $interviewee) { ?>
		<pbcoreContributor>
			<contributor><?php echo html_escape($interviewee); ?></contributor>
			<contributorRole><?php echo "Interviewee"; ?></contributorRole>
		</pbcoreContributor>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Interviewer'), array('all'=>true)) as $interviewer) { ?>
		<pbcoreContributor>
			<contributor><?php echo html_escape($interviewer); ?></contributor>
			<contributorRole><?php echo "Interviewer"; ?></contributorRole>
		</pbcoreContributor>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Host'), array('all'=>true)) as $host) { ?>
		<pbcoreContributor>
			<contributor><?php echo html_escape($host); ?></contributor>
			<contributorRole><?php echo "Host"; ?></contributorRole>
		</pbcoreContributor>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Rights'), array('all'=>true)) as $rights) { ?>
		<pbcoreRightsSummary>
			<rightsSummary><?php echo html_escape($rights); ?></rightsSummary>
		</pbcoreRightsSummary>
<?php } ?>
		<pbcoreInstantiation>
<?php foreach (metadata($item, array('PBCore', 'Identifier'), array('all'=>true)) as $identifier) { ?>
			<instantiationIdentifier source="Omeka"><?php echo html_escape($identifier); ?></instantiationIdentifier>
<?php } ?>
			<instantiationIdentifier source="<?php echo "Omeka:" ; echo  html_escape(get_option('site_title')); echo ".item_id"?>"><?php echo $item->id; ?></instantiationIdentifier>
<?php if (count(metadata($item, array('PBCore', 'Digital Format'), array('all' => true)))) { ?>
			<instantiationDigital><?php echo metadata($item, array('PBCore', 'Digital Format')); ?></instantiationDigital>
<?php } ?>
<?php if (count(metadata($item, array('PBCore', 'Digital Location'), array('all' => true)))) { ?>
			<instantiationLocation><?php echo metadata($item, array('PBCore', 'Digital Location')); ?></instantiationLocation>
<?php } ?>
<?php if (count(metadata($item, array('PBCore', 'Digital Location'), array('all' => true))) == 0 ) { ?>
			<instantiationLocation>No Location Available</instantiationLocation>
<?php } ?>
<?php if (count(metadata($item, array('PBCore', 'Duration'), array('all' => true)))) { ?>
			<instantiationDuration><?php echo metadata($item, array('PBCore', 'Duration')); ?></instantiationDuration>
<?php } ?>
<?php set_loop_records('files', $item->Files);
foreach (loop('files') as $file) { ?>
			<instantiationPart>
				<instantiationIdentifier source="<?php echo "URL"?>"><?php echo html_escape($file->getWebPath('original')); ?></instantiationIdentifier>
				<instantiationIdentifier source="<?php echo "Omeka:" ; echo  html_escape(get_option('site_title')); echo ".original_filename"?>"><?php echo html_escape($file->original_filename); ?></instantiationIdentifier>
				<instantiationIdentifier source="<?php echo "Omeka:" ; echo  html_escape(get_option('site_title')); echo ".filename"?>"><?php echo $file->filename; ?></instantiationIdentifier>
				<instantiationDate dateType="Date Modified"><?php echo $file->modified; ?></instantiationDate>
<?php if (count(metadata($item, array('PBCore', 'Digital Location'), array('all' => true)))) { ?>
				<instantiationLocation><?php echo metadata($item, array('PBCore', 'Digital Location')); ?></instantiationLocation>
<?php } ?>
<?php if (count(metadata($item, array('PBCore', 'Digital Location'), array('all' => true))) == 0 ) { ?>
			<instantiationLocation>No Location Available</instantiationLocation>
<?php } ?>
				<instantiationFileSize unitsOfMeasure="bytes"><?php echo $file->size; ?></instantiationFileSize>
				<instantiationAnnotation annotationType="md5"><?php echo $file->authentication; ?></instantiationAnnotation>
			</instantiationPart>
<?php } ?>
		</pbcoreInstantiation>
<?php foreach (metadata($item, array('PBCore', 'Physical Location'), array('all'=>true)) as $physical_location) { ?>
		<pbcoreInstantiation>
<?php foreach (metadata($item, array('PBCore', 'Identifier'), array('all'=>true)) as $identifier) { ?>
			<instantiationIdentifier source="Omeka"><?php echo html_escape($identifier); ?></instantiationIdentifier>
<?php } ?>
			<instantiationPhysical><?php echo metadata($item, array('PBCore', 'Physical Format')); ?></instantiationPhysical>
			<instantiationLocation><?php echo metadata($item, array('PBCore', 'Physical Location')); ?></instantiationLocation>
		</pbcoreInstantiation>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Notes'), array('all'=>true)) as $notes) { ?>
		<pbcoreAnnotation annotationType="Notes"><?php echo html_escape($notes); ?></pbcoreAnnotation>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Music/Sound Used'), array('all'=>true)) as $music_sound_used) { ?>
		<pbcoreAnnotation annotationType="MusicUsed"><?php echo html_escape($music_sound_used); ?></pbcoreAnnotation>
<?php } ?>
<?php foreach (metadata($item, array('PBCore', 'Date Peg'), array('all'=>true)) as $date_peg) { ?>
		<pbcoreAnnotation annotationType="DatePeg"><?php echo html_escape($date_peg); ?></pbcoreAnnotation>
<?php } ?>
	</pbcoreDescriptionDocument>
<?php endforeach; ?>
</pbcoreCollection>

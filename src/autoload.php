<?php


 function autoload_bff564d65e4cbfa8f5ad2fc410c453f3($class)
{
    $classes = array(
		'NemEDI\NemEDIWebService'   => __DIR__.'/NemEDIWebService.php',
		'NemEDI\Version'            => __DIR__ .'/Version.php',
		'NemEDI\VersionResponse'    => __DIR__ .'/VersionResponse.php',
		'NemEDI\QueryUser'          => __DIR__ .'/QueryUser.php',
		'NemEDI\QueryUserResponse'  => __DIR__ .'/QueryUserResponse.php',
		'NemEDI\QueryLabel'         => __DIR__ .'/QueryLabel.php',
		'NemEDI\QueryLabelResponse' => __DIR__ .'/QueryLabelResponse.php',
		'NemEDI\DownloadLabel'      => __DIR__ .'/DownloadLabel.php',
		'NemEDI\Label'              => __DIR__ .'/Label.php',
		'NemEDI\ArrayOfPropertyValue' => __DIR__ .'/ArrayOfPropertyValue.php',
		'NemEDI\PropertyValue' => __DIR__ .'/PropertyValue.php',
		'NemEDI\DownloadLabelResponse' => __DIR__ .'/DownloadLabelResponse.php',
		'NemEDI\ReleaseDocument' => __DIR__ .'/ReleaseDocument.php',
		'NemEDI\ReleaseDocumentResponse' => __DIR__ .'/ReleaseDocumentResponse.php',
		'NemEDI\QueryTransmissionStatus' => __DIR__ .'/QueryTransmissionStatus.php',
		'NemEDI\Transmission' => __DIR__ .'/Transmission.php',
		'NemEDI\QueryTransmissionStatusResponse' => __DIR__ .'/QueryTransmissionStatusResponse.php',
		'NemEDI\UploadFile' => __DIR__ .'/UploadFile.php',
		'NemEDI\UploadFileResponse' => __DIR__ .'/UploadFileResponse.php',
		'NemEDI\DownloadFiles' => __DIR__ .'/DownloadFiles.php',
		'NemEDI\ArrayOfEDIFile' => __DIR__ .'/ArrayOfEDIFile.php',
		'NemEDI\EDIFile' => __DIR__ .'/EDIFile.php',
		'NemEDI\DownloadFilesResponse' => __DIR__ .'/DownloadFilesResponse.php',
		'NemEDI\ListNewFiles' => __DIR__ .'/ListNewFiles.php',
		'NemEDI\ArrayOfGuid' => __DIR__ .'/ArrayOfGuid.php',
		'NemEDI\ListNewFilesResponse' => __DIR__ .'/ListNewFilesResponse.php',
		'NemEDI\ListAllFiles' => __DIR__ .'/ListAllFiles.php',
		'NemEDI\ListAllFilesResponse' => __DIR__ .'/ListAllFilesResponse.php',
		'NemEDI\DownloadFile' => __DIR__ .'/DownloadFile.php',
		'NemEDI\DownloadFileResponse' => __DIR__ .'/DownloadFileResponse.php',
		'NemEDI\SearchDocument' => __DIR__ .'/SearchDocument.php',
		'NemEDI\SearchDocumentResponse' => __DIR__ .'/SearchDocumentResponse.php',
		'NemEDI\StreamFile' => __DIR__ .'/StreamFile.php',
		'NemEDI\StreamFileResponse' => __DIR__ .'/StreamFileResponse.php',
		'NemEDI\UploadString' => __DIR__ .'/UploadString.php',
		'NemEDI\UploadStringResponse' => __DIR__ .'/UploadStringResponse.php',
		'NemEDI\AddDocument' => __DIR__ .'/AddDocument.php',
		'NemEDI\EDIDocument' => __DIR__ .'/EDIDocument.php',
		'NemEDI\DocumentTypes' => __DIR__ .'/DocumentTypes.php',
		'NemEDI\ArrayOfEDIDocumentLine' => __DIR__ .'/ArrayOfEDIDocumentLine.php',
		'NemEDI\EDIDocumentLine' => __DIR__ .'/EDIDocumentLine.php',
		'NemEDI\AddDocumentResponse' => __DIR__ .'/AddDocumentResponse.php',
		'NemEDI\ExecuteProcess' => __DIR__ .'/ExecuteProcess.php',
		'NemEDI\ExecuteProcessResponse' => __DIR__ .'/ExecuteProcessResponse.php',
		'NemEDI\StringArray' => __DIR__ .'/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_bff564d65e4cbfa8f5ad2fc410c453f3');

// Do nothing. The rest is just leftovers from the code generation.
{
}

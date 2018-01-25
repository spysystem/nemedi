<?php

namespace NemEDI;

class NemEDIWebService extends \SoapClient
{
	const WsdlUrl = 'http://web.nemedi.dk/webediservice/superEDIXWebService.asmx?WSDL';
	const EmptyGuid = '00000000-0000-0000-0000-000000000000';

	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = array (
	'Version' => 'NemEDI\\Version',
	'VersionResponse' => 'NemEDI\\VersionResponse',
	'QueryUser' => 'NemEDI\\QueryUser',
	'QueryUserResponse' => 'NemEDI\\QueryUserResponse',
	'QueryLabel' => 'NemEDI\\QueryLabel',
	'QueryLabelResponse' => 'NemEDI\\QueryLabelResponse',
	'DownloadLabel' => 'NemEDI\\DownloadLabel',
	'Label' => 'NemEDI\\Label',
	'ArrayOfPropertyValue' => 'NemEDI\\ArrayOfPropertyValue',
	'PropertyValue' => 'NemEDI\\PropertyValue',
	'DownloadLabelResponse' => 'NemEDI\\DownloadLabelResponse',
	'ReleaseDocument' => 'NemEDI\\ReleaseDocument',
	'ReleaseDocumentResponse' => 'NemEDI\\ReleaseDocumentResponse',
	'QueryTransmissionStatus' => 'NemEDI\\QueryTransmissionStatus',
	'Transmission' => 'NemEDI\\Transmission',
	'QueryTransmissionStatusResponse' => 'NemEDI\\QueryTransmissionStatusResponse',
	'UploadFile' => 'NemEDI\\UploadFile',
	'UploadFileResponse' => 'NemEDI\\UploadFileResponse',
	'DownloadFiles' => 'NemEDI\\DownloadFiles',
	'ArrayOfEDIFile' => 'NemEDI\\ArrayOfEDIFile',
	'EDIFile' => 'NemEDI\\EDIFile',
	'DownloadFilesResponse' => 'NemEDI\\DownloadFilesResponse',
	'ListNewFiles' => 'NemEDI\\ListNewFiles',
	'ArrayOfGuid' => 'NemEDI\\ArrayOfGuid',
	'ListNewFilesResponse' => 'NemEDI\\ListNewFilesResponse',
	'ListAllFiles' => 'NemEDI\\ListAllFiles',
	'ListAllFilesResponse' => 'NemEDI\\ListAllFilesResponse',
	'DownloadFile' => 'NemEDI\\DownloadFile',
	'DownloadFileResponse' => 'NemEDI\\DownloadFileResponse',
	'SearchDocument' => 'NemEDI\\SearchDocument',
	'SearchDocumentResponse' => 'NemEDI\\SearchDocumentResponse',
	'StreamFile' => 'NemEDI\\StreamFile',
	'StreamFileResponse' => 'NemEDI\\StreamFileResponse',
	'UploadString' => 'NemEDI\\UploadString',
	'UploadStringResponse' => 'NemEDI\\UploadStringResponse',
	'AddDocument' => 'NemEDI\\AddDocument',
	'EDIDocument' => 'NemEDI\\EDIDocument',
	'ArrayOfEDIDocumentLine' => 'NemEDI\\ArrayOfEDIDocumentLine',
	'EDIDocumentLine' => 'NemEDI\\EDIDocumentLine',
	'AddDocumentResponse' => 'NemEDI\\AddDocumentResponse',
	'ExecuteProcess' => 'NemEDI\\ExecuteProcess',
	'ExecuteProcessResponse' => 'NemEDI\\ExecuteProcessResponse',
	'StringArray' => 'NemEDI\\StringArray',
);

	/**
	 * @param string $strWsdl
	 * @return NemEDIWebService
	 * @throws \Exception
	 */
	public static function Create(string $strWsdl = self::WsdlUrl)
	{
		return new static(	array (
			'features'     => 1,
			'trace'        => true,
			'exceptions'   => true,
			'soap_version' => SOAP_1_2,
			'encoding'     => 'UTF-8'
		), $strWsdl);
	}

	/**
	 * @param array $arrOptions A array of config values
	 * @param string $strWsdl The wsdl file to use
	 * @throws \Exception
	 */
	public function __construct(array $arrOptions = array(), string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new \Exception('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}

		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param Version $parameters
	 * @return VersionResponse
	 */
	public function Version(Version $parameters)
	{
		return $this->__soapCall('Version', array($parameters));
	}

	/**
	 * @param QueryUser $parameters
	 * @return QueryUserResponse
	 */
	public function QueryUser(QueryUser $parameters)
	{
		return $this->__soapCall('QueryUser', array($parameters));
	}

	/**
	 * @param QueryLabel $parameters
	 * @return QueryLabelResponse
	 */
	public function QueryLabel(QueryLabel $parameters)
	{
		return $this->__soapCall('QueryLabel', array($parameters));
	}

	/**
	 * @param DownloadLabel $parameters
	 * @return DownloadLabelResponse
	 */
	public function DownloadLabel(DownloadLabel $parameters)
	{
		return $this->__soapCall('DownloadLabel', array($parameters));
	}

	/**
	 * @param ReleaseDocument $parameters
	 * @return ReleaseDocumentResponse
	 */
	public function ReleaseDocument(ReleaseDocument $parameters)
	{
		return $this->__soapCall('ReleaseDocument', array($parameters));
	}

	/**
	 * @param QueryTransmissionStatus $parameters
	 * @return QueryTransmissionStatusResponse
	 */
	public function QueryTransmissionStatus(QueryTransmissionStatus $parameters)
	{
		return $this->__soapCall('QueryTransmissionStatus', array($parameters));
	}

	/**
	 * @param UploadFile $parameters
	 * @return UploadFileResponse
	 */
	public function UploadFile(UploadFile $parameters)
	{
		return $this->__soapCall('UploadFile', array($parameters));
	}

	/**
	 * @param DownloadFiles $parameters
	 * @return DownloadFilesResponse
	 */
	public function DownloadFiles(DownloadFiles $parameters)
	{
		return $this->__soapCall('DownloadFiles', array($parameters));
	}

	/**
	 * @param ListNewFiles $parameters
	 * @return ListNewFilesResponse
	 */
	public function ListNewFiles(ListNewFiles $parameters)
	{
		return $this->__soapCall('ListNewFiles', array($parameters));
	}

	/**
	 * @param ListAllFiles $parameters
	 * @return ListAllFilesResponse
	 */
	public function ListAllFiles(ListAllFiles $parameters)
	{
		return $this->__soapCall('ListAllFiles', array($parameters));
	}

	/**
	 * @param DownloadFile $parameters
	 * @return DownloadFileResponse
	 */
	public function DownloadFile(DownloadFile $parameters)
	{
		return $this->__soapCall('DownloadFile', array($parameters));
	}

	/**
	 * @param SearchDocument $parameters
	 * @return SearchDocumentResponse
	 */
	public function SearchDocument(SearchDocument $parameters)
	{
		return $this->__soapCall('SearchDocument', array($parameters));
	}

	/**
	 * @param StreamFile $parameters
	 * @return StreamFileResponse
	 */
	public function StreamFile(StreamFile $parameters)
	{
		return $this->__soapCall('StreamFile', array($parameters));
	}

	/**
	 * @param UploadString $parameters
	 * @return UploadStringResponse
	 */
	public function UploadString(UploadString $parameters)
	{
		return $this->__soapCall('UploadString', array($parameters));
	}

	/**
	 * @param AddDocument $parameters
	 * @return AddDocumentResponse
	 */
	public function AddDocument(AddDocument $parameters)
	{
		return $this->__soapCall('AddDocument', array($parameters));
	}

	/**
	 * @param ExecuteProcess $parameters
	 * @return ExecuteProcessResponse
	 */
	public function ExecuteProcess(ExecuteProcess $parameters)
	{
		return $this->__soapCall('ExecuteProcess', array($parameters));
	}

}

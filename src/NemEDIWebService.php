<?php

namespace NemEDI;

class NemEDIWebService extends \SoapClient
{
	const	WSDLUrl = 'http://web.nemedi.dk/webediservice/superEDIXWebService.asmx?WSDL';

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
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
      'UploadFile' => 'NemEDI\\UploadFile',
      'UploadFileResponse' => 'NemEDI\\UploadFileResponse',
      'DownloadFiles' => 'NemEDI\\DownloadFiles',
      'ArrayOfEDIFile' => 'NemEDI\\ArrayOfEDIFile',
      'EDIFile' => 'NemEDI\\EDIFile',
      'DownloadFilesResponse' => 'NemEDI\\DownloadFilesResponse',
      'StreamFile' => 'NemEDI\\StreamFile',
      'StreamFileResponse' => 'NemEDI\\StreamFileResponse',
      'UploadString' => 'NemEDI\\UploadString',
      'UploadStringResponse' => 'NemEDI\\UploadStringResponse',
      'AddDocument' => 'NemEDI\\AddDocument',
      'EDIDocument' => 'NemEDI\\EDIDocument',
      'ArrayOfEDIDocumentLine' => 'NemEDI\\ArrayOfEDIDocumentLine',
      'EDIDocumentLine' => 'NemEDI\\EDIDocumentLine',
      'AddDocumentResponse' => 'NemEDI\\AddDocumentResponse',
      'StringArray' => 'NemEDI\\StringArray',
    );

	public static function Create()
	{
		return new self([
			'trace'        => true,
			'exceptions'   => true,
			'soap_version' => SOAP_1_2,
			'encoding'     => 'UTF-8'
		]);
	}

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = self::WSDLUrl)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
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

}

<?php
namespace codename\parquet\format;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class AesGcmCtrV1
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'aad_prefix',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'aad_file_unique',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'supply_aad_prefix',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * AAD prefix *
     * 
     * @var string
     */
    public $aad_prefix = null;
    /**
     * Unique file identifier part of AAD suffix *
     * 
     * @var string
     */
    public $aad_file_unique = null;
    /**
     * In files encrypted with AAD prefix without storing it,
     * readers must supply the prefix *
     * 
     * @var bool
     */
    public $supply_aad_prefix = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['aad_prefix'])) {
                $this->aad_prefix = $vals['aad_prefix'];
            }
            if (isset($vals['aad_file_unique'])) {
                $this->aad_file_unique = $vals['aad_file_unique'];
            }
            if (isset($vals['supply_aad_prefix'])) {
                $this->supply_aad_prefix = $vals['supply_aad_prefix'];
            }
        }
    }

    public function getName()
    {
        return 'AesGcmCtrV1';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->aad_prefix);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->aad_file_unique);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->supply_aad_prefix);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('AesGcmCtrV1');
        if ($this->aad_prefix !== null) {
            $xfer += $output->writeFieldBegin('aad_prefix', TType::STRING, 1);
            $xfer += $output->writeString($this->aad_prefix);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->aad_file_unique !== null) {
            $xfer += $output->writeFieldBegin('aad_file_unique', TType::STRING, 2);
            $xfer += $output->writeString($this->aad_file_unique);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->supply_aad_prefix !== null) {
            $xfer += $output->writeFieldBegin('supply_aad_prefix', TType::BOOL, 3);
            $xfer += $output->writeBool($this->supply_aad_prefix);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}

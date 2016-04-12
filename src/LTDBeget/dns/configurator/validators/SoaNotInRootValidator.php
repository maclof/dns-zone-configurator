<?php
/**
 * @author: Viskov Sergey
 * @date  : 4/11/16
 * @time  : 7:25 PM
 */

namespace LTDBeget\dns\configurator\validators;

use LTDBeget\dns\configurator\zoneEntities\record\SoaRecord;

/**
 * Class SoaNotInRootValidator
 *
 * @package beget\lib\dns\lib\validators
 */
class SoaNotInRootValidator
{
    /**
     * @param SoaRecord $record
     * @return bool
     */
    public static function validate(SoaRecord $record)
    {
        return $record->getNode()->getName() === "@";
    }
}
<?php
class UNL_UndergraduateBulletin_MajorList extends ArrayIterator
{
    function __construct()
    {
        $majors = glob(UNL_UndergraduateBulletin_Controller::getDataDir().'/majors/*.epub');
        return parent::__construct($majors);
    }
    
    function current()
    {
        return new UNL_UndergraduateBulletin_Major(array('name'=>UNL_UndergraduateBulletin_Major_Description::getNameByFile(parent::current())));
    }
}
?>
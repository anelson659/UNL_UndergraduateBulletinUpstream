<?php
UNL_Templates::$options['version']        = 3;
UNL_Templates::$options['sharedcodepath'] = dirname(__FILE__).'/sharedcode';

$url = UNL_UndergraduateBulletin_Controller::getURL();
$page = UNL_Templates::factory('Fixed');
$page->doctitle     = '<title>UNL | Undergraduate Bulletin</title>';
$page->titlegraphic = '<h1>Undergraduate Bulletin 2010-2011</h1>';
$page->breadcrumbs  = '
<ul>
    <li><a href="http://www.unl.edu/">UNL</a></li>
    <li>Undergraduate Bulletin</li>
</ul>
';

$page->navlinks     = '
<ul>
    <li><a href="'.$url.'major/">Majors</a>
        <ul>
            <li><a href="'.$url.'major/search">Search for a Major</a></li>
        </ul>
    </li>
    <li><a href="'.$url.'courses/">Courses</a>
        <ul>
            <li><a href="'.$url.'courses/search">Search for a Course</a></li>
            <li><a href="'.$url.'courses/">Course Abbreviations</a></li>
        </ul>
    </li>
    <li><a href="'.$url.'general">Academic Policies</a>
        <ul>
            <li><a href="'.$url.'general#admission-categories">Admission Categories</a></li>
            <li><a href="'.$url.'general#undergraduate-transfer-credit-policy">Transfer Credit Policy</a></li>
            <li><a href="'.$url.'general#graduation-requirements">Graduation Requirements</a></li>
            <li><a href="'.$url.'general#academic-policies-and-procedures">Academic Policies and Procedures</a></li>
        </ul>
    </li>
    <li><a href="'.$url.'college/">Academic Colleges</a>
        <ul>
            <li><a href="'.$url.'college/Agricultural+Sciences+%26+Natural+Resources">Agricultural Sciences &amp; Natural Resources</a></li>
            <li><a href="'.$url.'college/Architecture">Architecture</a></li>
            <li><a href="'.$url.'college/Arts+%26+Sciences">Arts &amp; Sciences</a></li>
            <li><a href="'.$url.'college/Business+Administration">Business Administration</a></li>
            <li><a href="'.$url.'college/Education+%26+Human+Sciences">Education &amp; Human Sciences</a></li>
            <li><a href="'.$url.'college/Engineering">Engineering</a></li>
            <li><a href="'.$url.'college/Fine+%26+Performing+Arts">Hixson-Lied College of Fine &amp; Performing Arts</a></li>
            <li><a href="'.$url.'college/Journalism+%26+Mass+Communications">Journalism &amp; Mass Communications</a></li>
            
        </ul>
    </li>
    <li><a href="#">Honors Programs</a>
        <ul>
            <li><a href="#">NU Honors Program</a></li>
            <li><a href="#">Jeffrey S. Raikes School of Computer Science and Management</a></li>
        </ul>
    </li>
    <li><a href="'.$url.'college/">Other Academic Units</a>
        <ul>
            <li><a href="'.$url.'college/Office+of+Undergraduate+Studies">Office of Undergraduate Studies</a></li>
            <li><a href="'.$url.'college/Division+of+General+Studies">Division of General Studies</a></li>
            <li><a href="'.$url.'college/Libraries">Libraries</a></li>
            <li><a href="'.$url.'college/Public+Affairs+%26+Community+Service">Public Affairs &amp; Community Service</a></li>
            <li><a href="'.$url.'college/Reserve+Officers%27+Training+Corps+%28ROTC%29">Reserve Officers\' Training Corps (ROTC)</a></li>
        </ul>
    </li>
    
</ul>';
$page->loadSharedCodeFiles();
$page->addStylesheet('/wdn/templates_3.0/css/content/notice.css');
$page->addStylesheet('/wdn/templates_3.0/css/content/zenform.css');
if (UNL_UndergraduateBulletin_OutputController::getCacheInterface() instanceof UNL_UnderGraduateBulletin_CacheInterface_Mock) {
    $page->addStylesheet($url. 'templates/html/css/debug.css');
} else {
    $page->addStylesheet($url. 'templates/html/css/all.css');
}

$page->head .= '
<script type="text/javascript">var UNL_UGB_URL = "'.$url.'";</script>
<script type="text/javascript" src="/wdn/templates_3.0/scripts/plugins/ui/jQuery.ui.js"></script>
<script type="text/javascript" src="'.$url.'templates/html/scripts/jQuery.toc.js"></script>
<script type="text/javascript" src="'.$url.'templates/html/scripts/bulletin.functions.js"></script>
<link rel="home" href="'.$url.'" />
<link rel="search" href="'.$url.'search/" />
';

$page->maincontentarea = '<div class="wdn_notice" id="officialMessage">
                            <div class="minimize">
                                <a href="#">Close message</a>
                            </div>
                            <div class="message">
                                <h4 style="color:#a5690c;">PLEASE NOTE:</h4>
                                <p>Students who enter a college within the University in the 2010 academic year are expected to complete the graduation requirements set forth by that college in this bulletin. <a href="'.$url.'bulletinrules">More information on this policy.</a></p>
                            </div>
                        </div>';
$page->maincontentarea .= $savvy->render($context->output);

echo $page;

<?php
/**
 * @package Module A Simple Hit Counter for Joomla! 2.5
 * @version $Id: mod_asimplehitcounter.php 1 2012-09-07 14:00:00Z Peter Vavro $
 * @author Peter Vavro
 * @copyright (C) 2012- Peter Vavro
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

/**
 * ASipmleHitCounter module helper.
 *
 * @package     Module A Simple Hit Counter
 * @subpackage  mod_asimplehitcounter
 * @since       2.5
 */
class ModASipmleHitCounteHelper {

    /*
     * Read and Write to file
     * 
     * @param   string  file where the number is stored
     * @return  string  number of actual hits
     */
    public static function displayHits() {

        $actual_hits = 0;

        $file = dirname(__FILE__) . '/'.'hits.txt';

        // Check if file exists, if not create it
        if(!JFile::exists($file)) {
            JFile::write ($file,$actual_hits);
        }

        // Read file
        $file_data = JFile::read($file);
                
        if ($file_data) {
            $actual_hits = (int)$file_data;
        }

        $new_hits = $actual_hits + 1;
        JFile::write ($file, $new_hits);

        return $new_hits;
    }
}
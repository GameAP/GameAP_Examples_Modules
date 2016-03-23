<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Game AdminPanel (АдминПанель)
 *
 * 
 * @package		Game AdminPanel
 * @author		Nikita Kuznetsov (ET-NiK)
 * @copyright	Copyright (c) 2013-2016, Nikita Kuznetsov (http://hldm.org)
 * @license		http://www.gameap.ru/license.html
 * @link		http://www.gameap.ru
*/
class GH_Hooks_examples extends \Gameap_hooks {

    // -----------------------------------------------------------------
    
    /**
     * Будет выведен массив с ID сервера array('server_id' => ???)
     */
    public function pre_server_delete($params)
    {
        print_r($params);
    }

    // -----------------------------------------------------------------

    /**
     * Будет выведен массив с ID сервера array('server_id' => ???)
     */
    public function post_server_delete($params)
    {
        print_r($params);
    }

    // -----------------------------------------------------------------

    /**
     * Перед редактированием имя сервера будет изменено на "Changed name"
     */
    public function pre_server_edit($params)
    {
        $params['server_data']['name'] = "Changed name";
    }
}

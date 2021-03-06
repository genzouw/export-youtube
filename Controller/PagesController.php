<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * @see          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 0.2.9
 *
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller.
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @see http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    public $uses = [];

    private $youtubeDlCommandPath = 'youtube-dl';

    public function index()
    {
        $saveFormat = 'mp4';

        $this->set('title_for_layout', 'Top');

        if ($this->request->is('post') && isset($this->request->data['url'])) {
            $url = $this->request->data['url'];
            $shellToGetFileName = sprintf(
                "LANG=ja_JP.UTF-8 {$this->youtubeDlCommandPath} --get-filename --socket-timeout 15 --max-filesize 150m -f {$saveFormat} '%s'",
                $url
            );

            $fileName = exec($shellToGetFileName, $dummy, $returnValue);
            if ($returnValue !== 0 || is_null($fileName)) {
                return;
            }

            if (!file_exists(APP . "webroot/downloads/{$fileName}")) {
                $shell = sprintf(
                    'cd ' . APP . "webroot/downloads/; LANG=ja_JP.UTF-8 {$this->youtubeDlCommandPath} --socket-timeout 15 --max-filesize 150m -f {$saveFormat} '{$url}'; touch '{$fileName}';"
                );
                exec($shell, $output, $returnValue);

                if ($returnValue !== 0) {
                    return;
                }
            }

            $this->set('exportedFileName', $fileName);
        }
    }
}

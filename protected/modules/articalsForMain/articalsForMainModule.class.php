<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class articalsForMainModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        /* if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod(intval($this->arguments[0]));
        } */

        return $this->blockMethod();
    }

    public function listMethod()
    {
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.articalsForMain.list';

        # Получение списка
        #
        if (!($articalsForMain = $this->compiled($cache)))
        {
            $articalsForMain = Q("SELECT * FROM `#_mdd_articalsForMain` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($articalsForMain))
            {
                foreach ($articalsForMain as &$articalsForMain_item)
                {
                    $articalsForMain_item['date'] = Dates($articalsForMain_item['date'], $this->locale);
                }
            }

            $this->cache->setCache($cache, $articalsForMain);
        }

        # Мета теги
        #
        $meta = $this->metaData($articalsForMain);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'articalsForMain'         =>  $articalsForMain,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.articalsForMain.item.'.$system;

        if (!($articalsForMain = $this->compiled($cache)))
        {
            $articalsForMain = Q("SELECT * FROM `#_mdd_articalsForMain` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $articalsForMain['link'] = $this->linkCreate($articalsForMain['system']);
            $articalsForMain['date'] = Dates($articalsForMain['date'], $this->locale);

            $file = new Files;

            if (isset($articalsForMain['photo']))
            {
                $articalsForMain['photo'] = $file->getFilesByGroup($articalsForMain['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->cache->setCache($cache, $articalsForMain);
        }

        # Мета теги
        #
        $meta = $this->metaData($articalsForMain);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($articalsForMain, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'articalsForMain'     =>  $articalsForMain,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        $temp = 'Hallo World';
        return [
            'template' => 'block',
            'temp' => $temp
        ];
    }
}
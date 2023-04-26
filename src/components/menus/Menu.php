<?php
namespace df\components\menus;

use df\interfaces\menus\IMenu;

/**
 * Class Menu
 *
 * @package df\components\menus
 * @author aivanov@fix.ru
 */
class Menu extends MenuItem implements IMenu
{
    /**
     * @return array
     */
    public function getItems()
    {
        return $this->config[static::FIELD__ITEMS] ?? [];
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getItem($name)
    {
        return null;//todo
    }

    /**
     * @return mixed
     */
    public function getItemTemplate()
    {
        return $this->config[static::FIELD__TEMPLATE_ITEM] ?? '';
    }

    /**
     * @param $item
     *
     * @return $this
     */
    public function addItem($item)
    {
        $this->config[static::FIELD__ITEMS][] = $item;

        return $this;
    }

    /**
     * @param $items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->config[static::FIELD__ITEMS] = $items;

        return $this;
    }

    /**
     * @param $template
     *
     * @return $this
     */
    public function setItemTemplate($template)
    {
        $this->config[static::FIELD__TEMPLATE_ITEM] = $template;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT__MENU;
    }
}

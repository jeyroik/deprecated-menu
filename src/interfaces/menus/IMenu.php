<?php
namespace df\interfaces\menus;

/**
 * Interface IMenu
 *
 * @package df\interfaces
 * @author aivanov@fix.ru
 */
interface IMenu extends IMenuItem
{
    const SUBJECT__MENU = 'df.menu';

    const FIELD__ITEMS = 'items';
    const FIELD__TEMPLATE_ITEM = 'template_item';

    /**
     * @return array
     */
    public function getItems();

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getItem($name);

    /**
     * @param $items
     *
     * @return $this
     */
    public function setItems($items);

    /**
     * @param $item
     *
     * @return $this
     */
    public function addItem($item);

    /**
     * @return mixed
     */
    public function getItemTemplate();

    /**
     * @param $template
     *
     * @return $this
     */
    public function setItemTemplate($template);
}

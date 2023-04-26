<?php
namespace df\interfaces\extensions\menus;
use df\interfaces\menus\IMenu;

/**
 * Interface IMenuContextExtensionMenuControl
 *
 * @package df\interfaces\extensions\menus
 * @author aivanov@fix.ru
 */
interface IMenuContextExtension
{
    const CONTEXT_ITEM__MENU_SETTINGS = 'df.menu.settings';
    const CONTEXT_ITEM__MENU_VIEW = 'df.menu.view';

    /**
     * @param $menu IMenu
     *
     * @return mixed
     */
    public function setMenu($menu);

    /**
     * @return IMenu|null
     */
    public function getMenu();

    /**
     * @param $menuView
     *
     * @return mixed
     */
    public function setMenuView($menuView);

    /**
     * @return string
     */
    public function getMenuView();
}

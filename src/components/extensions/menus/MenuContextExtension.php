<?php
namespace df\components\extensions\menus;

use df\interfaces\extensions\menus\IMenuContextExtension;
use jeyroik\extas\components\systems\Extension;
use jeyroik\extas\interfaces\systems\IContext;

/**
 * Class MenuContextExtensionMenuControl
 *
 * @package df\components\extensions\menus
 * @author aivanov@fix.ru
 */
class MenuContextExtension extends Extension implements IMenuContextExtension
{
    public $subject = IContext::SUBJECT;

    /**
     * @param array $menu
     * @param IContext|null $context
     *
     * @return IContext|mixed
     */
    public function setMenu($menu, IContext &$context = null)
    {
        $context[static::CONTEXT_ITEM__MENU_SETTINGS] = $menu;

        return $context;
    }

    /**
     * @param IContext|null $context
     *
     * @return array|mixed
     */
    public function getMenu(IContext &$context = null)
    {
        return isset($context[static::CONTEXT_ITEM__MENU_SETTINGS])
            ? $context[static::CONTEXT_ITEM__MENU_SETTINGS]
            : [];
    }

    /**
     * @param $menuView
     * @param IContext|null $context
     *
     * @return IContext|mixed
     */
    public function setMenuView($menuView, IContext &$context = null)
    {
        $context[static::CONTEXT_ITEM__MENU_VIEW] = $menuView;

        return $context;
    }

    /**
     * @param IContext|null $context
     *
     * @return mixed|string
     */
    public function getMenuView(IContext &$context = null)
    {
        return isset($context[static::CONTEXT_ITEM__MENU_VIEW])
            ? $context[static::CONTEXT_ITEM__MENU_VIEW]
            : '';
    }
}

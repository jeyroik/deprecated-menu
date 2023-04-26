<?php
namespace df\components\dispatchers;

use df\components\access\AccessOperation;
use df\components\menus\Menu;
use df\interfaces\access\IAccess;
use df\interfaces\extensions\access\IAccessContextExtension;
use df\interfaces\extensions\menus\IMenuContextExtension;
use df\interfaces\extensions\views\IViewContextExtension;
use df\interfaces\menus\IMenu;
use jeyroik\extas\components\dispatchers\DispatcherAbstract;
use jeyroik\extas\interfaces\systems\contexts\IContextOnFailure;
use jeyroik\extas\interfaces\systems\IContext;
use jeyroik\tools\components\Preg;

/**
 * Class DispatcherMenuRender
 *
 * @package df\components\dispatchers
 * @author aivanov@fix.ru
 */
class DispatcherMenuRender extends DispatcherAbstract
{
    protected $requireInterfaces = [
        IContextOnFailure::class,
        IAccessContextExtension::class,
        IMenuContextExtension::class,
        IViewContextExtension::class
    ];

    /**
     * @param IContext|IContextOnFailure|IMenuContextExtension|IViewContextExtension $context
     *
     * @return IContext
     */
    protected function dispatch(IContext $context): IContext
    {
        $menu = $context->getMenu();
        $render = $context->getViewRender();

        $context->setMenuView($this->render($menu, $render, $context));
        $context->setSuccess();

        return $context;
    }

    /**
     * @param $menu IMenu
     * @param $render
     * @param $context IContext|IAccessContextExtension
     *
     * @return string
     */
    protected function render($menu, $render, $context)
    {
        $itemsView = '';
        $items = $menu->getItems();
        $preg = new Preg();
        foreach ($items as $item) {
            if (isset($item[IMenu::FIELD__ITEMS])) {
                $itemsView .= $this->render(new Menu($item), $render, $context);
            } else {
                $access = $item[IMenu::FIELD__ACCESS];
                $player = $context->getCurrentPlayer();
                $access[IAccess::FIELD__OBJECT] = $player ? $player->getAliases() : 'guest';
                $operation = new AccessOperation($access);

                if (!$operation->exists()) {
echo '<!-- operation not found<pre>' . print_r($operation,true) . '</pre>-->';
                    continue;
                } else {
echo '<!-- F operation found<pre>' . print_r($operation,true) . '</pre>-->';
		}
                $itemsView .= $render->render($item['template'], ['item' => $item]);
            }
        }

        $menu->setItems($itemsView);
        return $render->render($menu->getTemplate(), ['menu' => $menu->__toArray()]);
    }
}

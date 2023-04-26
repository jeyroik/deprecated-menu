<?php
namespace df\interfaces\menus;

use jeyroik\extas\interfaces\systems\IItem;

/**
 * Interface IMenuItem
 *
 * @package df\interfaces\menus
 * @author aivanov@fix.ru
 */
interface IMenuItem extends IItem
{
    const SUBJECT = 'df.menu.item';

    const FIELD__LABEL = 'label';
    const FIELD__URL = 'url';
    const FIELD__ACCESS = 'access';
    const FIELD__TEMPLATE = 'template';
    const FIELD__TITLE = 'title';
    const FIELD__ICON = 'icon';

    /**
     * @return mixed
     */
    public function getIcon();

    /**
     * @return mixed
     */
    public function getTitle();

    /**
     * @return mixed
     */
    public function getLabel();

    /**
     * @return mixed
     */
    public function getUrl();

    /**
     * @return mixed
     */
    public function getAccess();

    /**
     * @return mixed
     */
    public function getTemplate();

    /**
     * @param $title
     *
     * @return $this
     */
    public function setTitle($title);

    /**
     * @param $icon
     *
     * @return $this
     */
    public function setIcon($icon);

    /**
     * @param $label
     *
     * @return $this
     */
    public function setLabel($label);

    /**
     * @param $url
     *
     * @return $this
     */
    public function setUrl($url);

    /**
     * @param $access
     *
     * @return $this
     */
    public function setAccess($access);

    /**
     * @param $template
     *
     * @return $this
     */
    public function setTemplate($template);
}

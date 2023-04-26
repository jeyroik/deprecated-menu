<?php
namespace df\components\menus;

use df\interfaces\menus\IMenuItem;
use jeyroik\extas\components\systems\Item;

/**
 * Class MenuItem
 *
 * @package df\components\menus
 * @author aivanov@fix.ru
 */
class MenuItem extends Item implements IMenuItem
{
    /**
     * @return mixed
     */
    public function getIcon()
    {
        return $this->config[static::FIELD__ICON] ?? '';
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->config[static::FIELD__TITLE] ?? '';
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->config[static::FIELD__LABEL] ?? '';
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->config[static::FIELD__URL] ?? '';
    }

    /**
     * @return mixed
     */
    public function getAccess()
    {
        return $this->config[static::FIELD__ACCESS] ?? [];
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->config[static::FIELD__TEMPLATE] ?? '';
    }

    /**
     * @param $icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->config[static::FIELD__ICON] = $icon;

        return $this;
    }

    /**
     * @param $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->config[static::FIELD__TITLE] = $title;

        return $this;
    }

    /**
     * @param $label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->config[static::FIELD__LABEL] = $label;

        return $this;
    }

    /**
     * @param $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->config[static::FIELD__URL] = $url;

        return $this;
    }

    /**
     * @param $access
     *
     * @return $this
     */
    public function setAccess($access)
    {
        $this->config[static::FIELD__ACCESS] = $access;

        return $this;
    }

    /**
     * @param $template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->config[static::FIELD__TEMPLATE] = $template;

        return $this;
    }

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}

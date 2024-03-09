<?php
class ToolsCore
{
    /**
     * Get a value from $_POST / $_GET
     * if unavailable, take a default value.
     *
     * @param string $key Value key
     * @param mixed $default_value (optional)
     *
     * @return mixed Value
     */
    public static function getValue($key, $default_value = false)
    {
        if (empty($key) || !is_string($key)) {
            return false;
        }

        if (isset($_POST[$key]) || isset($_GET[$key])) {
            $value = isset($_POST[$key]) ? $_POST[$key] : $_GET[$key];
        }

        if (!isset($value)) {
            $value = $default_value;
        }

        if (is_string($value)) {
            return urldecode(preg_replace('/((\%5C0+)|(\%00+))/i', '', urlencode($value)));
        }

        return $value;
    }
}
$queryStr = "SELECT * 
              FROM table
              WHERE id = " . Tools::getValue('id');

mysql_query($queryStr, $connection);

<?php
namespace log;

trait Logger
{
	public function log(string $msg)
	{
		echo '<pre style="color:red">';
		echo date('Y-m-d h:i:s') . ':' . 
                        '(' . __CLASS__ . ') ' 
                        . $msg . '<br/>';
		echo '</pre>';
	}
}
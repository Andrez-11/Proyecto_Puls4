<?php

	class validador
	{
		public static function email($_correo = null)
		{
			if (filter_var($_correo, FILTER_VALIDATE_EMAIL))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

?>
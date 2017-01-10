<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   NightsWatch.class.php                              :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 18:50:58 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 20:01:43 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class NightsWatch
{
	public $tab = array();
	function recruit($char)
    {
		if(method_exists($char, "fight"))
		{
			$this->tab[] = $char;
		}
	}
	function fight()
	{
		foreach($this->tab as $val)
		{
			$val->fight();
		}
	}
}

date_default_timezone_set("Europe/Paris");
error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
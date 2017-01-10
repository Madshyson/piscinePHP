/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Color.class.php                                    :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/21 15:12:30 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/21 18:29:03 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Color 
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	function __construct($tab)
	{
	}

	function doc()
	{
		$read = fopen("Color.doc.txt", 'r');
		echo "\n";
		while ($read && !feof($read))
			echo fgets($read);
		echo "\n";
	}
}
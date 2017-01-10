<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Tyrion.class.php                                   :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 12:01:16 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 12:32:08 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Tyrion extends Lannister
{
	public function __construct()
	{
		parent::__construct();
		print ("My name is Tyrion". PHP_EOL);
		return;
	}
	public function getSize()
	{
		return "Short";
	}
}
?>
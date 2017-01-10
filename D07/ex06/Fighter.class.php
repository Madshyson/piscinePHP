<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Fighter.class.php                                  :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 20:32:10 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 22:28:26 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Fighter
{
	private $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
}
?>
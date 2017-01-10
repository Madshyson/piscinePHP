<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Targaryen.class.php                                :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 13:13:57 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 15:20:42 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Targaryen
{
	public function getBurned()
	{
		if ($this->resistsFire())
			return "emerges naked but unharmed";
		else
			return "burns alive";
	}
	public function resistsFire()
	{
		return FALSE;
	}
}

?>
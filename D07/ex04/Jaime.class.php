<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Jaime.class.php                                    :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 16:19:14 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 18:35:03 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class Jaime
{
	public function sleepWith($char)
	{
		if ($char instanceof Tyrion)
		{
			print("Not even if I'm drunk" . PHP_EOL);
		}
		if ($char instanceof Cersei)
		{
			print("With pleasure, but only in a tower in Winterfell, then.". PHP_EOL);
		}
		if ($char instanceof Sansa)
		{
			print("Let's do this.". PHP_EOL);
		}
	}
	
}

?>
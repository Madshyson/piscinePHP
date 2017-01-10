<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   Tyrion.class.php                                   :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 16:42:40 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 18:46:42 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */


class Tyrion
{
	public function sleepWith($char)
    {
        if ($char instanceof Cersei || $char instanceof Jaime)
        {
            print("Not even if I'm drunk" . PHP_EOL);
        }
		if ($char instanceof Sansa)
		{
			print("With pleasure, but only in a tower in Winterfell, then.". PHP_EOL);
		}
	}
}

?>
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   House.class.php                                    :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: mlavanan <marvin@42.fr>                    +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/06/22 15:24:02 by mlavanan          #+#    #+#             */
/*   Updated: 2016/06/22 16:07:29 by mlavanan         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

class House
{
	public function introduce()
	{
		print("House " . $this->getHouseName() . " of ");
		print($this->getHouseseat() . " : ");		
		print("\"" . $this->getHouseMotto()."\"" . PHP_EOL);
	}
}

date_default_timezone_set("Europe/Paris"); 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 

?>